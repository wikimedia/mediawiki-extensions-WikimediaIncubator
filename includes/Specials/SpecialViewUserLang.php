<?php

namespace MediaWiki\Extension\WikimediaIncubator\Specials;

use MediaWiki\Extension\WikimediaIncubator\WikimediaIncubator;
use MediaWiki\Html\Html;
use MediaWiki\HTMLForm\HTMLForm;
use MediaWiki\Languages\LanguageNameUtils;
use MediaWiki\Linker\Linker;
use MediaWiki\Message\Message;
use MediaWiki\SpecialPage\SpecialPage;
use MediaWiki\Title\Title;
use MediaWiki\User\Options\UserOptionsLookup;
use MediaWiki\User\User;
use MediaWiki\User\UserNamePrefixSearch;
use MediaWiki\User\UserNameUtils;

/**
 * Provides a special page to look up user language and test wiki
 * This can be useful e.g. when a user has a problem with the preference system,
 * so the test wiki/language information can be easily looked up
 *
 * Based on code from extension LookupUser made by Tim Starling
 *
 * @ingroup SpecialPage
 * @author Robin Pepermans (SPQRobin)
 */
class SpecialViewUserLang extends SpecialPage {
	/** @var UserNamePrefixSearch */
	private $userNamePrefixSearch;

	/** @var UserNameUtils */
	private $userNameUtils;

	/** @var UserOptionsLookup */
	private $userOptionsLookup;

	/** @var LanguageNameUtils */
	private $languageNameUtils;

	/**
	 * @param UserNamePrefixSearch $userNamePrefixSearch
	 * @param UserNameUtils $userNameUtils
	 * @param UserOptionsLookup $userOptionsLookup
	 * @param LanguageNameUtils $languageNameUtils
	 */
	public function __construct(
		UserNamePrefixSearch $userNamePrefixSearch,
		UserNameUtils $userNameUtils,
		UserOptionsLookup $userOptionsLookup,
		LanguageNameUtils $languageNameUtils
	) {
		parent::__construct( 'ViewUserLang', 'viewuserlang' );
		$this->userNamePrefixSearch = $userNamePrefixSearch;
		$this->userNameUtils = $userNameUtils;
		$this->userOptionsLookup = $userOptionsLookup;
		$this->languageNameUtils = $languageNameUtils;
	}

	/**
	 * @return Message
	 */
	public function getDescription() {
		return $this->msg( 'wminc-viewuserlang' );
	}

	/**
	 * Show the special page
	 * @param string|null $subpage parameter passed to the page or null
	 */
	public function execute( $subpage ) {
		$this->setHeaders();
		$this->checkPermissions();

		$target = $this->getRequest()->getText( 'target', $subpage );

		$this->showForm( $target );

		if ( $target ) {
			$this->showInfo( $target );
		}
	}

	/**
	 * Show the ViewUserLang form
	 * @param mixed $target user whose language and test wiki we're about to look up
	 */
	public function showForm( $target ) {
		$form = HTMLForm::factory( 'ooui',
			[ 'Target' => [
				'type' => 'user',
				'name' => 'target',
				'id' => 'viewuserlang-username',
				'size' => 40,
				'label-message' => 'wminc-viewuserlang-user',
				'default' => $target,
				'excludetemp' => true,
			] ],
			$this->getContext()
		);
		$form->setMethod( 'get' )
			->setWrapperLegendMsg( 'wminc-viewuserlang' )
			->setSubmitTextMsg( 'wminc-viewuserlang-go' )
			->prepareForm()
			->displayForm( false );
	}

	/**
	 * Retrieves and shows the user language and test wiki
	 * @param mixed $target user whose language and test wiki we're looking up
	 */
	public function showInfo( $target ) {
		global $wgWmincPref, $wgWmincProjectSite;
		$user = User::newFromName( $target );
		if ( $this->userNameUtils->isIP( $target ) || !$user || $user->isTemp() ) {
			# show error if it is an IP address, or another error occurs
			$this->getOutput()->addHTML( Html::element( 'span', [ 'class' => 'error' ],
				$this->msg( 'wminc-ip', $target )->text() ) );
			return;
		}
		$name = $user->getName();
		$id = $user->getId();
		$langNames = $this->languageNameUtils->getLanguageNames( $this->getLanguage()->getCode() );
		if ( !$id ) {
			# show error if a user with that name does not exist
			$this->getOutput()->addHTML( Html::element( 'span', [ 'class' => 'error' ],
				$this->msg( 'wminc-userdoesnotexist', $target )->text() ) );
			return;
		}
		$projectPref = $this->userOptionsLookup->getOption( $user, $wgWmincPref . '-project' );
		$projectPref = $projectPref ?: 'none';
		$codePref = $this->userOptionsLookup->getOption( $user, $wgWmincPref . '-code' );
		$prefix = WikimediaIncubator::displayPrefix( $projectPref, $codePref ?: 'none' );
		if ( WikimediaIncubator::isContentProject( $this->getUser(), $projectPref ) ) {
			$testwiki = $this->getLinkRenderer()->makeLink( Title::newFromText( $prefix ) );
		} elseif ( $prefix == $wgWmincProjectSite['short'] ) {
			$testwiki = htmlspecialchars( $wgWmincProjectSite['name'] );
		} else {
			$testwiki = $this->msg( 'wminc-testwiki-none' )->escaped();
		}
		$langPref = $this->userOptionsLookup->getOption( $user, 'language' );
		$this->getOutput()->addHtml( Html::rawElement( 'ul', [],
			'<li>' . $this->msg( 'username' )->escaped() . ' ' .
				Linker::userLink( $id, $name ) . Linker::userToolLinks( $id, $name, true ) . '</li>' .
			'<li>' . $this->msg( 'loginlanguagelabel', $langNames[ $langPref ] .
				' (' . htmlspecialchars( $langPref ) . ')' )->escaped() . '</li>' .
			'<li>' . $this->msg( 'wminc-testwiki' )->escaped() . ' ' . $testwiki . '</li>'
		) );
	}

	/**
	 * Return an array of subpages beginning with $search that this special page will accept.
	 *
	 * @param string $search Prefix to search for
	 * @param int $limit Maximum number of results to return (usually 10)
	 * @param int $offset Number of results to skip (usually 0)
	 * @return string[] Matching subpages
	 */
	public function prefixSearchSubpages( $search, $limit, $offset ) {
		$search = $this->userNameUtils->getCanonical( $search );
		if ( !$search ) {
			// No prefix suggestion for invalid user
			return [];
		}
		// Autocomplete subpage as user list - public to allow caching
		return $this->userNamePrefixSearch->search( UserNamePrefixSearch::AUDIENCE_PUBLIC, $search, $limit, $offset );
	}

	/** @inheritDoc */
	protected function getGroupName() {
		return 'users';
	}
}

<?php
/**
 * Provides a special page to look up user language and test wiki
 * This can be useful e.g. when a user has a problem with the preference system,
 * so the test wiki/language information can be easily looked up
 *
 * Based on code from extension LookupUser made by Tim Starling
 *
 * @file
 * @ingroup SpecialPage
 * @author Robin Pepermans (SPQRobin)
 */

namespace MediaWiki\Extension\WikimediaIncubator;

use HTMLForm;
use Language;
use Linker;
use MediaWiki\User\UserNamePrefixSearch;
use MediaWiki\User\UserNameUtils;
use MediaWiki\User\UserOptionsLookup;
use SpecialPage;
use Title;
use User;
use Xml;

class SpecialViewUserLang extends SpecialPage {
	/** @var UserNamePrefixSearch */
	private $userNamePrefixSearch;

	/** @var UserNameUtils */
	private $userNameUtils;

	/** @var UserOptionsLookup */
	private $userOptionsLookup;

	/**
	 * @param UserNamePrefixSearch $userNamePrefixSearch
	 * @param UserNameUtils $userNameUtils
	 * @param UserOptionsLookup $userOptionsLookup
	 */
	public function __construct(
		UserNamePrefixSearch $userNamePrefixSearch,
		UserNameUtils $userNameUtils,
		UserOptionsLookup $userOptionsLookup
	) {
		parent::__construct( 'ViewUserLang', 'viewuserlang' );
		$this->userNamePrefixSearch = $userNamePrefixSearch;
		$this->userNameUtils = $userNameUtils;
		$this->userOptionsLookup = $userOptionsLookup;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->msg( 'wminc-viewuserlang' )->plain();
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
		global $wmincPref, $wmincProjectSite;
		$user = User::newFromName( $target );
		if ( $this->userNameUtils->isIP( $target ) || !$user ) {
			# show error if it is an IP address, or another error occurs
			$this->getOutput()->addHTML( Xml::span( $this->msg( 'wminc-ip', $target )->text(), 'error' ) );
			return;
		}
		$name = $user->getName();
		$id = $user->getId();
		$langNames = Language::fetchLanguageNames( $this->getLanguage()->getCode() );
		if ( !$id ) {
			# show error if a user with that name does not exist
			$this->getOutput()->addHTML( Xml::span(
				$this->msg( 'wminc-userdoesnotexist', $target )->text(), 'error' ) );
			return;
		}
		$projectPref = $this->userOptionsLookup->getOption( $user, $wmincPref . '-project' );
		$projectPref = $projectPref ?: 'none';
		$codePref = $this->userOptionsLookup->getOption( $user, $wmincPref . '-code' );
		$prefix = WikimediaIncubator::displayPrefix( $projectPref, $codePref ?: 'none' );
		if ( WikimediaIncubator::isContentProject( $this->getUser(), $projectPref ) ) {
			$testwiki = $this->getLinkRenderer()->makeLink( Title::newFromText( $prefix ) );
		} elseif ( $prefix == $wmincProjectSite['short'] ) {
			$testwiki = htmlspecialchars( $wmincProjectSite['name'] );
		} else {
			$testwiki = $this->msg( 'wminc-testwiki-none' )->escaped();
		}
		$langPref = $this->userOptionsLookup->getOption( $user, 'language' );
		$this->getOutput()->addHtml(
			Xml::openElement( 'ul' ) .
			'<li>' . $this->msg( 'username' )->escaped() . ' ' .
				Linker::userLink( $id, $name ) . Linker::userToolLinks( $id, $name, true ) . '</li>' .
			'<li>' . $this->msg( 'loginlanguagelabel', $langNames[ $langPref ] .
				' (' . htmlspecialchars( $langPref ) . ')' )->escaped() . '</li>' .
			'<li>' . $this->msg( 'wminc-testwiki' )->escaped() . ' ' . $testwiki . '</li>' .
			Xml::closeElement( 'ul' )
		);
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

	protected function getGroupName() {
		return 'users';
	}
}

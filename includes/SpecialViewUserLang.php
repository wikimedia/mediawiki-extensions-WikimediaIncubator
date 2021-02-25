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

use MediaWiki\User\UserNameUtils;

class SpecialViewUserLang extends SpecialPage {
	/** @var UserNameUtils */
	private $userNameUtils;

	public function __construct( UserNameUtils $userNameUtils ) {
		parent::__construct( 'ViewUserLang', 'viewuserlang' );
		$this->userNameUtils = $userNameUtils;
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
		$userproject = $user->getOption( $wmincPref . '-project' );
		$userproject = $userproject ?: 'none';
		$usercode = $user->getOption( $wmincPref . '-code' );
		$prefix = WikimediaIncubator::displayPrefix( $userproject, $usercode ?: 'none' );
		if ( WikimediaIncubator::isContentProject( $this->getUser(), $userproject ) ) {
			$testwiki = $this->getLinkRenderer()->makeLink( Title::newFromText( $prefix ) );
		} elseif ( $prefix == $wmincProjectSite['short'] ) {
			$testwiki = htmlspecialchars( $wmincProjectSite['name'] );
		} else {
			$testwiki = $this->msg( 'wminc-testwiki-none' )->escaped();
		}
		$this->getOutput()->addHtml(
			Xml::openElement( 'ul' ) .
			'<li>' . $this->msg( 'username' )->escaped() . ' ' .
				Linker::userLink( $id, $name ) . Linker::userToolLinks( $id, $name, true ) . '</li>' .
			'<li>' . $this->msg( 'loginlanguagelabel', $langNames[$user->getOption( 'language' )] .
				' (' . htmlspecialchars( $user->getOption( 'language' ) ) . ')' )->escaped() . '</li>' .
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
		$user = User::newFromName( $search );
		if ( !$user ) {
			// No prefix suggestion for invalid user
			return [];
		}
		// Autocomplete subpage as user list - public to allow caching
		return UserNamePrefixSearch::search( 'public', $search, $limit, $offset );
	}

	protected function getGroupName() {
		return 'users';
	}
}

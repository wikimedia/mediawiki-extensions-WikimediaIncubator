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

class SpecialViewUserLang extends SpecialPage {
	public function __construct() {
		parent::__construct( 'ViewUserLang', 'viewuserlang' );
	}

	/**
	 * @return String
	 */
	function getDescription() {
		return $this->msg( 'wminc-viewuserlang' )->plain();
	}

	/**
	 * Show the special page
	 * @param $subpage Mixed: parameter passed to the page or null
	 */
	public function execute( $subpage ) {
		$this->setHeaders();

		if ( !$this->getUser()->isAllowed( 'viewuserlang' ) ) {
			$this->displayRestrictionError();
			return;
		}

		$target = $this->getRequest()->getText( 'target', $subpage );

		$this->showForm( $target );

		if ( $target ) {
			$this->showInfo( $target );
		}
	}

	/**
	 * Show the ViewUserLang form
	 * @param $target Mixed: user whose language and test wiki we're about to look up
	 */
	function showForm( $target ) {
		global $wgScript;

		$this->getOutput()->addHTML(
			Xml::fieldset( $this->msg( 'wminc-viewuserlang' )->plain() ) .
			Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript ) ) .
			Html::hidden( 'title', $this->getPageTitle()->getPrefixedText() ) .
			"<p>" .
				Xml::inputLabel( $this->msg( 'wminc-viewuserlang-user' )->text(), 'target', 'viewuserlang-username', 40, $target ) .
				' ' .
				Xml::submitButton( $this->msg( 'wminc-viewuserlang-go' )->text() ) .
			"</p>" .
			Xml::closeElement( 'form' ) .
			Xml::closeElement( 'fieldset' )
		);
	}

	/**
	 * Retrieves and shows the user language and test wiki
	 * @param $target Mixed: user whose language and test wiki we're looking up
	 */
	function showInfo( $target ) {
		global $wmincPref, $wmincProjectSite;
		$user = User::newFromName( $target );
		if ( User::isIP( $target ) || !$user ) {
			# show error if it is an IP address, or another error occurs
			$this->getOutput()->addHTML( Xml::span( $this->msg( 'wminc-ip', $target )->text(), 'error' ) );
			return;
		}
		$name = $user->getName();
		$id = $user->getId();
		$langNames = Language::fetchLanguageNames( $this->getLanguage()->getCode() );
		if ( $user == null || $id == 0 ) {
			# show error if a user with that name does not exist
			$this->getOutput()->addHTML( Xml::span( $this->msg( 'wminc-userdoesnotexist', $target )->text(), 'error' ) );
			return;
		}
		$userproject = $user->getOption( $wmincPref . '-project' );
		$userproject = ( $userproject ? $userproject : 'none' );
		$usercode = $user->getOption( $wmincPref . '-code' );
		$prefix = WikimediaIncubator::displayPrefix( $userproject, $usercode ? $usercode : 'none' );
		if ( WikimediaIncubator::isContentProject( $userproject ) ) {
			$testwiki = Linker::link( Title::newFromText( $prefix ) );
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
				' (' . $user->getOption( 'language' ) . ')' )->escaped() . '</li>' .
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
		if ( !class_exists( 'UserNamePrefixSearch' ) ) { // check for version 1.27
			return array();
		}
		$user = User::newFromName( $search );
		if ( !$user ) {
			// No prefix suggestion for invalid user
			return array();
		}
		// Autocomplete subpage as user list - public to allow caching
		return UserNamePrefixSearch::search( 'public', $search, $limit, $offset );
	}

	protected function getGroupName() {
		return 'users';
	}
}

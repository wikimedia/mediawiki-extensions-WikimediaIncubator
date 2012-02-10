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
	function getDescription() { return wfMessage( 'wminc-viewuserlang' )->plain(); }

	/**
	 * Show the special page
	 * @param $subpage Mixed: parameter passed to the page or null
	 */
	public function execute( $subpage ) {
		global $wgRequest, $wgUser;

		$this->setHeaders();

		if ( !$wgUser->isAllowed( 'viewuserlang' ) ) {
			$this->displayRestrictionError();
			return;
		}

		$target = $wgRequest->getText( 'target', $subpage );

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
		global $wgScript, $wgOut;

		$wgOut->addHTML(
			Xml::fieldset( wfMessage( 'wminc-viewuserlang' )->plain() ) .
			Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript ) ) .
			Html::hidden( 'title', $this->getTitle()->getPrefixedText() ) .
			"<p>" .
				Xml::inputLabel( wfMessage( 'wminc-viewuserlang-user' )->text(), 'target', 'viewuserlang-username', 40, $target ) .
				' ' .
				Xml::submitButton( wfMessage( 'wminc-viewuserlang-go' )->text() ) .
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
		global $wgOut, $wmincPref, $wmincProjectSite;
		if( User::isIP( $target ) ) {
			# show error if it is an IP address
			$wgOut->addHTML( Xml::span( wfMessage( 'wminc-ip', $target )->text(), 'error' ) );
			return;
		}
		$user = User::newFromName( $target );
		$name = $user->getName();
		$id = $user->getId();
		$langNames = Language::getLanguageNames();
		if ( $user == null || $id == 0 ) {
			# show error if a user with that name does not exist
			$wgOut->addHTML( Xml::span( wfMessage( 'wminc-userdoesnotexist', $target )->text(), 'error' ) );
			return;
		}
		$userproject = $user->getOption( $wmincPref . '-project' );
		$userproject = ( $userproject ? $userproject : 'none' );
		$usercode = $user->getOption( $wmincPref . '-code' );
		$prefix = IncubatorTest::displayPrefix( $userproject, $usercode ? $usercode : 'none' );
		if ( IncubatorTest::isContentProject( $userproject ) ) {
			$testwiki = Linker::link( Title::newFromText( $prefix ) );
		} elseif ( $prefix == $wmincProjectSite['short'] ) {
			$testwiki = htmlspecialchars( $wmincProjectSite['name'] );
		} else {
			$testwiki = wfMessage( 'wminc-testwiki-none' )->escaped();
		}
		$wgOut->addHtml(
			Xml::openElement( 'ul' ) .
			'<li>' . wfMessage( 'username' )->escaped() . ' ' .
				Linker::userLink( $id, $name ) . Linker::userToolLinks( $id, $name, true ) . '</li>' .
			'<li>' . wfMessage( 'loginlanguagelabel', $langNames[$user->getOption( 'language' )] .
				' (' . $user->getOption( 'language' ) . ')' )->escaped() . '</li>' .
			'<li>' . wfMessage( 'wminc-testwiki' )->escaped() . ' ' . $testwiki . '</li>' .
			Xml::closeElement( 'ul' )
		);
	}
}

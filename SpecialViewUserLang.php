<?php
/**
 * Provides a special page to look up user language and test wiki
 * This can be useful e.g. when a user has a problem with the preference system,
 * so the test wiki/language information can be easily looked up
 *
 * Based on code from extension LookupUser made by Tim Starling
 *
 * @file
 */

class SpecialViewUserLang extends SpecialPage
{
	public function __construct() {
		parent::__construct( 'ViewUserLang', 'viewuserlang' );
	}

	function getDescription() { return wfMsg( 'wminc-viewuserlang' ); }

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
			Xml::fieldset( wfMsgHtml( 'wminc-viewuserlang' ) ) .
			Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript ) ) .
			Html::hidden( 'title', $this->getTitle()->getPrefixedText() ) .
			"<p>" .
				Xml::inputLabel( wfMsgHtml( 'wminc-viewuserlang-user' ), 'target', 'viewuserlang-username', 40, $target ) .
				' ' .
				Xml::submitButton( wfMsgHtml( 'wminc-viewuserlang-go' ) ) .
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
		global $wgOut, $wmincPref, $wmincProjectSite, $wgUser;
		$sk = $wgUser->getSkin();
		$user = User::newFromName( $target );
		$langNames = Language::getLanguageNames();
		if ( $user == null || $user->getId() == 0 ) {
			// show error if a user with that name does not exist
			$wgOut->addHTML( Xml::span( wfMsg( 'wminc-userdoesnotexist', $target ), 'error' ) );
		} else {
			$userproject = $user->getOption( $wmincPref . '-project' );
			$usercode = $user->getOption( $wmincPref . '-code' );
			$prefix = IncubatorTest::displayPrefix( $userproject, $usercode );
			if ( IncubatorTest::isContentProject( $userproject ) ) {
				$testwiki = $sk->link( Title::newFromText( $prefix ) );
			} elseif ( $prefix == $wmincProjectSite['short'] ) {
				$testwiki = htmlspecialchars( $wmincProjectSite['name'] );
			} else {
				$testwiki = wfMsgHtml( 'wminc-testwiki-none' );
			}
			$name = $user->getName();
			$wgOut->addHtml(
				Xml::openElement( 'ul' ) .
				'<li>' . wfMsgHtml( 'username' ) . ' ' .
					$sk->userLink( $name, $name ) . $sk->userToolLinks( $name, $name ) . '</li>' .
				'<li>' . wfMsgHtml( 'loginlanguagelabel', $langNames[$user->getOption( 'language' )] .
					' (' . $user->getOption( 'language' ) . ')' ) . '</li>' .
				'<li>' . wfMsgHtml( 'wminc-testwiki' ) . ' ' . $testwiki . '</li>' .
				Xml::closeElement( 'ul' )
			);
		}
	}
}

<?php
/**
 * Special page to go to the Main Page, depending on your test wiki.
 * Goes to the default Main Page if the test wiki preference
 * is set to None/All or Incubator.
 *
 * @file
 * @ingroup SpecialPage
 */

class SpecialMyMainPage extends UnlistedSpecialPage {

	public function __construct() {
		parent::__construct( 'MyMainPage' );
	}

	public function execute( $par ) {
		global $wgOut;

		$title = '';
		$params = array();

		if( IncubatorTest::isContentProject() ) {
			global $wgRequest;
			$title = Title::newFromText( IncubatorTest::displayPrefix() );
			if( $wgRequest->getVal( 'goto' ) != 'infopage' ) {
				# Used in development version
				$params = array( 'goto' => 'mainpage' );
			}
		}

		# Go to the main page if given invalid title, or if it's not a content project
		if ( !$title ) {
			$title = Title::newMainPage();
		}

		$wgOut->redirect( $title->getLocalURL( $params ) );
	}
}
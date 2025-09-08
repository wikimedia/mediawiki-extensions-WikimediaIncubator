<?php

namespace MediaWiki\Extension\WikimediaIncubator\Specials;

use MediaWiki\Extension\WikimediaIncubator\WikimediaIncubator;
use MediaWiki\SpecialPage\UnlistedSpecialPage;
use MediaWiki\Title\Title;

/**
 * Special page to go to a page on one's test wiki as set in the
 * preferences. Goes to the default Main Page if the test wiki or
 * an unprefixed page if the test wiki preference is set no
 * None/All or Incubator.
 *
 * @ingroup SpecialPage
 * @author Robin Pepermans (SPQRobin)
 * @author Jon Harald Søby
 */
class SpecialMyWiki extends UnlistedSpecialPage {

	public function __construct() {
		parent::__construct( 'MyWiki' );
	}

	/** @inheritDoc */
	public function execute( $subpage ) {
		$title = '';
		// Remove a single initial colon from the subpage if there are any.
		// If there are several, that's an invalid title, which is handled
		// differently.
		$subpage = $subpage ? trim( $subpage ) : '';
		$subpage = preg_replace( '/^:(?!:)/', '', $subpage );
		// We want to pass any parameters that are used, except for 'title'
		$params = $this->getRequest()->getValues();
		unset( $params['title'] );

		$userHasTestWiki = WikimediaIncubator::isContentProject( $this->getUser() );
		$prefix = $userHasTestWiki ? WikimediaIncubator::displayPrefix() : '';

		if ( $subpage === '' ) {
			if ( $this->getRequest()->getVal( 'goto' ) !== 'infopage' ) {
				$params['goto'] = 'mainpage';
			}

			if ( !$userHasTestWiki ) {
				$title = Title::newMainPage();
			} else {
				$title = Title::newFromText( $prefix );
			}
		} elseif ( Title::newFromText( $subpage ) ) {
			$target = Title::newFromText( $subpage );
			$targetNs = $target->getNamespace();
			$targetPagename = $target->getBaseText();

			$originalPagename = $subpage;
			// Get the original pagename without namespace
			// if it is not an article
			if ( $targetNs !== 0 ) {
				$originalPagename = explode( ':', $originalPagename, 2 )[1];
			}
			// Remove any initial spaces or underscores from the given title
			$originalPagename = preg_replace( '/^[_\s]+/', '', $originalPagename );

			// The given page name may have been given an uppercase initial
			// by getBaseText above. If they are not equal, prefer the one that was
			// given.
			// TODO: Whether or not the title's initial should be uppercased
			// should depend on the project (Wiktionaries are lowercase), but also
			// language (some languages don't use uppercase initially).
			if ( $originalPagename !== $targetPagename ) {
				$targetPagename = $originalPagename;
			}

			if ( $userHasTestWiki ) {
				$title = WikimediaIncubator::displayPrefixedTitle( $targetPagename, $targetNs, false );
			} else {
				$title = $target;
			}
		} else {
			// Fallback in case the given title is invalid
			$title = Title::newMainPage();
		}

		$this->getOutput()->redirect( $title->getLocalURL( $params ) );
	}
}

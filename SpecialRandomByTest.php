<?php
/**
* Special page to go to a random page in your test wiki
 * @file
 */

class SpecialRandomByTest extends RandomPage
{
	public function __construct() {
		global $wgUser, $wmincPref, $wmincProjectSite;
		if(IncubatorTest::isNormalPrefix()) {
			$dbr = wfGetDB( DB_SLAVE );
			$this->extra[] = 'page_title' .
				$dbr->buildLike( IncubatorTest::displayPrefix() . '/', $dbr->anyString() );
		} elseif($wgUser->getOption($wmincPref . '-project') == $wmincProjectSite['short'] ) {
			// project or help namespace
			$this->extra['page_namespace'] = array( 4, 12 );
		}
		parent::__construct( 'RandomByTest' );
	}
}

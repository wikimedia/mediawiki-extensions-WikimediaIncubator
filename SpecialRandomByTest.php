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
			$this->extra[] = 'page_title like "W' . $wgUser->getOption($wmincPref . '-project') .
			'/' . $wgUser->getOption($wmincPref . '-code') . '/%%"';
		} elseif($wgUser->getOption($wmincPref . '-project') == $wmincProjectSite['short'] ) {
			// project or help namespace
			$this->extra['page_namespace'] = array( 4, 12 );
		}
		parent::__construct( 'RandomByTest' );
	}
}

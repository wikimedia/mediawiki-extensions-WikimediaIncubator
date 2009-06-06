<?php
/**
* Special page to go to a random page in your test wiki
 * @file
 */

class SpecialRandomByTest extends RandomPage
{
	public function __construct() {
		parent::__construct( 'RandomByTest' );		
	}

	public function addExtraSQL() {
		global $wgUser, $wmincPref;
		if(IncubatorTest::isNormalPrefix()) {
			return 'page_title like "W'.$wgUser->getOption($wmincPref . '-project').'/'.$wgUser->getOption($wmincPref . '-code').'/%%"';
		} elseif($wgUser->getOption($wmincPref . '-project') == 'inc') {
			return 'page_title not like "W_/%%" OR "W_/%%/%%"';
		}
	}
}

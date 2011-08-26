<?php

/**
 * Ability to filter list of users based on their test wiki preference
 */
class ListUsersTestWiki {
	/**
	 * Get the &testwiki=wx/xyz parameter and validate it
	 * @return Array
	 */
	static function getTestWiki() {
		global $wgRequest;
		return IncubatorTest::analyzePrefix( $wgRequest->getVal( 'testwiki' ), true );
	}

	/**
	 * Input form
	 */
	static function onSpecialListusersHeaderForm( $pager, &$out ) {
		$testwiki = self::getTestWiki();
		$out .= Xml::label( wfMsg( 'wminc-testwiki' ), 'testwiki' ) . ' ' .
			Xml::input( 'testwiki', 20, ( $testwiki['error'] ? null : $testwiki['prefix'] ), array( 'id' => 'testwiki' ) ) . '<br />';
		return true;
	}

	/**
	 * Show a message that you are viewing a list of users of a certain test wiki
	 */
	static function onSpecialListusersHeader( $pager, &$out ) {
		$testwiki = self::getTestWiki();
		if( !$testwiki['error'] ) {
			$out .= wfMsgWikiHtml( 'wminc-listusers-testwiki', $testwiki['prefix'] );
		}
		return true;
	}

	/**
	 * Query
	 */
	static function onSpecialListusersQueryInfo( $pager, &$query ) {
		$testwiki = self::getTestWiki();
		if( !$testwiki['error'] ) {
			global $wmincPref;
			$dbr = wfGetDB( DB_SLAVE );
			$projectPrefName = $dbr->addQuotes( "$wmincPref-project" );
			$projectPrefVal = $dbr->addQuotes( $testwiki['project'] );
			$langPrefName = $dbr->addQuotes( "$wmincPref-code" );
			$langPrefVal = $dbr->addQuotes( $testwiki['lang'] );
			$query['tables']['p1'] = 'user_properties';
			$query['tables']['p2'] = 'user_properties';
			$query['join_conds']['p1'] = array( 'JOIN',
				"user_id=p1.up_user AND (p1.up_property=$projectPrefName AND p1.up_value=$projectPrefVal)" );
			$query['join_conds']['p2'] = array( 'JOIN',
				"user_id=p2.up_user AND (p2.up_property=$langPrefName AND p2.up_value=$langPrefVal)" );
		}
		return true;
	}
}

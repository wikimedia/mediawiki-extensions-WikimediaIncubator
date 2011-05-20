<?php
/*
* Recent changes for a specific test wiki, or for all project changes (or normal display)
*/

class TestWikiRC {
	static function onRcQuery( &$conds, &$tables, &$join_conds, $opts ) {
		global $wgUser, $wgRequest, $wmincPref, $wmincProjectSite, $wmincTestWikiNamespaces;
		$projectvalue = strtolower( $wgRequest->getVal( 'rc-testwiki-project', $wgUser->getOption($wmincPref . '-project') ) );
		$codevalue = strtolower( $wgRequest->getVal( 'rc-testwiki-code', $wgUser->getOption($wmincPref . '-code') ) );
		$fullprefix = IncubatorTest::displayPrefix( $projectvalue, $codevalue );
		$opts->add( 'rc-testwiki-project', false );
		$opts->setValue( 'rc-testwiki-project', $projectvalue );
		$opts->add( 'rc-testwiki-code', false );
		$opts->setValue( 'rc-testwiki-code', $codevalue );
		if ( $projectvalue == 'none' || $projectvalue == '' ) {
			// If "none" is selected, display normal recent changes
			return true;
		} elseif ( $projectvalue == $wmincProjectSite['short'] ) {
			// If project site is selected, display all changes except test wiki changes
			$conds[] = 'rc_title not like \'W_/%%\' OR \'W_/%%/%%\'';
			return true;
		} else {
			// Else, display changes to the selected test wiki (in main, template and category namespace)
			$dbr = wfGetDB( DB_SLAVE );
			$conds['rc_namespace'] = $wmincTestWikiNamespaces;
			$conds[] = 'rc_title ' . $dbr->buildLike( $fullprefix . '/', $dbr->anyString() ) .
			' OR rc_title = ' . $dbr->addQuotes( $fullprefix );
			return true;
		}
	}

	static function onRcForm( &$items, $opts ) {
		global $wgUser, $wgRequest, $wmincPref, $wmincProjects, $wmincProjectSite, $wmincLangCodeLength;
		
		$projectvalue = $wgRequest->getVal( 'rc-testwiki-project', $wgUser->getOption($wmincPref . '-project') );
		$langcodevalue = $wgRequest->getVal( 'rc-testwiki-code', $wgUser->getOption($wmincPref . '-code') );
		$opts->consumeValue( 'rc-testwiki-project' );
		$opts->consumeValue( 'rc-testwiki-code' );
		$label = Xml::label( wfMsg( 'wminc-testwiki' ), 'rc-testwiki' );
		$select = new XmlSelect( 'rc-testwiki-project', 'rc-testwiki-project', $projectvalue );
		$select->addOption( wfMsg( 'wminc-testwiki-none' ), 'none' );
		foreach( $wmincProjects as $name => $prefix) {
			$select->addOption( $name, $prefix );
		}
		$select->addOption( $wmincProjectSite['name'], $wmincProjectSite['short'] );
		$langcode = Xml::input( 'rc-testwiki-code', (int)$wmincLangCodeLength, $langcodevalue,
			array( 'id' => 'rc-testwiki-code', 'maxlength' => (int)$wmincLangCodeLength ) );
		$items['testwiki'] = array( $label, $select->getHTML() . ' ' . $langcode );
		return true;
	}
}

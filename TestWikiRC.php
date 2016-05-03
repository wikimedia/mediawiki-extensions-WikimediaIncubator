<?php
/**
 * Recent changes for a specific test wiki, or for all project changes (or normal display)
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

class TestWikiRC {
	static function getValues() {
		global $wgUser, $wmincPref, $wgRequest;
		$url = WikimediaIncubator::getUrlParam();
		$projectvalue = $url ? $url['project'] : $wgUser->getOption( $wmincPref . '-project' );
		$codevalue = $url ? $url['lang'] : $wgUser->getOption( $wmincPref . '-code' );
		$projectvalue = strtolower( $wgRequest->getVal( 'rc-testwiki-project', $projectvalue ) );
		$codevalue = strtolower( $wgRequest->getVal( 'rc-testwiki-code', $codevalue ) );
		return [ $projectvalue, $codevalue ];
	}

	/**
	 * ChangesListSpecialPageQuery hook
	 *
	 * @param string $pageName
	 * @param array $tables
	 * @param array $fields
	 * @param array $conds
	 * @param array $query_options
	 * @param array $join_conds
	 * @param FormOptions $opts
	 * @return bool true
	 */
	static function onRcQuery( $pageName, &$tables, &$fields, &$conds, &$query_options,
		&$join_conds, FormOptions $opts
	) {
		global $wmincProjectSite, $wmincTestWikiNamespaces;

		if ( $pageName !== 'Recentchanges' ) {
			return true;
		}

		list( $projectvalue, $codevalue ) = self::getValues();
		$prefix = WikimediaIncubator::displayPrefix( $projectvalue, $codevalue );
		$opts->add( 'rc-testwiki-project', false );
		$opts->setValue( 'rc-testwiki-project', $projectvalue );
		$opts->add( 'rc-testwiki-code', false );
		$opts->setValue( 'rc-testwiki-code', $codevalue );

		if ( $projectvalue == $wmincProjectSite['short'] ) {
			// If project site is selected, display all changes except test wiki changes
			$dbr = wfGetDB( DB_SLAVE );
			$conds[] = 'rc_title NOT ' . $dbr->buildLike( 'W', $dbr->anyChar(), '/', $dbr->anyString() );
		} elseif ( WikimediaIncubator::validatePrefix( $prefix, true ) ) {
			// Else, display changes to the selected test wiki in the appropriate namespaces
			$dbr = wfGetDB( DB_SLAVE );
			$conds['rc_namespace'] = $wmincTestWikiNamespaces;
			$conds[] = 'rc_title ' . $dbr->buildLike( $prefix . '/', $dbr->anyString() ) .
			' OR rc_title = ' . $dbr->addQuotes( $prefix );
		}
		// If "none" is selected, display normal recent changes

		return true;
	}

	static function onRcForm( &$items, $opts ) {
		global $wmincProjects, $wmincProjectSite, $wmincLangCodeLength;

		list( $projectvalue, $codevalue ) = self::getValues();
		$opts->consumeValue( 'rc-testwiki-project' );
		$opts->consumeValue( 'rc-testwiki-code' );
		$label = Xml::label( wfMessage( 'wminc-testwiki' )->text(), 'rc-testwiki' );
		$select = new XmlSelect( 'rc-testwiki-project', 'rc-testwiki-project', $projectvalue );
		$select->addOption( wfMessage( 'wminc-testwiki-none' )->text(), 'none' );
		foreach ( $wmincProjects as $prefix => $name ) {
			$select->addOption( $name, $prefix );
		}
		$select->addOption( $wmincProjectSite['name'], $wmincProjectSite['short'] );
		$langcode = Xml::input( 'rc-testwiki-code', (int)$wmincLangCodeLength, $codevalue,
			[ 'id' => 'rc-testwiki-code', 'maxlength' => (int)$wmincLangCodeLength ] );
		$items['testwiki'] = [ $label, $select->getHTML() . ' ' . $langcode ];
		return true;
	}
}

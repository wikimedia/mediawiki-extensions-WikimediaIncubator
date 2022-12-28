<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use FormOptions;
use MediaWiki\MediaWikiServices;
use RequestContext;
use User;
use Xml;
use XmlSelect;

/**
 * Recent changes for a specific test wiki, or for all project changes (or normal display)
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

class TestWikiRC {
	/**
	 * Get values
	 *
	 * @param User $user
	 * @return array
	 */
	private static function getValues( User $user ) {
		global $wmincPref, $wgRequest;
		$url = WikimediaIncubator::getUrlParam();
		$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
		$projectPref = $userOptionsLookup->getOption( $user, $wmincPref . '-project' ) ?? '';
		$codePref = $userOptionsLookup->getOption( $user, $wmincPref . '-code' ) ?? '';
		$projectvalue = $url ? $url['project'] : $projectPref;
		$codevalue = $url ? $url['lang'] : $codePref;
		$projectvalue = strtolower( $wgRequest->getVal( 'rc-testwiki-project', $projectvalue ) );
		$codevalue = strtolower( $wgRequest->getVal( 'rc-testwiki-code', $codevalue ) );
		return [ $projectvalue, $codevalue ];
	}

	/**
	 * ChangesListSpecialPageQuery hook
	 *
	 * @param string $pageName
	 * @param array &$tables
	 * @param array &$fields
	 * @param array &$conds
	 * @param array &$query_options
	 * @param array &$join_conds
	 * @param FormOptions $opts
	 * @return bool true
	 */
	public static function onRcQuery( $pageName, &$tables, &$fields, &$conds, &$query_options,
		&$join_conds, FormOptions $opts
	) {
		global $wmincProjectSite, $wmincTestWikiNamespaces;

		if ( $pageName !== 'Recentchanges' ) {
			return true;
		}

		list( $projectvalue, $codevalue ) = self::getValues( RequestContext::getMain()->getUser() );
		$prefix = WikimediaIncubator::displayPrefix( $projectvalue, $codevalue );
		$opts->add( 'rc-testwiki-project', false );
		$opts->setValue( 'rc-testwiki-project', $projectvalue );
		$opts->add( 'rc-testwiki-code', false );
		$opts->setValue( 'rc-testwiki-code', $codevalue );

		if ( $projectvalue == $wmincProjectSite['short'] ) {
			// If project site is selected, display all changes except test wiki changes
			$dbr = wfGetDB( DB_REPLICA );
			$conds[] = 'rc_title NOT ' . $dbr->buildLike( 'W', $dbr->anyChar(), '/', $dbr->anyString() );
		} elseif ( WikimediaIncubator::validatePrefix( $prefix, true ) ) {
			// Else, display changes to the selected test wiki in the appropriate namespaces
			$dbr = wfGetDB( DB_REPLICA );
			// The next line (the phan-suppress one) is buggy some times. If phan-docker
			// complains, try re-adding it by adding/removing the initial @.
			// phan-suppress-next-line PhanPossiblyUndeclaredVariable
			$conds['rc_namespace'] = $wmincTestWikiNamespaces;
			$conds[] = 'rc_title ' . $dbr->buildLike( $prefix . '/', $dbr->anyString() ) .
			' OR rc_title = ' . $dbr->addQuotes( $prefix );
		}
		// If "none" is selected, display normal recent changes

		return true;
	}

	public static function onRcForm( &$items, $opts ) {
		global $wmincProjects, $wmincProjectSite, $wmincLangCodeLength;

		list( $projectvalue, $codevalue ) = self::getValues( RequestContext::getMain()->getUser() );
		$opts->consumeValue( 'rc-testwiki-project' );
		$opts->consumeValue( 'rc-testwiki-code' );
		$label = Xml::label( wfMessage( 'wminc-testwiki' )->text(), 'rc-testwiki' );
		$select = new XmlSelect( 'rc-testwiki-project', 'rc-testwiki-project', $projectvalue );
		$select->addOption( wfMessage( 'wminc-testwiki-none' )->text(), 'none' );
		foreach ( $wmincProjects as $prefix => $metadata ) {
			if ( !$metadata['sister'] ) {
				$select->addOption( $metadata['name'], $prefix );
			}
		}
		$select->addOption( $wmincProjectSite['name'], $wmincProjectSite['short'] );
		$langcode = Xml::input( 'rc-testwiki-code', (int)$wmincLangCodeLength, $codevalue,
			[ 'id' => 'rc-testwiki-code', 'maxlength' => (int)$wmincLangCodeLength ] );
		$items['testwiki'] = [ $label, $select->getHTML() . ' ' . $langcode ];
		return true;
	}
}

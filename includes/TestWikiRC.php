<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Context\RequestContext;
use MediaWiki\Hook\SpecialRecentChangesPanelHook;
use MediaWiki\Html\FormOptions;
use MediaWiki\Html\Html;
use MediaWiki\MediaWikiServices;
use MediaWiki\SpecialPage\Hook\ChangesListSpecialPageQueryHook;
use MediaWiki\User\User;
use MediaWiki\Xml\XmlSelect;
use Wikimedia\Rdbms\IExpression;
use Wikimedia\Rdbms\LikeValue;

/**
 * Recent changes for a specific test wiki, or for all project changes (or normal display)
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

class TestWikiRC implements
	ChangesListSpecialPageQueryHook,
	SpecialRecentChangesPanelHook
{
	/**
	 * Get values
	 *
	 * @param User $user
	 * @return array
	 */
	private static function getValues( User $user ) {
		global $wgWmincPref, $wgRequest;
		$url = WikimediaIncubator::getUrlParam();
		$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
		$projectPref = $userOptionsLookup->getOption( $user, $wgWmincPref . '-project' ) ?? '';
		$codePref = $userOptionsLookup->getOption( $user, $wgWmincPref . '-code' ) ?? '';
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
	 */
	public function onChangesListSpecialPageQuery( $pageName, &$tables, &$fields, &$conds, &$query_options,
		&$join_conds, $opts
	) {
		global $wgWmincProjectSite, $wgWmincTestWikiNamespaces;

		if ( $pageName !== 'Recentchanges' ) {
			return;
		}

		$dbr = MediaWikiServices::getInstance()->getConnectionProvider()->getReplicaDatabase();

		[ $projectvalue, $codevalue ] = self::getValues( RequestContext::getMain()->getUser() );
		$prefix = WikimediaIncubator::displayPrefix( $projectvalue, $codevalue );
		$opts->add( 'rc-testwiki-project', false );
		$opts->setValue( 'rc-testwiki-project', $projectvalue );
		$opts->add( 'rc-testwiki-code', false );
		$opts->setValue( 'rc-testwiki-code', $codevalue );

		if ( $projectvalue == $wgWmincProjectSite['short'] ) {
			// If project site is selected, display all changes except test wiki changes
			$conds[] = $dbr->expr(
				'rc_title',
				IExpression::NOT_LIKE,
				new LikeValue( 'W', $dbr->anyChar(), '/', $dbr->anyString() )
			);
		} elseif ( WikimediaIncubator::validatePrefix( $prefix, true ) ) {
			// Else, display changes to the selected test wiki in the appropriate namespaces
			// The next line (the phan-suppress one) is buggy some times. If phan-docker
			// complains, try re-adding it by adding/removing the initial @.
			// phan-suppress-next-line PhanPossiblyUndeclaredVariable
			$conds['rc_namespace'] = $wgWmincTestWikiNamespaces;
			$conds[] = $dbr->expr( 'rc_title', IExpression::LIKE, new LikeValue( $prefix . '/', $dbr->anyString() ) )
				->or( 'rc_title', '=', $prefix );
		}
		// If "none" is selected, display normal recent changes
	}

	/** @inheritDoc */
	public function onSpecialRecentChangesPanel( &$items, $opts ) {
		global $wgWmincProjects, $wgWmincProjectSite, $wgWmincLangCodeLength;

		[ $projectvalue, $codevalue ] = self::getValues( RequestContext::getMain()->getUser() );
		$opts->consumeValue( 'rc-testwiki-project' );
		$opts->consumeValue( 'rc-testwiki-code' );
		$label = Html::label( wfMessage( 'wminc-testwiki' )->text(), 'rc-testwiki' );
		$select = new XmlSelect( 'rc-testwiki-project', 'rc-testwiki-project', $projectvalue );
		$select->addOption( wfMessage( 'wminc-testwiki-none' )->text(), 'none' );
		foreach ( $wgWmincProjects as $prefix => $metadata ) {
			if ( !$metadata['sister'] ) {
				$select->addOption( $metadata['name'], $prefix );
			}
		}
		$select->addOption( $wgWmincProjectSite['name'], $wgWmincProjectSite['short'] );
		$langcode = Html::input( 'rc-testwiki-code', $codevalue, 'text', [
			'id' => 'rc-testwiki-code',
			'size' => (int)$wgWmincLangCodeLength,
			'maxlength' => (int)$wgWmincLangCodeLength,
		] );
		$items['testwiki'] = [ $label, $select->getHTML() . ' ' . $langcode ];
	}
}

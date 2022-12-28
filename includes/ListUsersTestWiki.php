<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\MediaWikiServices;
use Pager;
use Title;
use Xml;

/**
 * Ability to filter list of users based on their test wiki preference
 */
class ListUsersTestWiki {
	/**
	 * If the &testwiki= parameter matches the project site (Incubator), return that
	 * @return array|null
	 */
	public static function getProjectInput() {
		global $wmincProjectSite, $wgRequest;
		$input = strtolower( $wgRequest->getVal( 'testwiki', '' ) );
		if ( $input == strtolower( $wmincProjectSite['name'] )
			|| $input == strtolower( $wmincProjectSite['short'] )
		) {
			return $wmincProjectSite;
		}
		return null;
	}

	/**
	 * Input form
	 * @param Pager $pager
	 * @param string &$out
	 * @return true
	 */
	public static function onSpecialListusersHeaderForm( $pager, &$out ) {
		$testwiki = WikimediaIncubator::getUrlParam();
		$project = self::getProjectInput();
		$input = $project ? $project['name'] : ( $testwiki ? $testwiki['prefix'] : '' );
		$out .= Xml::label( wfMessage( 'wminc-testwiki' )->text(), 'testwiki' ) . ' ' .
			Xml::input( 'testwiki', 20, $input, [ 'id' => 'testwiki' ] ) . '<br />';
		return true;
	}

	/**
	 * Show a message that you are viewing a list of users of a certain test wiki
	 * @param Pager $pager
	 * @param string &$out
	 * @return bool
	 */
	public static function onSpecialListusersHeader( $pager, &$out ) {
		$project = self::getProjectInput();
		if ( $project ) {
			$out .= wfMessage( 'wminc-listusers-testwiki', '"' . $project['name'] . '"' )->parseAsBlock();
		} else {
			$testwiki = WikimediaIncubator::getUrlParam();
			if ( $testwiki ) {
				$linkRenderer = MediaWikiServices::getInstance()->getLinkRenderer();
				$link = $linkRenderer->makeKnownLink( Title::newFromText( $testwiki['prefix'] ) );
				$out .= wfMessage( 'wminc-listusers-testwiki' )->rawParams( $link )->parseAsBlock();
			}
		}
		return true;
	}

	/**
	 * Query
	 * @param Pager $pager
	 * @param array &$query
	 * @return true
	 */
	public static function onSpecialListusersQueryInfo( $pager, &$query ) {
		$testwiki = WikimediaIncubator::getUrlParam();
		$project = self::getProjectInput();
		if ( !$project && !$testwiki ) {
			return true; # no input or invalid input
		}
		global $wmincPref;
		$query['tables']['p1'] = 'user_properties';
		$query['join_conds']['p1'] = [ 'JOIN', [ 'user_id=p1.up_user',
			'p1.up_property' => "$wmincPref-project",
			'p1.up_value' => $project ? $project['short'] : $testwiki['project']
		] ];
		if ( $project ) {
			return true; # project site doesn't need language code = returning
		}
		$query['tables']['p2'] = 'user_properties';
		$query['join_conds']['p2'] = [ 'JOIN', [ 'user_id=p2.up_user',
			'p2.up_property' => "$wmincPref-code",
			'p2.up_value' => $testwiki['lang']
		] ];
		return true;
	}
}

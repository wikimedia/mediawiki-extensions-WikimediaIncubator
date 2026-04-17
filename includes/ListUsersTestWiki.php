<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Context\RequestContext;
use MediaWiki\Html\Html;
use MediaWiki\MediaWikiServices;
use MediaWiki\Pager\Pager;
use MediaWiki\Request\WebRequest;
use MediaWiki\Specials\Hook\SpecialListusersHeaderFormHook;
use MediaWiki\Specials\Hook\SpecialListusersHeaderHook;
use MediaWiki\Specials\Hook\SpecialListusersQueryInfoHook;
use MediaWiki\Title\Title;

/**
 * Ability to filter list of users based on their test wiki preference
 */
class ListUsersTestWiki implements
	SpecialListusersHeaderFormHook,
	SpecialListusersQueryInfoHook,
	SpecialListusersHeaderHook
{
	/**
	 * If the &testwiki= parameter matches the project site (Incubator), return that
	 * @return array|null
	 */
	private static function getProjectInput( WebRequest $request ) {
		global $wgWmincProjectSite;
		$input = strtolower( $request->getVal( 'testwiki', '' ) );
		if ( $input == strtolower( $wgWmincProjectSite['name'] )
			|| $input == strtolower( $wgWmincProjectSite['short'] )
		) {
			return $wgWmincProjectSite;
		}
		return null;
	}

	/**
	 * Input form
	 * @param Pager $pager
	 * @param string &$out
	 */
	public function onSpecialListusersHeaderForm( $pager, &$out ) {
		$request = RequestContext::getMain()->getRequest();
		$testwiki = WikimediaIncubator::getUrlParam( $request );
		$project = self::getProjectInput( $request );
		$input = $project ? $project['name'] : ( $testwiki ? $testwiki['prefix'] : '' );
		$out .= Html::label( wfMessage( 'wminc-testwiki' )->text(), 'testwiki' ) . ' ' .
			Html::input( 'testwiki', $input, 'text', [ 'id' => 'testwiki', 'size' => 20 ] ) . '<br />';
	}

	/**
	 * Show a message that you are viewing a list of users of a certain test wiki
	 * @param Pager $pager
	 * @param string &$out
	 */
	public function onSpecialListusersHeader( $pager, &$out ) {
		$request = RequestContext::getMain()->getRequest();
		$project = self::getProjectInput( $request );
		if ( $project ) {
			$out .= wfMessage( 'wminc-listusers-testwiki', '"' . $project['name'] . '"' )->parseAsBlock();
		} else {
			$testwiki = WikimediaIncubator::getUrlParam( $request );
			if ( $testwiki ) {
				$linkRenderer = MediaWikiServices::getInstance()->getLinkRenderer();
				$link = $linkRenderer->makeKnownLink( Title::newFromText( $testwiki['prefix'] ) );
				$out .= wfMessage( 'wminc-listusers-testwiki' )->rawParams( $link )->parseAsBlock();
			}
		}
	}

	/**
	 * Query
	 * @param Pager $pager
	 * @param array &$query
	 */
	public function onSpecialListusersQueryInfo( $pager, &$query ) {
		$request = RequestContext::getMain()->getRequest();
		$testwiki = WikimediaIncubator::getUrlParam( $request );
		$project = self::getProjectInput( $request );
		if ( !$project && !$testwiki ) {
			# no input or invalid input
			return;
		}
		global $wgWmincPref;
		$query['tables']['p1'] = 'user_properties';
		$query['join_conds']['p1'] = [ 'JOIN', [ 'user_id=p1.up_user',
			'p1.up_property' => "$wgWmincPref-project",
			'p1.up_value' => $project ? $project['short'] : $testwiki['project']
		] ];
		if ( $project ) {
			# project site doesn't need language code = returning
			return;
		}
		$query['tables']['p2'] = 'user_properties';
		$query['join_conds']['p2'] = [ 'JOIN', [ 'user_id=p2.up_user',
			'p2.up_property' => "$wgWmincPref-code",
			'p2.up_value' => $testwiki['lang']
		] ];
	}
}

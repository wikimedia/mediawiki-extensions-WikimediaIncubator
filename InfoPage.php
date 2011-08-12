<?php
/**
 * Implements the "info page" (Wx/xx pages)

'missing' showMissingWiki()
    A [Project] in this language does not yet exist.
'incubator' showIncubatingWiki()
    'open': This is a new Incubator wiki that is not yet verified by the language committee.
    'eligible': This Incubator wiki has been marked as eligible by the language committee.
    'imported': This Incubator wiki has been imported from xyz.wikiproject.org after that wiki was closed.
    'approved': This Incubator wiki has been approved by the language committee and will soon be created.
'existing' showExistingWiki()
    'created': This project has been approved by the language committee and is now available at xyz.wikiproject.org.
    'beforeincubator': This project was created before Wikimedia Incubator started and is available at xyz.wikiproject.org.

 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

class InfoPage {
	public function __construct( $title, $prefixdata ) {
		global $wmincProjects;
		$this->mTitle = $title;
		$this->mPrefix = $prefixdata['prefix'];
		$this->mLangCode = $prefixdata['lang'];
		$this->mProjectCode = $prefixdata['project'];
		$this->mProjectName = isset( $wmincProjects[$this->mProjectCode] ) ?
			$wmincProjects[$this->mProjectCode] : '';
		if( isset( $prefixdata['error'] ) || $title->getNamespace() != NS_MAIN ) {
			return;
		}
		$this->mDBStatus = '';
		$this->mSubStatus = '';
		$this->mThisLangData = array( 'type' => 'valid' ); # For later code check feature
		$this->mLangNames = IncubatorTest::getLanguageNames();
		$this->mLangName = ( isset( $this->mLangNames[$this->mLangCode] ) ?
			$this->mLangNames[$this->mLangCode] : wfMsg( 'wminc-unknownlang', $this->mLangCode ) );
		return;
	}

	/**
	 * Small convenience function to display a (clickable) logo
	 * @param $project Project name
	 */
	public function makeLogo( $project, $clickable = true, $width = 25, $height = '', $url = '', $args = array() ) {
		global $wgUser;
		$projectForFile = preg_replace('/ /', '-', strtolower( $project ) );
		$imageobj = wfFindFile( wfMsg( 'wminc-logo-' . $projectForFile ) );
		$useUrl = $url ? $url : 'http://www.'.strtolower( $project ).'.org/';
		if ( !$imageobj ) { # image not found
			if( !$clickable ) {
				return $logo;
			}
			return $wgUser->getSkin()->makeExternalLink( $useUrl, $project, false ); 
		}
		if( $clickable ) {
			$args['link-url'] = $useUrl;
		} else {
			$args['no-link'] = true;
		}
		$handlerParams['width'] = $width;
		if( $height ) {
			$handlerParams['height'] = $height;
		}
		return $wgUser->getSkin()->makeImageLink2( $this->mTitle, $imageobj,
			array( 'alt' => $project, 'caption' => $project ) + $args, $handlerParams
		);
	}

	public function listOtherProjects() {
		global $wmincProjects, $wmincSisterProjects;
		$otherProjects = $wmincProjects + $wmincSisterProjects;
		foreach( $otherProjects as $code => $name ) {
			$listOtherProjects[$code] = '<li>' . $this->makeLogo( $name, true,
				75, null, IncubatorTest::getSubdomain( $this->mLangCode, $code ) ) . '</li>';
		}
		unset( $listOtherProjects[$this->mProjectCode] );
		return '<ul class="wminc-infopage-otherprojects">' .
			implode( '', $listOtherProjects ) . '</ul>';
	}

	public function listMultilingualProjects() {
		global $wmincMultilingualProjects;
		if( !is_array( $wmincMultilingualProjects ) ) { return; }
		foreach( $wmincMultilingualProjects as $url => $name ) {
			$list[$url] = '<li>' . $this->makeLogo( $name, true,
				75, null, 'http://'.$url.'/') . '</li>';
		}
		return '<ul class="wminc-infopage-multilingualprojects">' .
			implode( '', $list ) . '</ul>';
	}

	public function showWelcome() {
		return Html::rawElement( 'div', array( 'class' => 'wminc-infopage-welcome' ),
			wfMsgWikiHtml( 'wminc-infopage-welcome' ) );
	}

	public function StandardInfoPage( $beforetitle, $aftertitle, $content ) {
		global $wgLang, $wgOut;
		$wgOut->addModules( 'WikimediaIncubator.InfoPage' );
		return Html::rawElement( 'div', array( 'class' => 'wminc-infopage plainlinks',
			'lang' => $wgLang->getCode(), 'dir' => $wgLang->getDir() ),
			$beforetitle .
			Html::rawElement( 'div', array( 'class' => 'wminc-infopage-logo' ),
				$this->makeLogo( $this->mProjectName, true, 175 )
			) .
			Html::rawElement( 'div', array( 'class' => 'wminc-infopage-title' ),
				wfMsg( 'wminc-infopage-title', $this->mProjectName, $this->mLangName ) .
				$aftertitle ) .
			$content );
	}

	public function showMissingWiki() {
		$content = Html::rawElement( 'div',
			array( 'class' => 'wminc-infopage-status' ),
			wfMsgWikiHtml( 'wminc-infopage-missingwiki-text',
			$this->mProjectName, $this->mLangName )
		) . 
		Html::rawElement( 'ul', array( 'class' => 'wminc-infopage-options' ),
			Html::rawElement( 'li', null,
				wfMsgExt( 'wminc-infopage-option-startwiki',
					array( 'parseinline' ), $this->mProjectName ) ) .
			Html::rawElement( 'li', null,
				wfMsgExt( 'wminc-infopage-option-languages-existing',
					array( 'parseinline' ), $this->mProjectName ) ) .
			Html::rawElement( 'li', null,
				wfMsgExt( 'wminc-infopage-option-sisterprojects-existing',
					array( 'parseinline' ) ) . $this->listOtherProjects() ) .
			Html::rawElement( 'li', null,
				wfMsgExt( 'wminc-infopage-option-multilingual', array( 'parseinline' ) ) .
				$this->listMultilingualProjects() )
		);
		return $this->StandardInfoPage( $this->showWelcome(), '', $content );
	}

	public function showIncubatingWiki() {
		global $wgUser;
		$bug = isset( $this->mBug ) ? $this->mBug : '';
		if( $this->mThisLangData['type'] != 'invalid' ) {
			$gotoMainPage = Html::rawElement( 'span',
				array( 'class' => 'wminc-infopage-entertest' ),
				'→ ' . $wgUser->getSkin()->link(
					Title::newFromText( IncubatorTest::getMainPage( $this->mLangCode, $this->mPrefix ) ),
					wfMsgNoTrans( 'wminc-infopage-enter' )
				)
			);
		}
		$subdomain = IncubatorTest::getSubdomain( $this->mLangCode, $this->mProjectCode );
		$subdomainLink = $wgUser->getSkin()->makeExternalLink( $subdomain, $subdomain );
		$content = Html::rawElement( 'div', array( 'class' => 'wminc-infopage-status' ),
			wfMsgWikiHtml( 'wminc-infopage-status-' . $this->mSubStatus, $subdomainLink ) );
		if( $this->mSubStatus != 'approved' && $this->mThisLangData['type'] != 'invalid' ) {
			$content .= Html::element( 'div',
				array( 'class' => 'wminc-infopage-contribute' ),
				wfMsg( 'wminc-infopage-contribute' ) );
		}
		return $this->StandardInfoPage( '', $gotoMainPage, $content );
	}

	public function showExistingWiki() {
		global $wgLang, $wgUser;
		$created = isset( $this->mCreated ) ? $this->mCreated : '';
		$bug = isset( $this->mBug ) ? $this->mBug : '';
		$subdomain = IncubatorTest::getSubdomain( $this->mLangCode, $this->mProjectCode );
		$subdomainLink = $wgUser->getSkin()->makeExternalLink( $subdomain, $subdomain );
		if( $this->mThisLangData['type'] != 'invalid' ) {
			$gotoSubdomain = Html::rawElement( 'span',
				array( 'class' => 'wminc-infopage-entertest' ),
				$wgLang->getArrow() . ' ' . $subdomainLink );
		}
		$content = Html::rawElement( 'div',
			array( 'class' => 'wminc-infopage-status' ),
			wfMsg( 'wminc-infopage-status-' . $this->mSubStatus, $subdomainLink )
		) . Html::rawElement( 'ul', array( 'class' => 'wminc-infopage-options' ),
			Html::rawElement( 'li', null, wfMsgWikiHtml( 'wminc-infopage-option-sisterprojects-other' ) .
				$this->listOtherProjects() ) .
			Html::rawElement( 'li', null, wfMsgWikiHtml( 'wminc-infopage-option-multilingual' ) .
				$this->listMultilingualProjects() )
		);
		return $this->StandardInfoPage( $this->showWelcome(), $gotoSubdomain, $content );
	}
}
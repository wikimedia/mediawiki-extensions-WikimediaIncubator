<?php
/**
 * Implements the "info page" (Wx/xx pages)
 *
 * 'missing' showMissingWiki()
 *   A [Project] in this language does not yet exist.
 * 'incubator' showIncubatingWiki()
 *    'open': This is a new Incubator wiki that is not yet verified by the language committee.
 *    'eligible': This Incubator wiki has been marked as eligible by the language committee.
 *    'imported': This Incubator wiki has been imported from xyz.wikiproject.org after that wiki
 *       was closed.
 *    'approved': This Incubator wiki has been approved by the language committee and will soon
 *       be created.
 * 'existing' showExistingWiki()
 *    'created': This project has been approved by the language committee and is now available at
 *       xyz.wikiproject.org.
 *    'beforeincubator': This project was created before Wikimedia Incubator started and is
 *       available at xyz.wikiproject.org.
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

class InfoPage {

	/** @var Title */
	private $mTitle;

	/** @var string */
	private $mPrefix;

	/** @var string */
	private $mLangCode;

	/** @var string */
	private $mProjectCode;

	/** @var string */
	private $mProjectName;

	/** @var string */
	private $mPortal;

	/** @var bool */
	private $mIsSister;

	/** @var string */
	public $mSubStatus;

	/** @var string[] */
	private $mThisLangData;

	/** @var string */
	private $mLangName;

	/** @var string */
	public $mFormatTitle;

	/** @var string[] */
	public $mOptions = [];

	/** @var User */
	private $user;

	/**
	 * @param Title $title
	 * @param array $prefixdata
	 * @param User $user
	 */
	public function __construct( $title, $prefixdata, User $user ) {
		global $wmincProjects, $wmincSisterProjects, $wgLang;
		$this->mTitle = $title;
		$this->mPrefix = $prefixdata['prefix'];
		$this->mLangCode = $prefixdata['lang'];
		$this->mProjectCode = $prefixdata['project'];
		$allProjects = array_merge( $wmincProjects, $wmincSisterProjects );
		$this->mProjectName = $allProjects[$this->mProjectCode] ?? '';
		$this->mPortal = WikimediaIncubator::getSubdomain( $user, 'www', $this->mProjectCode );
		$this->mIsSister = array_key_exists( $this->mProjectCode, $wmincSisterProjects );
		$this->mSubStatus = '';
		$this->mThisLangData = [ 'type' => 'valid' ]; # For later code check feature
		$name = Language::fetchLanguageName( $this->mLangCode, $wgLang->getCode(), 'all' );
		$this->mLangName = $name ?:
			Language::fetchLanguageName( $this->mLangCode, 'en', 'all' );
		$titleParam = $this->mLangName ?:
			wfMessage( 'quotation-marks', $this->mLangCode )->text(); # Name, else code
		# Give grep a chance to find the usages:
		# wminc-infopage-title-p, wminc-infopage-title-b, wminc-infopage-title-t,
		# wminc-infopage-title-q, wminc-infopage-title-n, wminc-infopage-title-s,
		# wminc-infopage-title-v, wminc-infopage-title-y
		$this->mFormatTitle = wfMessage( 'wminc-infopage-title-' . $this->mProjectCode,
			$titleParam )->text();
		if ( !$this->mLangName ) {
			# Unknown language, add short note to title
			$this->mFormatTitle .= ' ' . wfMessage( 'wminc-unknownlang', $this->mLangCode )->text();
		}
		$this->user = $user;
	}

	/**
	 * Small convenience function to display a (clickable) logo
	 * @param string $project Project code
	 * @param bool $clickable
	 * @param array $params
	 * @param string|null $url
	 * @param string|null $lang
	 * @param bool $mul
	 * @return string
	 */
	public function makeLogo( $project, $clickable = true, $params = [],
		$url = null, $lang = null, $mul = false
	) {
		$lang = $lang ?: $this->mLangCode;
		if ( !$mul ) { // for non-multilingual wikis
			$getDbStatus = WikimediaIncubator::getDBState(
				[ 'error' => null, 'lang' => $lang, 'project' => $project ]
			);
			$lang = $getDbStatus == 'missing' ? 'en' : $lang;
			$params['title'] = WikimediaIncubator::getProject(
				$this->user,
				$project,
				true,
				true
			);
		}

		$logos = WikimediaIncubator::getConf( $this->user, 'wgLogos', $lang, $project );
		// FIXME: Delete the back-compatibility if $wgLogos isn't set up yet.
		$params['src'] = $logos['1x'] ?? WikimediaIncubator::getConf(
			$this->user,
			'wgLogo',
			$lang,
			$project
		);
		$params['alt'] = "$project ($lang)";
		$img = Html::element( 'img', $params );
		if ( $clickable ) {
			if ( $url === null ) {
				$url = WikimediaIncubator::getSubdomain( $this->user, 'www', $project );
			}
			return Html::rawElement( 'a', [ 'href' => $url ], $img );
		}
		return $img;
	}

	/**
	 * @return string list of clickable logos of other projects
	 * 					(Wikipedia, Wiktionary, ...)
	 */
	public function listOtherProjects() {
		global $wmincProjects, $wmincSisterProjects;
		$otherProjects = $wmincProjects + $wmincSisterProjects;
		'@phan-var array $otherProjects';
		unset( $otherProjects[$this->mProjectCode] );
		$listOtherProjects = [];
		foreach ( $otherProjects as $code => $name ) {
			$listOtherProjects[$code] = '<li>' . $this->makeLogo(
				$code,
				true,
				[ 'width' => 75 ],
				WikimediaIncubator::getSubdomain( $this->user, $this->mLangCode, $code )
			) . '</li>';
		}
		return '<ul class="wminc-infopage-otherprojects">' .
			implode( '', $listOtherProjects ) . '</ul>';
	}

	/**
	 * @return string list of clickable logos of multilingual projects
	 * 					(Meta, Commons, ...)
	 */
	public function listMultilingualProjects() {
		global $wmincMultilingualProjects, $wmincProjects;
		if ( !is_array( $wmincMultilingualProjects ) ) {
			return '';
		}
		$list = [];
		foreach ( $wmincMultilingualProjects as $key => $name ) {
			# multilingual projects are listed under wikipedia
			$fakeProject = key( $wmincProjects );
			$url = WikimediaIncubator::getSubdomain( $this->user, $key, $fakeProject );
			$list[$url] = '<li>' . $this->makeLogo( $fakeProject, true,
				[ 'width' => 75 ], $url, $key, true ) . '</li>';
		}
		return '<ul class="wminc-infopage-multilingualprojects">' .
			implode( '', $list ) . '</ul>';
	}

	/**
	 * @return string "Welcome to Incubator" message
	 */
	public function showWelcome() {
		return Html::rawElement( 'div', [ 'class' => 'wminc-infopage-welcome' ],
			wfMessage( 'wminc-infopage-welcome' )->parseAsBlock() );
	}

	/**
	 * @param string $beforetitle
	 * @param string $aftertitle
	 * @param string $content
	 * @return string the core HTML for the info page
	 */
	public function StandardInfoPage( $beforetitle, $aftertitle, $content ) {
		global $wgLang;
		return Html::rawElement( 'div', [ 'class' => 'wminc-infopage plainlinks',
			'lang' => $wgLang->getCode(), 'dir' => $wgLang->getDir() ],
			$beforetitle .
			Html::rawElement( 'div', [ 'class' => 'wminc-infopage-logo' ],
				$this->makeLogo( $this->mProjectCode )
			) .
			Html::rawElement( 'div', [ 'class' => 'wminc-infopage-title' ],
				htmlspecialchars( $this->mFormatTitle ) . $aftertitle ) .
			$content );
	}

	/**
	 * @return string
	 */
	public function showMissingWiki() {
		global $wgRequest;
		$link = SpecialPage::getTitleFor( 'IncubatorFirstSteps' );
		$query = [ 'testwiki' => $this->mPrefix,
			'uselang' => $wgRequest->getVal( 'uselang' ) ];
		$steps = $link->getFullUrl( $query );

		$content = Html::rawElement( 'div',
			[ 'class' => 'wminc-infopage-status' ],
			wfMessage( 'wminc-infopage-missingwiki-text',
			$this->mProjectName, $this->mLangName )->parseAsBlock()
		) .
		Html::rawElement( 'ul', [ 'class' => 'wminc-infopage-options' ],
			Html::rawElement( 'li', [],
				wfMessage( $this->mIsSister
					? 'wminc-infopage-option-startsister' : 'wminc-infopage-option-startwiki',
					$this->mProjectName, $this->mPortal, $steps )->parse() ) .
			Html::rawElement( 'li', [],
				wfMessage( 'wminc-infopage-option-languages-existing',
					$this->mProjectName )->parse() ) .
			Html::rawElement( 'li', [],
				wfMessage( 'wminc-infopage-option-sisterprojects-existing' )->parse() .
				$this->listOtherProjects() ) .
			Html::rawElement( 'li', [],
				wfMessage( 'wminc-infopage-option-multilingual' )->parse() .
				$this->listMultilingualProjects() )
		);
		return $this->StandardInfoPage( $this->showWelcome(), '', $content );
	}

	/**
	 * @return string
	 */
	public function showIncubatingWiki() {
		global $wgLang;
		$substatus = $this->mSubStatus;
		if ( $substatus == 'imported' && $this->mIsSister ) {
			$substatus = 'closedsister';
		}
		$portalLink = Linker::makeExternalLink( $this->mPortal, $this->mProjectName );
		$mainpage = isset( $this->mOptions['mainpage'] ) ?
			Title::newFromText( $this->mPrefix . '/' . $this->mOptions['mainpage'] ) :
			WikimediaIncubator::getMainPage( $this->mLangCode, $this->mPrefix );
		if ( $this->mThisLangData['type'] != 'invalid' ) {
			$gotoLink = Linker::link(
				$mainpage,
				wfMessage( 'wminc-infopage-enter' )->escaped() );
			$gotoMainPage = Html::rawElement( 'span',
				[ 'class' => 'wminc-infopage-entertest' ],
				$wgLang->getArrow() . ' ' . ( $this->mIsSister ? $portalLink : $gotoLink ) );
		} else {
			$gotoMainPage = '';
		}
		$subdomain = WikimediaIncubator::getSubdomain(
			$this->user,
			$this->mLangCode,
			$this->mProjectCode
		);
		$subdomainLink = WikimediaIncubator::makeExternalLinkText( $subdomain, true );
		# Give grep a chance to find the usages:
		# wminc-infopage-status-open, wminc-infopage-status-imported,
		# wminc-infopage-status-closedsister, wminc-infopage-status-approved,
		# wminc-infopage-status-created, wminc-infopage-status-beforeincubator
		$content = Html::rawElement( 'div', [ 'class' => 'wminc-infopage-status' ],
			wfMessage( 'wminc-infopage-status-' . $substatus )
				->rawParams( $subdomainLink, $portalLink )->parseAsBlock()
		);
		if ( $this->mSubStatus != 'approved' && $this->mThisLangData['type'] != 'invalid' ) {
			$content .= Html::element( 'div',
				[ 'class' => 'wminc-infopage-contribute' ],
				wfMessage( 'wminc-infopage-contribute' )->plain() );
		}
		$content .= Html::rawElement( 'div', [ 'class' => 'wminc-infopage-links' ],
			# custom links and other stuff
			wfMessage( 'wminc-infopage-links',
				$this->mSubStatus, $this->mPrefix,
				$this->mProjectCode, $this->mProjectName,
				$this->mLangCode, $this->mLangName
			)->inContentLanguage()->parse()
		);
		$content .= Html::rawElement( 'ul', [ 'class' => 'wminc-infopage-options' ],
			Html::rawElement( 'li', [], wfMessage( 'wminc-infopage-option-sisterprojects-other' )
				->parseAsBlock() . $this->listOtherProjects() ) );
		return $this->StandardInfoPage( '', $gotoMainPage, $content );
	}

	/**
	 * @return string
	 */
	public function showExistingWiki() {
		global $wgLang, $wmincSisterProjects;
		$subdomain = WikimediaIncubator::getSubdomain(
			$this->user,
			$this->mLangCode,
			$this->mProjectCode
		);
		$subdomainLink = WikimediaIncubator::makeExternalLinkText( $subdomain, true );
		if ( $this->mThisLangData['type'] != 'invalid' ) {
			$gotoSubdomain = Html::rawElement( 'span',
				[ 'class' => 'wminc-infopage-entertest' ],
				$wgLang->getArrow() . ' ' . $subdomainLink );
		} else {
			$gotoSubdomain = '';
		}
		# Give grep a chance to find the usages:
		# wminc-infopage-status-open, wminc-infopage-status-imported,
		# wminc-infopage-status-closedsister, wminc-infopage-status-approved,
		# wminc-infopage-status-created, wminc-infopage-status-beforeincubator
		$msgname = 'wminc-infopage-status-' . $this->mSubStatus;
		if ( $this->mSubStatus === 'beforeincubator'
			&& isset( $wmincSisterProjects[$this->mProjectCode] )
		) {
			$msgname = 'wminc-infopage-status-beforeincubator-sister';
		}
		$content = Html::rawElement( 'div',
			[ 'class' => 'wminc-infopage-status' ],
			wfMessage( $msgname )->rawParams( $subdomainLink )->parseAsBlock()
		) . Html::rawElement( 'ul', [ 'class' => 'wminc-infopage-options' ],
			Html::rawElement( 'li', [],
				wfMessage( 'wminc-infopage-option-sisterprojects-other' )->parseAsBlock() .
				$this->listOtherProjects() ) .
			Html::rawElement( 'li', [],
				wfMessage( 'wminc-infopage-option-multilingual' )->parseAsBlock() .
				$this->listMultilingualProjects() )
		);
		return $this->StandardInfoPage( $this->showWelcome(), $gotoSubdomain, $content );
	}
}

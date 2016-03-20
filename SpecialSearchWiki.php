<?php

class SpecialSearchWiki extends IncludableSpecialPage {
	public function __construct() {
		parent::__construct( 'SearchWiki' );
	}

	function getDescription() {
		return $this->msg( 'wminc-searchwiki' )->plain();
	}

	/**
	 * Show the special page
	 * @param $subpage Mixed: parameter passed to the page or null
	 */
	public function execute( $subpage ) {
		global $wmincProjects, $wmincSisterProjects, $wgScript;

		$this->setHeaders();

		# Array of projects
		$this->mProjects = array_merge( $wmincProjects, $wmincSisterProjects );

		# Queries
		if ( $subpage ) {
			$subpage = explode( '/', $subpage );
		}
		$projectQuery = $this->getRequest()->getText( 'searchproject', isset( $subpage[0] ) ? $subpage[0] : '' );
		$languageQuery = $this->getRequest()->getText( 'searchlanguage', isset( $subpage[1] ) ? $subpage[1] : '' );

		# Show form
		$uselang = $this->getRequest()->getVal( 'uselang' );
		$this->getOutput()->addHTML(
			Xml::fieldset( $this->msg( 'wminc-searchwiki' )->plain(),
			Html::rawElement( 'form', array( 'method' => 'get', 'action' => $wgScript, 'id' => 'wminc-searchwiki-form' ),
				Html::hidden( 'title', SpecialPage::getTitleFor( 'SearchWiki' ) ) .
				( $uselang ? Html::hidden( 'uselang', $uselang ) : '' ) .
				'<p>' . Xml::label( $this->msg( 'wminc-searchwiki-selectproject' )->text(), 'wminc-searchproject' ) .
					' ' . $this->makeProjectSelector( $projectQuery ) . '</p>' .
				'<p>' . Xml::inputLabel( $this->msg( 'wminc-searchwiki-inputlanguage' )->text(), 'searchlanguage',
				'wminc-searchlanguage', 30, $languageQuery ) . ' ' .
				Xml::submitButton( $this->msg( 'wminc-searchwiki-go' )->text() ) . '</p>'
			) )
		);

		# Search
		if ( $projectQuery || $languageQuery ) {
			$this->mNamesUserLang = Language::fetchLanguageNames( $this->getLanguage()->getCode(), 'all' );
			$this->mEnglishNames = Language::fetchLanguageNames( 'en', 'all' );
			$this->mNativeNames = Language::fetchLanguageNames( null, 'all' );
			$this->doSearch( $projectQuery, $languageQuery );
		}
	}

	/**
	 * Make a <select> box with projects (Wikipedia, Wiktionary, ...)
	 * @param $selected
	 * @return string
	 */
	protected function makeProjectSelector( $selected ) {
		$select = new XmlSelect( 'searchproject', 'wminc-searchproject', $selected );
		$select->addOptions( array_flip( $this->mProjects ) );
		return $select->getHTML();
	}

	/**
	 * @param $projectQuery
	 * @param $languageQuery
	 */
	protected function doSearch( $projectQuery, $languageQuery ) {
		## Match project ##
		if ( isset( $this->mProjects[$projectQuery] ) ) {
			# searched with a project code (select box)
			$matchProject = $projectQuery;
		} elseif ( $projectCode = array_search( $projectQuery, $this->mProjects ) ) {
			# searched with a project name
			$matchProject = $projectCode;
		} else {
			return $this->getOutput()->addWikiMsg( 'wminc-searchwiki-noproject' );
		}
		
		$results = array();

		$lcLanguageQuery = strtolower( $languageQuery );
		# The more important, the more below, because they override earlier codes
		$validCodes = array_keys( Language::fetchLanguageNames( 'en', 'all' ) );
		if ( in_array( $lcLanguageQuery, $validCodes ) ) {
			$builtinCode = Language::factory( $lcLanguageQuery )->getCode();
			$results[$builtinCode] = 'langcode'; # Match language code
		}
		$lcLanguageQuery = self::strip( $languageQuery );
		if ( $codeByEnglishName = array_search( $lcLanguageQuery, array_map( 'self::strip', $this->mEnglishNames ) ) ) {
			$results[$codeByEnglishName] = 'englishname'; # Match name in English
		}
		if ( $codeUserLang = array_search( $lcLanguageQuery, array_map( 'self::strip', $this->mNamesUserLang ) ) ) {
			$results[$codeUserLang] = 'userlangname'; # Match name in user language
		}
		if ( $codeByNativeName = array_search( $lcLanguageQuery, array_map( 'self::strip', $this->mNativeNames ) ) ) {
			$results[$codeByNativeName] = 'nativename'; # Match native name 
		}

		if ( count( $results ) === 1 ) {
			$this->gotoWiki( $matchProject, key( $results ) );
		} elseif ( count( $results ) < 1 ) {
			$noresult = Html::element( 'p', array( 'class' => 'error' ),
				$this->msg( 'wminc-searchwiki-noresults' )->text() );
			return $this->getOutput()->addHTML( $noresult );
		} elseif ( count( $results ) > 1 ) {
			$this->showMultipleResults( $matchProject, $languageQuery, $results );
		}
	}

	/**
	 * Improve search by increasing the chance of matches
	 * @param $str String
	 * @return String
	 */
	protected function strip( $str ) {
		$str = strtolower( trim( $str ) );
		$replace = array( ' ' => '', '-' => '' );
		return str_replace( array_keys( $replace ), array_values( $replace ), $str );
	}

	/**
	 * Go directly to the wiki if it exists, else to the Incubator test wiki
	 * @param $project String: project code
	 * @param $lang String: Language code
	 */
	protected function goToWiki( $project, $lang ) {
		$lang = $this->getRootCode( $lang );
		$dbarray = array( 'project' => $project, 'lang' => $lang, 'error' => null );
		$status = WikimediaIncubator::getDBState( $dbarray );
		$infopageParams = array(
			'goto' => 'mainpage',
			'uselang' => $this->getRequest()->getVal( 'uselang' )
		);
		$url = $status == 'existing' ? WikimediaIncubator::getSubdomain( $lang, $project ) :
			Title::newFromText( 'W' . $project . '/' . $lang )->getFullURL( $infopageParams );
		$this->getOutput()->redirect( $url );
	}

	/**
	 * @param $code String
	 * @return String
	 */
	protected function getRootCode( $code ) {
		# e.g. ks-arab -> ks
		$stripLangTags = array( '-arab', '-latn', '-cyrl', '-deva', '-cans', '-grek' );
		return str_replace( $stripLangTags, '', $code );
	}

	/**
	 * @param $project
	 * @param $languageQuery
	 * @param $results
	 */
	protected function showMultipleResults( $project, $languageQuery, $results ) {
		$this->getOutput()->addHTML( '<div id="wminc-searchwiki-results">' .
			Xml::element( 'p', array(),
				$this->msg( 'wminc-searchwiki-multiplematches' )->text() ) .
			'<ul>'
		);
		foreach ( $results as $resultCode => $resultType ) {
			$langName = $this->mNamesUserLang[$resultCode];
			$infopage = Title::newFromText(
				WikimediaIncubator::displayPrefix( $project, $resultCode, true )
			);
			$linkInfoPage = Linker::linkKnown( $infopage,
				$this->msg( 'wminc-searchwiki-gotoinfopage' )->text()
			);
			# Give grep a chance to find the usages:
			# wminc-infopage-title-p, wminc-infopage-title-b, wminc-infopage-title-t,
			# wminc-infopage-title-q, wminc-infopage-title-n, wminc-infopage-title-s,
			# wminc-infopage-title-v, wminc-infopage-title-y
			$linkMainPage = Linker::linkKnown( $infopage,
				$this->msg( 'wminc-infopage-title-' . $project, $langName )->text(),
				array(), array( 'goto' => 'mainpage' )
			);
			# Give grep a chance to find the usages:
			# wminc-searchwiki-match-langcode, wminc-searchwiki-match-englishname,
			# wminc-searchwiki-match-userlangname, wminc-searchwiki-match-nativename
			$this->getOutput()->addHTML( '<li>' .
				$this->msg( 'wminc-searchwiki-match-' . $resultType,
					$languageQuery, $langName, $resultCode )->escaped() . ' ' .
				$this->getLanguage()->getArrow() . ' ' .
				$this->msg( 'wminc-searchwiki-goto', $linkMainPage, $linkInfoPage )->text() .
			'</li>' );
		}
		$this->getOutput()->addHTML( '</ul></div>' );
	}
}

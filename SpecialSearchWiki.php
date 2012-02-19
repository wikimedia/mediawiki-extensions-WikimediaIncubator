<?php

class SpecialSearchWiki extends IncludableSpecialPage {
	public function __construct() {
		parent::__construct( 'SearchWiki' );
	}

	function getDescription() {
		return wfMessage( 'wminc-searchwiki' )->plain();
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
		if( $subpage ) {
			$subpage = explode( '/', $subpage );
		}
		$projectQuery = $this->getRequest()->getText( 'searchproject', isset( $subpage[0] ) ? $subpage[0] : '' );
		$languageQuery = $this->getRequest()->getText( 'searchlanguage', isset( $subpage[1] ) ? $subpage[1] : '' );

		# Show form
		$uselang = $this->getRequest()->getVal( 'uselang' );
		$this->getOutput()->addHTML(
			Xml::fieldset( wfMessage( 'wminc-searchwiki' )->plain(),
			Html::rawElement( 'form', array( 'method' => 'get', 'action' => $wgScript, 'id' => 'wminc-searchwiki-form' ),
				Html::hidden( 'title', SpecialPage::getTitleFor( 'SearchWiki' ) ) .
				( $uselang ? Html::hidden( 'uselang', $uselang ) : '' ) .
				'<p>' . Xml::label( wfMessage( 'wminc-searchwiki-selectproject' )->text(), 'wminc-searchproject' ) .
					' ' . $this->makeProjectSelector( $projectQuery ) . '</p>' .
				'<p>' . Xml::inputLabel( wfMessage( 'wminc-searchwiki-inputlanguage' )->text(), 'searchlanguage',
				'wminc-searchlanguage', 30, $languageQuery ) . ' ' .
				Xml::submitButton( wfMessage( 'wminc-searchwiki-go' )->text() ) . '</p>'
			) )
		);

		# Search
		if ( $projectQuery || $languageQuery ) {
			$this->mNamesUserLang = Language::getTranslatedLanguageNames( $this->getLanguage()->getCode() );
			$this->mEnglishNames = Language::getTranslatedLanguageNames( 'en' );
			$this->mNativeNames = Language::getLanguageNames( false );
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

	protected function doSearch( $projectQuery, $languageQuery ) {
		## Match project ##
		if( isset( $this->mProjects[$projectQuery] ) ) {
			$matchProject = $projectQuery; # searched with a project code (select box)
		} elseif( $projectCode = array_search( $projectQuery, $this->mProjects ) ) {
			$matchProject = $projectCode; # searched with a project name
		} else {
			return $this->getOutput()->addWikiMsg( 'wminc-searchwiki-noproject' );
		}
		
		$results = array();

		$lcLanguageQuery = strtolower( $languageQuery );
		# The more important, the more below, because they override earlier codes
		$validCodes = array_keys( Language::getLanguageNames() );
		if( in_array( $lcLanguageQuery, $validCodes ) ) {
			$builtinCode = Language::factory( $lcLanguageQuery )->getCode();
			$results[$builtinCode] = 'langcode'; # Match language code
		}
		if( $codeByEnglishName = array_search( $lcLanguageQuery, array_map( 'strtolower', $this->mEnglishNames ) ) ) {
			$results[$codeByEnglishName] = 'englishname'; # Match name in English
		}
		if( $codeUserLang = array_search( $lcLanguageQuery, array_map( 'strtolower', $this->mNamesUserLang ) ) ) {
			$results[$codeUserLang] = 'userlangname'; # Match name in user language
		}
		if( $codeByNativeName = array_search( $lcLanguageQuery, array_map( 'strtolower', $this->mNativeNames ) ) ) {
			$results[$codeByNativeName] = 'nativename'; # Match native name 
		}

		if( count( $results ) === 1 ) {
			$this->gotoWiki( $matchProject, key( $results ) );
		} elseif( count( $results ) < 1 ) {
			$noresult = Html::element( 'p', array( 'class' => 'error' ), wfMessage( 'wminc-searchwiki-noresults' )->text() );
			return $this->getOutput()->addHTML( $noresult );
		} elseif( count( $results ) > 1 ) {
			self::showMultipleResults( $matchProject, $languageQuery, $results );
		}
	}

	/**
	 * Go directly to the wiki if it exists, else to the Incubator test wiki
	 * @param $project String: project code
	 * @param $lang String: Language code
	 */
	protected function goToWiki( $project, $lang ) {
		$lang = self::getRootCode( $lang );
		$status = IncubatorTest::getDBState( array( 'project' => $project, 'lang' => $lang, 'error' => null ) );
		$infopageParams = array( 'goto' => 'mainpage', 'uselang' => $this->getRequest()->getVal( 'uselang' ) );
		$url = $status == 'existing' ? IncubatorTest::getSubdomain( $lang, $project ) :
			Title::newFromText( 'W' . $project . '/' . $lang )->getFullURL( $infopageParams );
		$this->getOutput()->redirect( $url );
	}

	protected function getRootCode( $code ) {
		# e.g. ks-arab -> ks
		$stripLangTags = array( '-arab', '-latn', '-cyrl', '-deva', '-cans', '-grek' );
		return str_replace( $stripLangTags, '', $code );
	}

	protected function showMultipleResults( $project, $languageQuery, $results ) {
		$this->getOutput()->addHTML( '<div id="wminc-searchwiki-results">' .
			Xml::element( 'p', array(), wfMessage( 'wminc-searchwiki-multiplematches' )->text() ) . '<ul>' );
		foreach( $results as $resultCode => $resultType ) {
			$langName = $this->mNamesUserLang[$resultCode];
			$infopage = Title::newFromText( IncubatorTest::displayPrefix( $project, $resultCode, true ) );
			$linkInfoPage = Linker::linkKnown( $infopage, wfMessage( 'wminc-searchwiki-gotoinfopage' )->text() );
			$linkMainPage = Linker::linkKnown( $infopage, wfMessage( 'wminc-infopage-title-' . $project, $langName )->text(),
			array(), array( 'goto' => 'mainpage' ) );
			# wminc-searchwiki-match-langcode, wminc-searchwiki-match-englishname,
			# wminc-searchwiki-match-userlangname, wminc-searchwiki-match-nativename
			$this->getOutput()->addHTML( '<li>' .
				wfMessage( 'wminc-searchwiki-match-' . $resultType,
					$languageQuery, $langName, $resultCode )->escaped() . ' ' .
				$this->getLanguage()->getArrow() . ' ' .
				wfMessage( 'wminc-searchwiki-goto', $linkMainPage, $linkInfoPage )->text() .
			'</li>' );
		}
		$this->getOutput()->addHTML( '</ul></div>' );
	}
}

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
	 * @param string|null $subpage parameter passed to the page or null
	 */
	public function execute( $subpage ) {
		global $wmincProjects, $wmincSisterProjects;

		$this->setHeaders();

		# Array of projects
		$this->mProjects = array_merge( $wmincProjects, $wmincSisterProjects );

		# Queries
		if ( $subpage ) {
			$subpage = explode( '/', $subpage );
		}
		$projectQuery = $this->getRequest()->getText( 'searchproject',
			isset( $subpage[0] ) ? $subpage[0] : '' );
		$languageQuery = $this->getRequest()->getText( 'searchlanguage',
			isset( $subpage[1] ) ? $subpage[1] : '' );

		$this->showForm( $projectQuery, $languageQuery );

		# Search
		if ( $projectQuery || $languageQuery ) {
			$this->mNamesUserLang = Language::fetchLanguageNames( $this->getLanguage()->getCode(), 'all' );
			$this->mEnglishNames = Language::fetchLanguageNames( 'en', 'all' );
			$this->mNativeNames = Language::fetchLanguageNames( null, 'all' );
			$this->doSearch( $projectQuery, $languageQuery );
		}
	}

	/**
	 * Output the search form.
	 * @param string $project Default value for project field
	 * @param string $language Default value for language field
	 */
	protected function showForm( $project, $language ) {
		$form = HTMLForm::factory(
			'ooui',
			[
				'Project' => [
					'type' => 'select',
					'name' => 'searchproject',
					'id' => 'wminc-searchproject',
					'options' => array_flip( $this->mProjects ),
					'label-message' => 'wminc-searchwiki-selectproject',
					'default' => $project,
				],
				'Language' => [
					'type' => 'combobox',
					'options' => $this->getLanguageOptions(),
					'name' => 'searchlanguage',
					'id' => 'wminc-searchlanguage',
					'size' => 30,
					'label-message' => 'wminc-searchwiki-inputlanguage',
					'default' => $language,
				],
			],
			$this->getContext()
		);
		$form->setMethod( 'get' )
			->setWrapperLegendMsg( 'wminc-searchwiki' )
			->setSubmitTextMsg( 'wminc-searchwiki-go' )
			->setId( 'wminc-searchwiki-form' )
			->prepareForm()
			->displayForm( false );
	}

	/**
	 * Get a list of supported languages for use by the language form field.
	 * Code stolen from SpecialPageLanguage
	 *
	 * @return array
	 */
	private function getLanguageOptions() {
		$userLang = $this->getLanguage()->getCode();
		$languages = Language::fetchLanguageNames( $userLang, 'mwfile' );
		ksort( $languages );
		$options = [];
		foreach ( $languages as $code => $name ) {
			$options["$code - $name"] = $name;
		}
		return $options;
	}

	/**
	 * @param string $projectQuery
	 * @param string $languageQuery
	 */
	protected function doSearch( $projectQuery, $languageQuery ) {
		## Match project ##
		if ( isset( $this->mProjects[$projectQuery] ) ) {
			# searched with a project code (select box)
			$matchProject = $projectQuery;
		} else {
			$projectCode = array_search( $projectQuery, $this->mProjects );
			if ( $projectCode ) {
				# searched with a project name
				$matchProject = $projectCode;
			} else {
				return $this->getOutput()->addWikiMsg( 'wminc-searchwiki-noproject' );
			}
		}

		$results = [];

		$lcLanguageQuery = strtolower( $languageQuery );
		# The more important, the more below, because they override earlier codes
		$validCodes = array_keys( Language::fetchLanguageNames( 'en', 'all' ) );
		if ( in_array( $lcLanguageQuery, $validCodes ) ) {
			$builtinCode = Language::factory( $lcLanguageQuery )->getCode();
			$results[$builtinCode] = 'langcode'; # Match language code
		}
		$lcLanguageQuery = self::strip( $languageQuery );

		$codeByEnglishName = array_search(
			$lcLanguageQuery, array_map( 'self::strip', $this->mEnglishNames )
		);
		if ( $codeByEnglishName ) {
			$results[$codeByEnglishName] = 'englishname'; # Match name in English
		}

		$codeUserLang = array_search(
			$lcLanguageQuery, array_map( 'self::strip', $this->mNamesUserLang )
		);
		if ( $codeUserLang ) {
			$results[$codeUserLang] = 'userlangname'; # Match name in user language
		}

		$codeByNativeName = array_search(
			$lcLanguageQuery, array_map( 'self::strip', $this->mNativeNames )
		);
		if ( $codeByNativeName ) {
			$results[$codeByNativeName] = 'nativename'; # Match native name
		}

		if ( count( $results ) === 1 ) {
			$this->gotoWiki( $matchProject, key( $results ) );
		} elseif ( count( $results ) < 1 ) {
			$noresult = Html::element( 'p', [ 'class' => 'error' ],
				$this->msg( 'wminc-searchwiki-noresults' )->text() );
			return $this->getOutput()->addHTML( $noresult );
		} elseif ( count( $results ) > 1 ) {
			$this->showMultipleResults( $matchProject, $languageQuery, $results );
		}
	}

	/**
	 * Improve search by increasing the chance of matches
	 * @param string $str
	 * @return string
	 */
	protected function strip( $str ) {
		$str = strtolower( trim( $str ) );
		$replace = [ ' ' => '', '-' => '' ];
		return str_replace( array_keys( $replace ), array_values( $replace ), $str );
	}

	/**
	 * Go directly to the wiki if it exists, else to the Incubator test wiki
	 * @param string $project project code
	 * @param string $lang Language code
	 */
	protected function goToWiki( $project, $lang ) {
		$lang = $this->getRootCode( $lang );
		$dbarray = [ 'project' => $project, 'lang' => $lang, 'error' => null ];
		$status = WikimediaIncubator::getDBState( $dbarray );
		$infopageParams = [
			'goto' => 'mainpage',
			'uselang' => $this->getRequest()->getVal( 'uselang' )
		];
		$url = $status == 'existing' ? WikimediaIncubator::getSubdomain( $lang, $project ) :
			Title::newFromText( 'W' . $project . '/' . $lang )->getFullURL( $infopageParams );
		$this->getOutput()->redirect( $url );
	}

	/**
	 * @param string $code
	 * @return String
	 */
	protected function getRootCode( $code ) {
		# e.g. ks-arab -> ks
		$stripLangTags = [ '-arab', '-latn', '-cyrl', '-deva', '-cans', '-grek' ];
		return str_replace( $stripLangTags, '', $code );
	}

	/**
	 * @param string $project
	 * @param string $languageQuery
	 * @param array $results
	 */
	protected function showMultipleResults( $project, $languageQuery, $results ) {
		$this->getOutput()->addHTML( '<div id="wminc-searchwiki-results">' .
			Xml::element( 'p', [],
				$this->msg( 'wminc-searchwiki-multiplematches' )->text() ) .
			'<ul>'
		);
		$linkRenderer = $this->getLinkRenderer();
		foreach ( $results as $resultCode => $resultType ) {
			$langName = $this->mNamesUserLang[$resultCode];
			$infopage = Title::newFromText(
				WikimediaIncubator::displayPrefix( $project, $resultCode, true )
			);
			$linkInfoPage = $linkRenderer->makeKnownLink( $infopage,
				$this->msg( 'wminc-searchwiki-gotoinfopage' )->text()
			);
			# Give grep a chance to find the usages:
			# wminc-infopage-title-p, wminc-infopage-title-b, wminc-infopage-title-t,
			# wminc-infopage-title-q, wminc-infopage-title-n, wminc-infopage-title-s,
			# wminc-infopage-title-v, wminc-infopage-title-y
			$linkMainPage = $linkRenderer->makeKnownLink( $infopage,
				$this->msg( 'wminc-infopage-title-' . $project, $langName )->text(),
				[], [ 'goto' => 'mainpage' ]
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

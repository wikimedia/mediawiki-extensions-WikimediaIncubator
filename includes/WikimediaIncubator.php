<?php
/**
 * Main class of the WikimediaIncubator extension.
 * Implement test wiki preference, magic word and prefix check on edit page,
 * and contains general functions for other classes.
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 * @author Jon Harald Søby
 */

namespace MediaWiki\Extension\WikimediaIncubator;

use Article;
use HtmlArmor;
use Language;
use MediaWiki;
use MediaWiki\Content\Hook\PageContentLanguageHook;
use MediaWiki\Hook\BeforePageDisplayHook;
use MediaWiki\Hook\ContributionsToolLinksHook;
use MediaWiki\Hook\EditFormPreloadTextHook;
use MediaWiki\Hook\GetDefaultSortkeyHook;
use MediaWiki\Hook\MagicWordwgVariableIDsHook;
use MediaWiki\Hook\MakeGlobalVariablesScriptHook;
use MediaWiki\Hook\MediaWikiPerformActionHook;
use MediaWiki\Hook\MovePageIsValidMoveHook;
use MediaWiki\Hook\ParserFirstCallInitHook;
use MediaWiki\Hook\ParserGetVariableValueSwitchHook;
use MediaWiki\Hook\SpecialSearchCreateLinkHook;
use MediaWiki\Hook\SpecialSearchSetupEngineHook;
use MediaWiki\Hook\TitleIsAlwaysKnownHook;
use MediaWiki\Html\Html;
use MediaWiki\Languages\LanguageFactory;
use MediaWiki\Languages\LanguageNameUtils;
use MediaWiki\Linker\Linker;
use MediaWiki\MediaWikiServices;
use MediaWiki\Output\OutputPage;
use MediaWiki\Page\Hook\ArticleParserOptionsHook;
use MediaWiki\Page\Hook\ShowMissingArticleHook;
use MediaWiki\Permissions\Hook\GetUserPermissionsErrorsHook;
use MediaWiki\Preferences\Hook\GetPreferencesHook;
use MediaWiki\Request\WebRequest;
use MediaWiki\Search\Hook\SpecialSearchPowerBoxHook;
use MediaWiki\SpecialPage\SpecialPage;
use MediaWiki\Specials\SpecialSearch;
use MediaWiki\Title\Title;
use MediaWiki\User\Hook\UserGetDefaultOptionsHook;
use MediaWiki\User\Options\Hook\LoadUserOptionsHook;
use MediaWiki\User\User;
use MediaWiki\User\UserIdentity;
use Parser;
use ParserOptions;
use RequestContext;
use SearchEngine;
use Skin;
use Xml;

class WikimediaIncubator implements
	ContributionsToolLinksHook,
	GetPreferencesHook,
	UserGetDefaultOptionsHook,
	LoadUserOptionsHook,
	MagicWordwgVariableIDsHook,
	ParserGetVariableValueSwitchHook,
	GetUserPermissionsErrorsHook,
	MovePageIsValidMoveHook,
	ShowMissingArticleHook,
	EditFormPreloadTextHook,
	MediaWikiPerformActionHook,
	TitleIsAlwaysKnownHook,
	ParserFirstCallInitHook,
	PageContentLanguageHook,
	ArticleParserOptionsHook,
	MakeGlobalVariablesScriptHook,
	SpecialSearchCreateLinkHook,
	SpecialSearchPowerBoxHook,
	SpecialSearchSetupEngineHook,
	GetDefaultSortkeyHook,
	BeforePageDisplayHook
{
	// Used in places that expect the name of a project when no
	// project has been selected.
	private const NO_PROJECT_SELECTED = 'none';

	private LanguageFactory $languageFactory;

	/**
	 * Initialize this hook implementation class with needed services.
	 */
	public function __construct( LanguageFactory $languageFactory ) {
		$this->languageFactory = $languageFactory;
	}

	/**
	 * Add default preference
	 * @param array &$defOpt
	 */
	public function onUserGetDefaultOptions( &$defOpt ) {
		global $wmincPref;

		$defOpt[$wmincPref . '-project'] = self::NO_PROJECT_SELECTED;
	}

	/**
	 * Fallback to no project selected for users without a valid language code.
	 *
	 * @param UserIdentity $user
	 * @param array &$options
	 */
	public function onLoadUserOptions( UserIdentity $user, array &$options ): void {
		global $wmincPref;

		$langCode = $options[$wmincPref . '-code'] ?? '';
		if ( self::isContentProject( $user, $options[$wmincPref . '-project'] )
			&& !self::validateLanguageCode( $langCode )
		) {
			$options[$wmincPref . '-project'] = self::NO_PROJECT_SELECTED;
		}
	}

	/**
	 * Add preferences
	 * @param User $user
	 * @param array &$preferences
	 */
	public function onGetPreferences( $user, &$preferences ) {
		global $wmincPref, $wmincProjects, $wmincProjectSite, $wmincLangCodeLength;

		$preferences['language']['help-message'] = 'wminc-prefinfo-language';

		$projectList = array_combine( array_keys( $wmincProjects ), array_column( $wmincProjects, 'name' ) );
		foreach ( $wmincProjects as $projectCode => $metadata ) {
			if ( $metadata['sister'] ) {
				unset( $projectList[$projectCode] );
			}
		}
		$projectList = array_flip( $projectList );

		$prefinsert = [
			$wmincPref . '-project' => [
				'type' => 'select',
				'options' =>
					[ wfMessage( 'wminc-testwiki-none' )->plain() => self::NO_PROJECT_SELECTED ] +
					$projectList +
					[ wfMessage( 'wminc-testwiki-site' )->plain() => $wmincProjectSite['short'] ],
				'section' => 'personal/i18n',
				'label-message' => 'wminc-testwiki',
				'id' => $wmincPref . '-project',
				'help-message' => 'wminc-prefinfo-project',
			],
			$wmincPref . '-code' => [
				'type' => 'text',
				'section' => 'personal/i18n',
				'label-message' => 'wminc-testwiki-code',
				'id' => $wmincPref . '-code',
				'maxlength' => (int)$wmincLangCodeLength,
				'size' => (int)$wmincLangCodeLength,
				'help' => wfMessage( 'wminc-prefinfo-code' )->parse() .
					self::getTestWikiLanguages(),
				'list' => 'wminc-testwiki-codelist',
				'validation-callback' => static function ( $input, $alldata ) use ( $user ) {
					return WikimediaIncubator::validateCodePreference( $user, $input, $alldata );
				},
				'filter-callback' => [ self::class, 'filterCodePreference' ],
			],
		];

		$preferences = wfArrayInsertAfter( $preferences, $prefinsert, 'language' );
	}

	/**
	 * Add a datalist with languages in MediaWiki,
	 * to suggest common language codes
	 * @return string HTML
	 */
	private static function getTestWikiLanguages() {
		$list = MediaWikiServices::getInstance()->getLanguageNameUtils()
			->getLanguageNames( LanguageNameUtils::AUTONYMS, LanguageNameUtils::ALL );
		$t = '<datalist id="wminc-testwiki-codelist">' . "\n";
		foreach ( $list as $code => $name ) {
			$t .= Xml::element( 'option', [ 'value' => $code ],
				$code . ' - ' . $name ) . "\n";
		}
		$t .= '</datalist>';
		return $t;
	}

	/**
	 * For the preferences above
	 * @param User $user
	 * @param string $input
	 * @param array $alldata
	 * @return string|true
	 */
	public static function validateCodePreference( User $user, $input, $alldata ) {
		global $wmincPref;
		# If the user selected a project that NEEDS a language code,
		# but the user DID NOT enter a valid language code, give an error
		$filteredInput = self::filterCodePreference( $input );
		if ( isset( $alldata[$wmincPref . '-project'] )
			&& self::isContentProject( $user, $alldata[$wmincPref . '-project'] )
			&& !self::validateLanguageCode( $filteredInput )
		) {
			return Xml::element( 'span', [ 'class' => 'error' ],
				wfMessage( 'wminc-prefinfo-error' )->plain() );
		}
		return true;
	}

	/**
	 * For the preferences above
	 * @param string|null $input
	 * @return string|true
	 */
	public static function filterCodePreference( $input ) {
		return $input === null ? '' : trim( strtolower( $input ) );
	}

	/**
	 * This validates a given language code.
	 * Only "xx[x]" and "xx[x]-x[xxxxxxxx]" are allowed.
	 * @param string $code
	 * @return bool
	 */
	public static function validateLanguageCode( $code ) {
		global $wmincLangCodeLength;
		if ( strlen( $code ) > $wmincLangCodeLength ) {
			return false;
		}
		if ( $code == 'be-x-old' ) {
			return true; # one exception... waiting to be renamed to be-tarask
		}
		return (bool)preg_match( '/^[a-z][a-z][a-z]?(-[a-z]+)?$/', $code );
	}

	/**
	 * This validates a full prefix in a given title.
	 * It gives an array with the project and language code, containing
	 * the key 'error' if it is invalid.
	 * Use validatePrefix() if you just want true or false.
	 * Use displayPrefixedTitle() to make a prefix page title.
	 *
	 * @param Title|string $input The title to check (if string, don't include namespace)
	 * @param bool $onlyInfoPage Whether to validate only the prefix, or
	 * also allow other text within the page title (Wx/xxx vs Wx/xxx/Text)
	 * @param bool $allowSister Whether to allow sister projects when checking
	 * for the project code.
	 * @return array with 'error' or 'project', 'lang', 'prefix' and
	 * 					optionally 'realtitle'
	 */
	public static function analyzePrefix( $input, $onlyInfoPage = false, $allowSister = false ) {
		$data = [ 'error' => null ];
		if ( $input instanceof Title ) {
			global $wmincTestWikiNamespaces;
			$title = $input->getText();
			if ( !in_array( $input->getNamespace(), $wmincTestWikiNamespaces ) ) {
				return [ 'error' => 'notestwikinamespace' ];
			}
			if ( $onlyInfoPage && $input->getNamespace() != NS_MAIN ) {
				# Info pages are only in the main NS
				return [ 'error' => 'nomainnamespace' ];
			}
		} else {
			$title = $input;
		}
		# split title into parts
		$titleparts = explode( '/', $title );
		# Test if array, has a language code and project code has proper length
		if ( !isset( $titleparts[1] ) || strlen( $titleparts[0] ) != 2 ) {
			$data['error'] = 'noslash';
		} else {
			# get the x from Wx/...
			$data['project'] = $titleparts[0][1] ?? '';
			$data['lang'] = $titleparts[1]; # language code
			$data['prefix'] = 'W' . $data['project'] . '/' . $data['lang'];
			# check language code
			if ( !self::validateLanguageCode( $data['lang'] ) ) {
				$data['error'] = 'invalidlangcode';
			}
		}
		global $wmincProjects;
		$listProjects = [];
		foreach ( $wmincProjects as $projectCode => $metadata ) {
			if ( $metadata['sister'] && $allowSister ) {
				array_push( $listProjects, $projectCode );
			} elseif ( !$metadata['sister'] ) {
				array_push( $listProjects, $projectCode );
			}
		}
		$listProjects = array_map( [ __CLASS__, 'preg_quote_slash' ], $listProjects );
		if ( !preg_match( '/^W(' . implode( '|', $listProjects ) . ')\/[a-z-]+' .
			( $onlyInfoPage ? '$/' : '(\/.+)?$/' ), $title ) ) {
			$data['error'] = 'invalidprefix';
		}
		if ( !$onlyInfoPage && $data['error'] != 'invalidprefix' ) { # there is a Page_title
			// @phan-suppress-next-line PhanTypePossiblyInvalidDimOffset
			$prefixn = strlen( $data['prefix'] . '/' ); # number of chars in prefix
			# get Page_title from Wx/xx/Page_title
			$data['realtitle'] = substr( $title, $prefixn );
		}
		return $data; # return an array with information
	}

	/**
	 * This returns simply true or false based on analyzePrefix().
	 * @param string|Title $title
	 * @param bool $onlyprefix
	 * @return bool
	 */
	public static function validatePrefix( $title, $onlyprefix = false ) {
		$data = self::analyzePrefix( $title, $onlyprefix );
		return !$data['error'];
	}

	/**
	 * Get &testwiki=wx/xx and validate that prefix.
	 * Returns the array of analyzePrefix() on success.
	 * @return array|false
	 */
	public static function getUrlParam() {
		global $wgRequest;
		$urlParam = $wgRequest->getVal( 'testwiki' );
		if ( !$urlParam ) {
			return false;
		}
		$val = self::analyzePrefix( ucfirst( $urlParam ), true );
		if ( $val['error'] || !isset( $val['project'] ) || !isset( $val['lang'] )
			|| !$val['project'] || !$val['lang'] ) {
			return false;
		}
		$val['prefix'] = strtolower( $val['prefix'] );
		return $val;
	}

	/**
	 * Returns the project code or name if the given project code or name (or preference by default)
	 * is one of the projects using the format Wx/xxx (as defined in $wmincProjects)
	 * Returns false if it is not valid.
	 * @param UserIdentity $user
	 * @param string $project The project code
	 * @param bool $returnName Whether to return the project name instead of the code
	 * @param bool $includeSister Whether to include sister projects
	 * @return string|false
	 */
	public static function getProject(
		UserIdentity $user,
		$project = '',
		$returnName = false,
		$includeSister = false
	) {
		global $wmincPref, $wmincProjects;
		$url = self::getUrlParam();
		if ( $project ) {
			$r = $project; # Precedence to given value
		} elseif ( $url ) {
			$r = $url['project']; # Otherwise URL &testwiki= if set
		} else {
			$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
			$r = $userOptionsLookup->getOption( $user, $wmincPref . '-project' ); # Defaults to preference
		}
		$projects = $wmincProjects;
		foreach ( $projects as $projectCode => $metadata ) {
			if ( !$includeSister && $metadata['sister'] ) {
				unset( $projects[$projectCode] );
			}
		}
		if ( array_key_exists( $r, $projects ) ) {
			# If a code is given, return what is wanted
			return $returnName ? $projects[$r]['name'] : $r;
		} elseif ( array_search( $r, array_column( $projects, 'name' ) ) ) {
			# If a name is given, return what is wanted
			return $returnName ? $r : array_search( $r, array_column( $projects, 'name' ) );
		}
		# Unknown code or name given -> false
		return false;
	}

	/**
	 * Returns a simple boolean based on getProject()
	 * @param UserIdentity $user
	 * @param string $project
	 * @param bool $returnName
	 * @param bool $includeSister
	 * @return bool
	 */
	public static function isContentProject(
		UserIdentity $user,
		$project = '',
		$returnName = false,
		$includeSister = false
	) {
		return (bool)self::getProject( $user, $project, $returnName, $includeSister );
	}

	/**
	 * display the prefix by the given project and code
	 * (or the URL &testwiki= or user preference if no parameters are given)
	 * @param string $project
	 * @param string $code
	 * @param bool $allowSister
	 * @return string
	 */
	public static function displayPrefix( $project = '', $code = '', $allowSister = false ) {
		global $wmincProjects;
		$user = RequestContext::getMain()->getUser(); // A lot of callers lack context
		if ( $project && $code ) {
			$projectvalue = $project;
			$codevalue = $code;
		} else {
			global $wmincPref;
			$url = self::getUrlParam();
			$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
			$projectPref = $userOptionsLookup->getOption( $user, $wmincPref . '-project' );
			$codePref = $userOptionsLookup->getOption( $user, $wmincPref . '-code' );
			$projectvalue = ( $url ? $url['project'] : $projectPref );
			$codevalue = ( $url ? $url['lang'] : $codePref );
		}
		$sister = $allowSister && $wmincProjects[$projectvalue]['sister'];
		if ( self::isContentProject( $user, $projectvalue ) || $sister ) {
			// if parameters are set OR it falls back to user pref and
			// he has a content project pref set  -> return the prefix
			return 'W' . $projectvalue . '/' . $codevalue; // return the prefix
		} else {
			// fall back to user pref with NO content pref set
			// -> still provide the value (probably 'none' or 'inc')
			return $projectvalue;
		}
	}

	/**
	 * @return string|null The prefix used for the selected wiki under incubation,
	 *  or null when no wiki is selected.
	 */
	private static function selectedIncubationWiki() {
		global $wmincProjectSite;

		$prefix = self::displayPrefix();
		// These values have special meanings and are not actual wikis under incubation.
		if ( $prefix === self::NO_PROJECT_SELECTED || $prefix === $wmincProjectSite['short'] ) {
			return null;
		}
		return $prefix;
	}

	/**
	 * Makes a full prefixed title of a given page title and namespace
	 * @param string $title
	 * @param int $ns numeric value of namespace
	 * @param bool $translateNs whether the namespaces should be in the user's language
	 * @return Title
	 */
	public static function displayPrefixedTitle( $title, $ns = 0, $translateNs = true ) {
		global $wmincTestWikiNamespaces;

		$lang = RequestContext::getMain()->getLanguage();
		if ( !$translateNs ) {
			$lang = MediaWikiServices::getInstance()->getLanguageFactory()
				->getLanguage( 'en' );
		}

		if ( in_array( $ns, $wmincTestWikiNamespaces ) ) {
			/* Standard namespace as defined by
			* $wmincTestWikiNamespaces, so use format:
			* TITLE + NS => NS:Wx/xxx/TITLE
			*/
			return Title::makeTitleSafe( $ns, self::displayPrefix() . '/' . $title );
		}

		/* Non-standard namespace, so use format:
		* TITLE + NS => Wx/xxx/NS:TITLE
		* (with localized namespace name)
		*/
		return Title::makeTitleSafe( 0, self::displayPrefix() . '/' .
			$lang->getNsText( $ns ) . ':' . $title );
	}

	public function onMagicWordwgVariableIDs( &$magicWords ) {
		$magicWords[] = 'usertestwiki';
	}

	public function onParserGetVariableValueSwitch( $parser, &$cache, $magicWordId, &$ret, $frame ) {
		if ( $magicWordId === 'usertestwiki' ) {
			$p = self::displayPrefix();
			$ret = $cache[$magicWordId] = $p ?: self::NO_PROJECT_SELECTED;
		}
	}

	/**
	 * Whether we should show an error message that the page is unprefixed
	 * @param Title $title Title object
	 * @return bool
	 */
	public static function shouldWeShowUnprefixedError( $title ) {
		global $wmincTestWikiNamespaces, $wmincProjectSite, $wmincPseudoCategoryNSes;
		$prefixdata = self::analyzePrefix( $title->getText() );
		$ns = $title->getNamespace();
		$categories = array_map( [ __CLASS__, 'preg_quote_slash' ], $wmincPseudoCategoryNSes );
		if ( !$prefixdata['error'] ) {
			# no error in prefix -> no error to show
			return false;
		} elseif ( self::displayPrefix() == $wmincProjectSite['short'] ) {
			# If user has "project" (Incubator) as test wiki preference, it isn't needed to check
			return false;
		} elseif ( !in_array( $ns, $wmincTestWikiNamespaces ) ) {
			# OK if it's not in one of the content namespaces
			return false;
		} elseif ( ( $ns == NS_CATEGORY || $ns == NS_CATEGORY_TALK ) &&
			preg_match( '/^(' . implode( '|', $categories ) . '):.+$/', $title->getText() ) ) {
			# allowed unprefixed categories
			return false;
		}
		return true;
	}

	/**
	 * This does several things:
	 * Disables editing pages belonging to existing wikis (+ shows message)
	 * Disables creating an unprefixed page (+ shows error message)
	 * See also: WikimediaIncubator::onShowMissingArticle()
	 * @param Title $title
	 * @param User $user
	 * @param string $action
	 * @param array &$result
	 * @return bool
	 */
	public function onGetUserPermissionsErrors( $title, $user, $action, &$result ) {
		$titletext = $title->getText();
		$prefixdata = self::analyzePrefix( $titletext );

		if ( self::getDBState( $prefixdata ) == 'existing' ) {
			if ( $prefixdata['prefix'] == $titletext &&
				( $title->exists() || $user->isAllowed( 'editinterface' ) ) ) {
				# if it's an info page, allow if the page exists or the user has 'editinterface' right
				return true;
			}
			# no permission if the wiki already exists
			$link = self::getSubdomain( $user, $prefixdata['lang'],
				$prefixdata['project'], ( $title->getNsText() ? $title->getNsText() . ':' : '' ) .
				( $prefixdata['realtitle'] ?? $titletext )
			);
			# faking external link to support prot-rel URLs
			$link = "[$link " . self::makeExternalLinkText( $link ) . "]";
			$result = [ 'wminc-error-wiki-exists', $link ];
			return $action != 'edit';
		}

		if ( !self::shouldWeShowUnprefixedError( $title ) || $action != 'edit' || $title->exists() ) {
			# only check if needed & if on page creation
			return true;
		} elseif ( $prefixdata['error'] == 'invalidlangcode' ) {
			$result = [ 'wminc-error-wronglangcode', $prefixdata['lang'] ];
		} elseif ( self::isContentProject( $user ) ) {
			# If the user has a test wiki pref, suggest a page title with prefix
			$suggesttitle = $prefixdata['realtitle'] ?? $titletext;
			$suggest = self::displayPrefixedTitle( $suggesttitle, $title->getNamespace() );
			# Suggest to create a prefixed page
			$result = [ 'wminc-error-unprefixed-suggest', $suggest ];
		} else {
			$result = [ 'wminc-error-unprefixed' ];
		}
		return $action != 'edit';
	}

	public function onMovePageIsValidMove( $oldTitle, $newTitle, $status ) {
		if ( self::shouldWeShowUnprefixedError( $newTitle ) ) {
			# there should be an error with the new page title
			$status->fatal( 'wminc-error-move-unprefixed' );
			return false;
		}

		return true;
	}

	/**
	 * Add a link to Special:ViewUserLang from Special:Contributions/USERNAME
	 * if the user has 'viewuserlang' permission
	 * Based on code from extension LookupUser made by Tim Starling
	 * @param int $id
	 * @param Title $nt
	 * @param array &$links
	 * @param SpecialPage $sp
	 */
	public function onContributionsToolLinks( $id, Title $nt, array &$links, SpecialPage $sp ) {
		if ( $sp->getUser()->isAllowed( 'viewuserlang' ) ) {
			$user = $nt->getText();
			$links['viewuserlang'] = $sp->getLinkRenderer()->makeKnownLink(
				SpecialPage::getTitleFor( 'ViewUserLang', $user ),
				$sp->msg( 'wminc-viewuserlang' )->text()
			);
		}
	}

	/**
	 * Convenience function to access $wgConf->get()
	 * @param UserIdentity $user
	 * @param string $setting the setting to call
	 * @param string $lang the language code
	 * @param string $project the project code or name
	 * @return mixed the setting from $wgConf->settings
	 */
	public static function getConf( UserIdentity $user, $setting, $lang, $project ) {
		if ( !self::canWeCheckDB() ) {
			return false;
		}
		global $wmincProjects, $wgConf;
		$wgConf->loadFullData();
		$lang = strtolower( $lang );
		$langHyphen = str_replace( '_', '-', $lang );
		$langUnderscore = str_replace( '-', '_', $lang );
		$projectName = self::getProject( $user, $project, true, true );
		$projectCode = self::getProject( $user, $project, false, true );
		if ( !$projectCode ) {
			global $wmincMultilingualProjects;
			$projectCode = array_search( $project, $wmincMultilingualProjects );
		}
		$site = strtolower( $projectName );
		$params = [
			'lang' => $langHyphen,
			'site' => $site,
		];
		$dbSuffix = $wmincProjects[$projectCode]['dbsuffix'] ?? $site;
		$wikiTag = $wmincProjects[$projectCode]['wikitag'] ?? $site;
		return $wgConf->get( $setting, $langUnderscore . $dbSuffix, $wikiTag, $params );
	}

	private static function getExistingWikis(): array {
		global $wmincExistingWikis, $wgLocalDatabases;
		// This configuration mainly existed for testing and local development.
		// It is not used by Wikimedia in production.
		return $wmincExistingWikis ?? $wgLocalDatabases;
	}

	/**
	 * Do we know the databases of the existing wikis?
	 * @return bool
	 */
	public static function canWeCheckDB() {
		global $wmincProjects;
		return (bool)array_column( $wmincProjects, 'dbsuffix' );
	}

	/**
	 * Given an incubator testwiki prefix, get the database name of the
	 * corresponding wiki, whether it exists or not
	 * @param array $prefix Array from WikimediaIncubator::analyzePrefix();
	 * @return false|string
	 */
	public static function getDB( $prefix ) {
		if ( !self::canWeCheckDB() ) {
			return false;
		} elseif ( !$prefix || $prefix['error'] ) {
			return false; # shouldn't be, but you never know
		}
		global $wmincProjects, $wgDummyLanguageCodes;
		$dbLang = str_replace( '-', '_', $prefix['lang'] );
		$project = $prefix['project'];
		$dbProject = $wmincProjects[$project]['dbsuffix'] ?? $project;
		$redirectcode = array_search( $prefix['lang'], $wgDummyLanguageCodes );
		if ( $redirectcode ) {
			$prefix['lang'] = $redirectcode;
		}
		return strtolower( $dbLang . $dbProject );
	}

	/**
	 * @return false|array Array with closed databases
	 */
	public static function getDBClosedWikis() {
		global $wmincClosedWikis;
		if ( !self::canWeCheckDB() || !$wmincClosedWikis ) {
			return false;
		}
		# Is probably a file, but it might be that an array is given
		return is_array( $wmincClosedWikis ) ? $wmincClosedWikis :
			array_map( 'trim', file( $wmincClosedWikis ) );
	}

	/**
	 * @param array $prefix Array from WikimediaIncubator::analyzePrefix();
	 * @return false|string 'existing' 'closed' 'missing'
	 */
	public static function getDBState( $prefix ) {
		$db = self::getDB( $prefix );
		if ( !$db ) {
			return false;
		}
		$existingWikis = self::getExistingWikis();
		$closed = self::getDBClosedWikis();
		if ( !in_array( $db, $existingWikis ) ) {
			return 'missing'; # not in the list
		} elseif ( is_array( $closed ) && in_array( $db, $closed ) ) {
			return 'closed'; # in the list of closed wikis
		}
		return 'existing';
	}

	/**
	 * If existing wiki: show message or redirect if &testwiki is set to that
	 * Missing article on Wx/xx info pages: show welcome page
	 * See also: WikimediaIncubator::onGetUserPermissionsErrors()
	 * @param Article $article
	 * @return True
	 */
	public function onShowMissingArticle( $article ) {
		$title = $article->getTitle();
		$prefix = self::analyzePrefix( $title, true /* only info pages */,
			true /* also sister projects */ );
		if ( !$prefix['error'] ) {
			self::onShowMissingArticleForInfoPages( $article, $prefix );
			return true;
		}

		$out = $article->getContext()->getOutput();
		global $wmincProjects;
		$prefix2 = self::analyzePrefix( $title, false, true );
		$p = $prefix2['project'] ?? '';
		$user = $article->getContext()->getUser();
		if ( self::getDBState( $prefix2 ) == 'existing' ) {
			$link = self::getSubdomain( $user, $prefix2['lang'], $p,
				( $title->getNsText() ? $title->getNsText() . ':' : '' ) .
				( $prefix2['realtitle'] ?? $title->getText() )
			);
			if ( self::displayPrefix() == $prefix2['prefix'] ) {
				# Redirect to the existing wiki if the user has this wiki as preference
				$out->redirect( $link );
				return true;
			} else {
				# Show a link to the existing wiki
				$showLink = self::makeExternalLinkText( $link, true );
				$out->addHtml( '<div class="wminc-wiki-exists">' .
					wfMessage( 'wminc-error-wiki-exists' )->rawParams( $showLink )->escaped() .
				'</div>' );
			}
		} elseif ( array_key_exists( $p, $wmincProjects ) && $wmincProjects[$p]['sister'] ) {
			# A sister project is not hosted here, so direct the user to the relevant wiki
			$link = self::getSubdomain( $user, $prefix2['lang'], $p,
				( $title->getNsText() ? $title->getNsText() . ':' : '' ) .
				( $prefix2['realtitle'] ?? $title->getText() )
			);
			$showLink = self::makeExternalLinkText( $link, true );
			$out->addHtml( '<div class="wminc-wiki-sister">' .
				wfMessage( 'wminc-error-wiki-sister' )->rawParams( $showLink )->escaped() .
			'</div>' );
		} elseif ( self::shouldWeShowUnprefixedError( $title ) ) {
			# Unprefixed pages
			if ( self::isContentProject( $user ) ) {
				# If the user has a test wiki pref, suggest a page title with prefix
				$suggesttitle = $prefix2['realtitle'] ?? $title->getText();
				$suggest = self::displayPrefixedTitle( $suggesttitle, $title->getNamespace() );
				# Suggest to create a prefixed page
				$out->addHtml( '<div class="wminc-unprefixed-suggest">' .
					wfMessage( 'wminc-error-unprefixed-suggest', $suggest )->parseAsBlock() .
				'</div>' );
			} else {
				$out->addWikiMsg( 'wminc-error-unprefixed' );
			}
		}
		return true;
	}

	/**
	 * Use the InfoPage class to show a nice welcome page
	 * depending on whether it belongs to an existing, closed or missing wiki
	 * @param Article $article
	 * @param array $prefix
	 */
	public static function onShowMissingArticleForInfoPages( $article, $prefix ) {
		$out = $article->getContext()->getOutput();
		$title = $article->getTitle();
		$out->addModuleStyles( 'WikimediaIncubator.InfoPage' );
		$infopage = new InfoPage( $title, $prefix, $article->getContext()->getUser() );
		$dbstate = self::getDBState( $prefix );
		if ( $dbstate == 'existing' ) {
			$infopage->mSubStatus = 'beforeincubator';
			$out->addHtml( $infopage->showExistingWiki() );
		} elseif ( $dbstate == 'closed' ) {
			$infopage->mSubStatus = 'imported';
			$out->addHtml( $infopage->showIncubatingWiki() );
		} elseif ( self::getMainPage( $prefix['lang'], $prefix['prefix'] )->exists() ) {
			$infopage->mSubStatus = 'open';
			$out->addHtml( $infopage->showIncubatingWiki() );
		} else {
			$out->addHtml( $infopage->showMissingWiki() );
		}
		# Set the page title from "Wx/xyz - Incubator" to "Wikiproject Language - Incubator"
		$out->setHTMLTitle( wfMessage( 'pagetitle', $infopage->mFormatTitle )->text() );
	}

	public function onParserFirstCallInit( $parser ) {
		$parser->setFunctionHook( 'infopage', [ self::class, 'renderParserFunction' ] );
	}

	/**
	 * #infopage parser function
	 * @param Parser $parser
	 * @param string ...$parseOptions
	 * @return array|string
	 */
	public static function renderParserFunction( Parser $parser, ...$parseOptions ) {
		$title = $parser->getTitle();
		$prefix = self::analyzePrefix( $title );
		if ( $prefix['error'] ) {
			return '<span class="error">' .
				wfMessage( 'wminc-infopage-error' )->plain() . '</span>';
		}
		$infopage = new InfoPage( $title, $prefix, $parser->getUserIdentity() );
		$infopage->mOptions = [
			'status' => 'open',
			# other (optional) options: mainpage
		];

		foreach ( $parseOptions as $parseOption ) {
			if ( strpos( $parseOption, '=' ) === false ) {
				continue;
			}
			list( $key, $value ) = explode( '=', $parseOption, 2 );
			$key = strtolower( trim( $key ) );
			$infopage->mOptions[$key] = trim( $value );
		}

		$infopage->mSubStatus = $infopage->mOptions['status'];

		$parser->getOutput()->addModuleStyles( [ 'WikimediaIncubator.InfoPage' ] );
		$parser->getOptions()->getUserLangObj(); # we have to split the cache by language

		# Set <h1> heading
		$parser->getOutput()->setTitleText( htmlspecialchars( $infopage->mFormatTitle ) );

		if ( in_array( $infopage->mSubStatus, [ 'created', 'beforeincubator' ] ) ) {
			$return = $infopage->showExistingWiki();
		} elseif ( self::getMainPage( $prefix['lang'], $prefix['prefix'] )->exists() ) {
			$return = $infopage->showIncubatingWiki();
		} else {
			// open wiki, no test wiki main page => missing
			$return = $infopage->showMissingWiki();
		}

		return [ $return, 'noparse' => true, 'nowiki' => true, 'isHTML' => true ];
	}

	/**
	 * When creating a new info page, help the user by prefilling it
	 * @param string &$text
	 * @param Title $title
	 */
	public function onEditFormPreloadText( &$text, $title ) {
		$prefix = self::analyzePrefix( $title, true /* only info page */,
			false /* no sister projects */ );
		if ( !$prefix['error'] ) {
			$text = wfMessage( 'wminc-infopage-prefill', $prefix['prefix'] )->plain();
		}
	}

	/**
	 * This forms a URL based on the language and project.
	 * @param UserIdentity $user
	 * @param string $lang Language code
	 * @param string $project Project code or name
	 * @param string $title Page name
	 * @return string
	 */
	public static function getSubdomain( UserIdentity $user, $lang, $project, $title = '' ) {
		global $wgArticlePath;
		return self::getConf( $user, 'wgServer', $lang, $project ) .
			( $title ? str_replace( '$1', str_replace( ' ', '_', $title ), $wgArticlePath ) : '' );
	}

	/**
	 * make "Wx/xxx/Main Page"
	 * @param string $langCode The language code
	 * @param string|null $prefix the "Wx/xxx" prefix to add
	 * @return Title
	 */
	public static function getMainPage( $langCode, $prefix = null ) {
		# Take the "mainpage" msg in the given language
		$msg = wfMessage( 'mainpage' )->inLanguage( $langCode )->plain();
		$mainpage = $prefix !== null ? $prefix . '/' . $msg : $msg;
		$title = Title::newFromText( $mainpage );
		if ( $title->exists() ) {
			return $title; # If it exists, use it
		}
		$mainpage = $prefix !== null ? $prefix . '/Main_Page' : 'Main_Page';
		$title2 = Title::newFromText( $mainpage );
		if ( $title2->exists() ) {
			return $title2; # Try the English "Main Page"
		}
		return $title; # Nothing exists, use the original again
	}

	/**
	 * Redirect if &goto=mainpage on info pages
	 * @param OutputPage $output
	 * @param Article $page
	 * @param Title $title
	 * @param User $user
	 * @param WebRequest $request
	 * @param MediaWiki $mediaWiki
	 * @return bool
	 */
	public function onMediaWikiPerformAction( $output, $page, $title, $user, $request, $mediaWiki ) {
		$prefix = self::analyzePrefix( $title, true );
		if ( $prefix['error'] || $request->getVal( 'goto' ) != 'mainpage' ) {
			return true;
		}

		$dbstate = self::getDBState( $prefix );
		if ( !$dbstate ) {
			return true;
		}
		if ( $dbstate == 'existing' ) {
			# redirect to the existing lang.wikiproject.org if it exists
			$output->redirect( self::getSubdomain( $user, $prefix['lang'], $prefix['project'] ) );
			return false;
		}
		$params = [ 'redirectfrom' => 'infopage' ];
		$uselang = $request->getVal( 'uselang' );
		if ( $uselang ) {
			# pass through the &uselang parameter
			$params['uselang'] = $uselang;
		}
		$mainpage = self::getMainPage( $prefix['lang'], $prefix['prefix'] );
		if ( $mainpage->exists() ) {
			# Only redirect to the main page if that page exists
			$output->redirect( $mainpage->getFullURL( $params ) );
			return false;
		}
		return true;
	}

	/**
	 * Valid Wx/xyz info pages should be considered as existing pages
	 * Note: TitleIsAlwaysKnown hook exists since 1.20
	 * @param Title $title
	 * @param bool &$isKnown
	 */
	public function onTitleIsAlwaysKnown( $title, &$isKnown ) {
		$prefix = self::analyzePrefix( $title, true, true );
		if ( !$prefix['error'] ) {
			$isKnown = true;
		}
	}

	/**
	 * Override the page language of test wiki content pages.
	 *
	 * This affects not just the page view, but also the reported meta data
	 * for this page title in other contexts (e.g. API queries, Page information).
	 *
	 * For pages belonging to an incubating test wiki, deterministically
	 * set the page content language to the language of the test wiki.
	 *
	 * @param Title $title
	 * @param Language &$pageLang
	 * @param Language $userLang Unused, T299369
	 */
	public function onPageContentLanguage( $title, &$pageLang, $userLang ) {
		$prefix = self::analyzePrefix( $title, /* onlyInfoPage*/ false );
		if ( !$prefix['error'] && !self::validatePrefix( $title, true ) ) {
			$pageLang = $this->languageFactory->getLanguage( $prefix['lang'] );
		}
	}

	/**
	 * Override the Parser language on page views.
	 *
	 * For info pages, localise the content in the current user's language
	 * (akin to interface messages and special pages).
	 *
	 * @param Article $article
	 * @param ParserOptions $parserOptions
	 */
	public function onArticleParserOptions( Article $article, ParserOptions $parserOptions ) {
		$title = $article->getTitle();
		$prefix = self::analyzePrefix( $title, true );
		if ( !$prefix['error'] ) {
			$pageLang = RequestContext::getMain()->getLanguage();
			$parserOptions->setTargetLanguage( $pageLang );
		}
	}

	/**
	 * Search: Adapt the default message to show a more descriptive one,
	 * along with an adapted link.
	 * @param Title $title
	 * @param array &$params
	 */
	public function onSpecialSearchCreateLink( $title, &$params ) {
		if ( $title->isKnown() ) {
			return;
		}
		global $wmincProjectSite, $wmincTestWikiNamespaces;
		$prefix = self::displayPrefix();

		$newNs = $title->getNamespace();
		$newTitle = $title->getText();
		$newTitleData = self::analyzePrefix( $newTitle, false, true );
		if ( !in_array( $title->getNamespace(), $wmincTestWikiNamespaces ) ) {
			# namespace not affected by the prefix system: show normal msg
			return;
		} elseif ( $prefix == $wmincProjectSite['short'] ) {
			$newNs = NS_PROJECT;
		} elseif ( self::getDBState( $newTitleData ) == 'existing' ) {
			# the wiki already exists
			$link = self::getSubdomain(
				RequestContext::getMain()->getUser(), // No context
				$newTitleData['lang'], $newTitleData['project'],
				( $title->getNsText() ? $title->getNsText() . ':' : '' ) .
				( $newTitleData['realtitle'] ?? $title->getText() )
			);
			$params[0] = 'wminc-error-wiki-exists';
			$params[1] = "[$link " . self::makeExternalLinkText( $link ) . "]";
			return;
		} elseif ( $newTitleData['error'] ) {
			# only add a prefix to the title if there is no prefix
			# ('error' by analyzePrefix)
			$newTitle = $prefix . '/' . $newTitle;
		}

		$t = Title::newFromText( $newTitle, $newNs );
		if ( $t && $t->isKnown() ) {
			# use the default message if the suggested title exists
			$params[0] = 'searchmenu-exists';
			$params[1] = wfEscapeWikiText( $t->getPrefixedText() );
			return;
		}
		$params[] = wfEscapeWikiText( $t ? $t->getPrefixedText() : $newTitle );
		$params[0] = $prefix && $prefix != self::NO_PROJECT_SELECTED
			? 'wminc-search-nocreate-suggest' : 'wminc-search-nocreate-nopref';
	}

	/**
	 * Search: Add an input form to enter a test wiki prefix.
	 * @param array &$showSections
	 * @param string $term
	 * @param array &$opts
	 */
	public function onSpecialSearchPowerBox( &$showSections, $term, &$opts ) {
		$showSections['testwiki'] = Xml::label( wfMessage( 'wminc-testwiki' )->text(), 'testwiki' )
			. ' ' . Xml::input( 'testwiki', 20, self::displayPrefix(), [ 'id' => 'testwiki' ] );
	}

	/**
	 * Search: Search by default in the test wiki of the user's preference (or url &testwiki).
	 * @param SpecialSearch $search
	 * @param string $profile
	 * @param SearchEngine $engine
	 */
	public function onSpecialSearchSetupEngine( $search, $profile, $engine ) {
		if ( !$engine->prefix ) {
			$engine->prefix = self::selectedIncubationWiki() ?? '';
		}
	}

	private static function preg_quote_slash( $str ) {
		return preg_quote( $str, '/' );
	}

	/**
	 * @param string $url
	 * @param bool $callLinker Whether to call makeExternalLink()
	 * @return string
	 */
	public static function makeExternalLinkText( $url, $callLinker = false ) {
		# when displaying a URL, if it contains 'http://' or 'https://' it's ok to leave it,
		# but for protocol-relative URLs, it's nicer to remove the '//'
		$linktext = ltrim( $url, '/' );
		return $callLinker ? Linker::makeExternalLink( $url, $linktext ) : $linktext;
	}

	/**
	 * Set global variables for use in scripts
	 * @param array &$vars
	 * @param OutputPage $out
	 */
	public function onMakeGlobalVariablesScript( &$vars, $out ): void {
		$title = $out->getTitle();
		$prefix = self::analyzePrefix( $title );
		if ( !$prefix[ 'error' ] ) {
			$vars[ 'wgWmincTestwikiPrefix' ] = $prefix[ 'prefix' ];
			$vars[ 'wgWmincTestwikiProject' ] = $prefix[ 'project' ];
			$vars[ 'wgWmincTestwikiLanguage' ] = $prefix[ 'lang' ];
			if ( $prefix[ 'realtitle' ] ) {
				$vars[ 'wgWmincRealPagename' ] = $prefix[ 'realtitle' ];
			}
		}
	}

	/**
	 * Use real page title as default sort key
	 * @param Title $title
	 * @param string &$sortkey
	 */
	public function onGetDefaultSortkey( $title, &$sortkey ) {
		$prefix = self::analyzePrefix( $title );
		if ( !$prefix[ 'error' ] && $prefix[ 'realtitle' ] ) {
			$sortkey = $prefix[ 'realtitle' ];
		}
	}

	/**
	 * Generate an HTML title.
	 *
	 * Generate an HTML title (for use in the <h1> tag) with spans around
	 * the prefix and real title.
	 *
	 * @param string $namespace
	 * @param string $prefix
	 * @param string $realTitle
	 * @param string $displayTitle HTML
	 * @return string
	 */
	private static function generateHtmlTitle( $namespace, $prefix, $realTitle, $displayTitle ) {
		// Is there an actual, valid {{DISPLAYTITLE}} on the page? If the
		// $displayTitle *doesn't* contain the following string, there is.
		// Validation of the display title is already done by the time the
		// hook below is run, so what it returns can be considered safe HTML.
		$useDisplayTitle = !preg_match( '/mw-page-title-main/', $displayTitle );

		// If the display title contains the prefix uninterrupted, we can
		// safely remove the prefix and attach the remainder to the prefix
		// to form the full page title. This will allow future-proof
		// display titles like {{DISPLAYTITLE:''{{PAGENAME}}''}} work
		// as well.
		// An example of an "interrupted" prefix would be e.g.
		// "Wp/<b>xx</b>/<i>Title</i>".
		$displayTitleExploded = explode( '/', $displayTitle );
		$displayTitleSliced = array_slice( $displayTitleExploded, 0, 2 );
		$displayTitlePrefix = implode( '/', $displayTitleSliced ) . '/';
		$displayTitleContainsPrefix = str_ends_with( $displayTitlePrefix, $prefix . '/' );

		// If the display title doesn't contain the prefix uninterrupted,
		// we just return the display title without doing anything else.
		// This is similar to how core deals with DISPLAYTITLE.
		if ( $useDisplayTitle && !$displayTitleContainsPrefix ) {
			return $displayTitle;
		} elseif ( $useDisplayTitle ) {
			$realTitle = preg_replace(
				'~' . preg_quote( $prefix, '~' ) . '/~',
				'',
				$displayTitle,
				1
			);
		}

		$prefixsplit = explode( '/', $prefix );

		$project = Html::element(
			'span',
			[
				'class' => 'ext-wminc-title-project',
				'dir' => 'ltr',
			],
			$prefixsplit[0]
		);

		$langCode = Html::element(
			'span',
			[
				'class' => 'ext-wminc-title-langcode',
				'dir' => 'ltr',
			],
			$prefixsplit[1]
		);

		$title = Html::rawElement(
			'span',
			[ 'class' => 'ext-wminc-title-prefix' ],
			$project . '/' . $langCode . '/'
		);
		// Needs to be rawElement to allow passing HTML from the display title.
		$title .= Html::rawElement(
			'span',
			[ 'class' => 'ext-wminc-title-realtitle' ],
			$realTitle
		);

		return Parser::formatPageTitle( $namespace, ':', new HtmlArmor( $title ) );
	}

	/**
	 * Set the page title.
	 *
	 * Encapsulate the test wiki prefix in the <h1> element with <span> tags
	 * with relevant classes in order to let them be styled separately.
	 *
	 * Also changes the HTML's <title> element to remove the prefix, but only for
	 * pages in the main namespace.
	 *
	 * The function takes into consideration DISPLAYTITLEs and language
	 * conversion; when converting the title, this function ensures that
	 * only the "realtitle" (i.e. the part after the prefix) is converted,
	 * and not the prefix as well.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 * @return void
	 */
	public function onBeforePageDisplay( $out, $skin ): void {
		$prefix = self::analyzePrefix( $out->getTitle() );
		$action = $out->getContext()->getActionName();

		if ( !$prefix['error'] && $prefix['realtitle'] && $action === 'view' ) {
			$service = MediaWikiServices::getInstance();
			$displayTitle = $out->getDisplayTitle();
			$languageConverter = $service->getLanguageConverterFactory()
				->getLanguageConverter( $out->getTitle()->getPageLanguage() );
			$convertedTitle = $languageConverter->convert( $prefix['realtitle'] );

			// Change the page title (i.e. what's inside <h1> tags) according
			// to our formatting (see self::generatHtmlTitle() above)
			$title = self::generateHtmlTitle(
				$out->getTitle()->getNsText(),
				$prefix['prefix'],
				$convertedTitle,
				$displayTitle
			);
			$out->setPageTitle( $title );

			// Set the page's <title> element to the prefixless version of the
			// page name, but only in the main namespace.
			$namespace = $out->getTitle()->getNamespace();

			if ( $namespace === 0 ) {
				$titleElementText = $out->msg( 'wminc-title-element' )
					->params( $convertedTitle, $prefix['prefix'] )
					->text();
				$pageTitleMsg = $out->msg( 'pagetitle' )
					->params( $titleElementText )
					->text();
				$out->setHTMLTitle( $pageTitleMsg );
			}
		}
	}
}

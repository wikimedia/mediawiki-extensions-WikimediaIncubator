<?php
/**
 * Main class of the WikimediaIncubator extension.
 * Implement test wiki preference, magic word and prefix check on edit page,
 * and contains general functions for other classes.
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

use MediaWiki\MediaWikiServices;
use MediaWiki\User\UserIdentity;

class WikimediaIncubator {
	// Used in places that expect the name of a project when no
	// project has been selected.
	private const NO_PROJECT_SELECTED = 'none';

	/**
	 * Add default preference
	 * @param array &$defOpt
	 * @return true
	 */
	public static function onUserGetDefaultOptions( &$defOpt ) {
		global $wmincPref;

		$defOpt[$wmincPref . '-project'] = self::NO_PROJECT_SELECTED;

		return true;
	}

	/**
	 * Add preferences
	 * @param User $user
	 * @param array &$preferences
	 * @return true
	 */
	public static function onGetPreferences( $user, &$preferences ) {
		global $wmincPref, $wmincProjects, $wmincProjectSite, $wmincLangCodeLength;

		$preferences['language']['help-message'] = 'wminc-prefinfo-language';

		$prefinsert = [
			$wmincPref . '-project' => [
				'type' => 'select',
				'options' =>
					[ wfMessage( 'wminc-testwiki-none' )->plain() => self::NO_PROJECT_SELECTED ] +
					array_flip( $wmincProjects ) +
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
				'filter-callback' => [ 'WikimediaIncubator', 'filterCodePreference' ],
			],
		];

		$preferences = wfArrayInsertAfter( $preferences, $prefinsert, 'language' );

		return true;
	}

	/**
	 * Add a datalist with languages in MediaWiki,
	 * to suggest common language codes
	 * @return string HTML
	 */
	private static function getTestWikiLanguages() {
		$list = Language::fetchLanguageNames( null, 'all' );
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
	 * @param string $input
	 * @return string|true
	 */
	public static function filterCodePreference( $input ) {
		return trim( strtolower( $input ) );
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
			// @phan-suppress-next-line PhanPossiblyUndeclaredVariable
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
		global $wmincProjects, $wmincSisterProjects;
		$listProjects = array_map( [ __CLASS__, 'preg_quote_slash' ], array_keys( $wmincProjects ) );
		if ( $allowSister && is_array( $wmincSisterProjects ) ) {
			# join the project codes with those of the sister projects
			$listSister = array_map( [ __CLASS__, 'preg_quote_slash' ], array_keys( $wmincSisterProjects ) );
			$listProjects = array_merge( $listProjects, $listSister );
		}
		$listProjects = implode( '|', $listProjects );
		if ( !preg_match( '/^W[' . $listProjects . ']\/[a-z-]+' .
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
		global $wmincPref, $wmincProjects, $wmincSisterProjects;
		$url = self::getUrlParam();
		if ( $project ) {
			$r = $project; # Precedence to given value
		} elseif ( $url ) {
			$r = $url['project']; # Otherwise URL &testwiki= if set
		} else {
			$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
			$r = $userOptionsLookup->getOption( $user, $wmincPref . '-project' ); # Defaults to preference
		}
		$projects = $includeSister ? array_merge( $wmincProjects, $wmincSisterProjects ) : $wmincProjects;
		if ( array_key_exists( $r, $projects ) ) {
			# If a code is given, return what is wanted
			return $returnName ? $projects[$r] : $r;
		} elseif ( array_search( $r, $projects ) ) {
			# If a name is given, return what is wanted
			return $returnName ? $r : array_search( $r, $projects );
		}
		# Unknown code or name given -> false
		return false;
	}

	/**
	 * Returns a simple boolean based on getProject()
	 * @param User $user
	 * @param string $project
	 * @param bool $returnName
	 * @param bool $includeSister
	 * @return bool
	 */
	public static function isContentProject(
		User $user,
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
		global $wmincSisterProjects;
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
		$sister = $allowSister && isset( $wmincSisterProjects[$projectvalue] );
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
	 * @return Title
	 */
	private static function displayPrefixedTitle( $title, $ns = 0 ) {
		global $wgLang, $wmincTestWikiNamespaces;
		// @phan-suppress-next-line PhanPossiblyUndeclaredVariable
		if ( in_array( $ns, $wmincTestWikiNamespaces ) ) {
			/* Standard namespace as defined by
			* $wmincTestWikiNamespaces, so use format:
			* TITLE + NS => NS:Wx/xxx/TITLE
			*/
			$title = Title::makeTitleSafe( $ns, self::displayPrefix() . '/' . $title );
		} else {
			/* Non-standard namespace, so use format:
			* TITLE + NS => Wx/xxx/NS:TITLE
			* (with localized namespace name)
			*/
			$title = Title::makeTitleSafe( 0, self::displayPrefix() . '/' .
				$wgLang->getNsText( $ns ) . ':' . $title );
		}
		return $title;
	}

	public static function magicWordVariable( &$magicWords ) {
		$magicWords[] = 'usertestwiki';
		return true;
	}

	public static function magicWordValue( Parser $parser, &$cache, $magicWordId, &$ret ) {
		if ( $magicWordId === 'usertestwiki' ) {
			$p = self::displayPrefix();
			$ret = $cache[$magicWordId] = $p ?: self::NO_PROJECT_SELECTED;
		}
		return true;
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
			// @phan-suppress-previous-line PhanPossiblyUndeclaredVariable
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
	public static function onGetUserPermissionsErrors( $title, $user, $action, &$result ) {
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

	public static function onMovePageIsValidMove( Title $oldTitle, Title $newTitle, Status $status ) {
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
	public static function efLoadViewUserLangLink( $id, $nt, array &$links, SpecialPage $sp ) {
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
		global $wmincProjectDatabases, $wgConf;
		$wgConf->loadFullData();
		$lang = strtolower( $lang );
		$langHyphen = str_replace( '_', '-', $lang );
		$langUnderscore = str_replace( '-', '_', $lang );
		$projectName = self::getProject( $user, $project, true, true );
		$projectCode = self::getProject( $user, $project, false, true );
		if ( !$projectCode ) {
			global $wmincMultilingualProjects;
			// @phan-suppress-next-line PhanPossiblyUndeclaredVariable
			$projectCode = array_search( $project, $wmincMultilingualProjects );
		}
		$site = strtolower( $projectName );
		$params = [
			'lang' => $langHyphen,
			'site' => $site,
		];
		$dbSuffix = $wmincProjectDatabases[$projectCode] ?? $site;
		return $wgConf->get( $setting, $langUnderscore . $dbSuffix, $dbSuffix, $params );
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
		global $wmincProjectDatabases;
		if ( !is_array( $wmincProjectDatabases ) ) {
			return false; # We don't know the databases
		}
		return true; # Should work now
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
		global $wmincProjectDatabases, $wgDummyLanguageCodes;
		$dbLang = str_replace( '-', '_', $prefix['lang'] );
		$project = $prefix['project'];
		$dbProject = $wmincProjectDatabases[$project] ?? $project;
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
	public static function onShowMissingArticle( $article ) {
		$title = $article->getTitle();
		$prefix = self::analyzePrefix( $title, true /* only info pages */,
			true /* also sister projects */ );
		if ( !$prefix['error'] ) {
			self::onShowMissingArticleForInfoPages( $article, $prefix );
			return true;
		}

		$out = $article->getContext()->getOutput();
		global $wmincSisterProjects;
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
		} elseif ( array_key_exists( $p, $wmincSisterProjects ) ) {
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

	public static function onParserFirstCallInit( Parser $parser ) {
		$parser->setFunctionHook( 'infopage', 'WikimediaIncubator::renderParserFunction' );
		return true;
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
	 * @return true
	 */
	public static function onEditFormPreloadText( &$text, Title $title ) {
		$prefix = self::analyzePrefix( $title, true /* only info page */,
			false /* no sister projects */ );
		if ( !$prefix['error'] ) {
			$text = wfMessage( 'wminc-infopage-prefill', $prefix['prefix'] )->plain();
		}
		return true;
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
	 * @param string $page
	 * @param Title $title
	 * @param User $user
	 * @param WebRequest $request
	 * @return bool
	 */
	public static function onMediaWikiPerformAction( $output, $page, $title, $user, $request ) {
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
	 * @return bool
	 */
	public static function onTitleIsAlwaysKnown( $title, &$isKnown ) {
		$prefix = self::analyzePrefix( $title, true, true );
		if ( !$prefix['error'] ) {
			$isKnown = true;
		}
		return true;
	}

	/**
	 * Whether we should use the feature of custom logos per project
	 * @param Title $title Title object
	 * @return false|array Array from analyzePrefix()
	 */
	private static function shouldWeSetCustomLogo( $title ) {
		$prefix = self::analyzePrefix( $title );

		# Maybe do later something like if ( isContentProject() && 'recentchanges' ) { return true; }

		# return if the page does not have a valid prefix (info page is considered valid)
		if ( $prefix['error'] ) {
			return false;
		}
		# display the custom logo only if &testwiki=wx/xx or
		# the user's pref is set to the current test wiki
		if ( self::displayPrefix() != $prefix['prefix'] ) {
			return false;
		}
		return $prefix;
	}

	/**
	 * Display a different logo in current test wiki
	 * if it is set in MediaWiki:Incubator-logo-wx-xxx
	 * and if accessed through &testwiki=wx/xxx
	 * or if the user preference is set to wx/xxx
	 * @param OutputPage $out
	 * @return bool
	 */
	public static function fnTestWikiLogo( OutputPage $out ) {
		$setLogo = self::shouldWeSetCustomLogo( $out->getTitle() );
		if ( !$setLogo ) {
			return true;
		}
		// FIXME: This really shouldn't be writing to site config like this
		// (and certainly not through globals).
		global $wgLogos;
		$prefixForPageTitle = str_replace( '/', '-', strtolower( $setLogo['prefix'] ) );
		$logoMsg = wfMessage( 'Incubator-logo-' . $prefixForPageTitle )->inContentLanguage()->plain();
		$file = MediaWikiServices::getInstance()->getRepoGroup()
			->findFile( Title::newFromText( $logoMsg, NS_FILE ) );
		if ( $file ) {
			$thumb = $file->transform( [ 'width' => 135, 'height' => 135 ] );
			$wgLogos = [ '1x' => $thumb->getUrl() ];
		} else {
			# if MediaWiki:Incubator-logo-wx-xx(x) doesn't exist,
			# take a general, default logo for that project
			$wgLogos = [ '1x' => self::getConf( $out->getUser(), 'wgLogo', 'en', $setLogo['project'] ) ];
		}
		return true;
	}

	/**
	 * Make the page content language depend on the test wiki
	 * Info pages are in the user language, they're localised
	 * @param Title $title
	 * @param string|Language|StubUserLang &$pageLang
	 * @param Language|StubUserLang $userLang
	 */
	public static function onPageContentLanguage( $title, &$pageLang, $userLang ) {
		$prefix = self::analyzePrefix( $title, /* onlyInfoPage*/ false );
		if ( !$prefix['error'] ) {
			$pageLang = self::validatePrefix( $title, true ) ?
				$userLang : Language::factory( $prefix['lang'] );
		}
	}

	/**
	 * Search: Adapt the default message to show a more descriptive one,
	 * along with an adapted link.
	 * @param Title $title
	 * @param array &$params
	 * @return true
	 */
	public static function onSpecialSearchCreateLink( $title, &$params ) {
		if ( $title->isKnown() ) {
			return true;
		}
		global $wmincProjectSite, $wmincTestWikiNamespaces;
		$prefix = self::displayPrefix();

		$newNs = $title->getNamespace();
		$newTitle = $title->getText();
		$newTitleData = self::analyzePrefix( $newTitle, false, true );
		// @phan-suppress-next-line PhanPossiblyUndeclaredVariable
		if ( !in_array( $title->getNamespace(), $wmincTestWikiNamespaces ) ) {
			# namespace not affected by the prefix system: show normal msg
			return true;
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
			return true;
		} elseif ( $newTitleData['error'] ) {
			# only add a prefix to the title if there is no prefix
			# ('error' by analyzePrefix)
			$newTitle = $prefix . '/' . $newTitle;
		}

		$t = Title::newFromText( $newTitle, $newNs );
		if ( $t->isKnown() ) {
			# use the default message if the suggested title exists
			$params[0] = 'searchmenu-exists';
			$params[1] = wfEscapeWikiText( $t->getPrefixedText() );
			return true;
		}
		$params[] = wfEscapeWikiText( $t->getPrefixedText() );
		$params[0] = $prefix && $prefix != self::NO_PROJECT_SELECTED
			? 'wminc-search-nocreate-suggest' : 'wminc-search-nocreate-nopref';
		return true;
	}

	/**
	 * Search: Add an input form to enter a test wiki prefix.
	 * @param array &$showSections
	 * @param string $term
	 * @param array $opts
	 * @return true
	 */
	public static function onSpecialSearchPowerBox( &$showSections, $term, $opts ) {
		$showSections['testwiki'] = Xml::label( wfMessage( 'wminc-testwiki' )->text(), 'testwiki' )
			. ' ' . Xml::input( 'testwiki', 20, self::displayPrefix(), [ 'id' => 'testwiki' ] );
		return true;
	}

	/**
	 * Search: Search by default in the test wiki of the user's preference (or url &testwiki).
	 * @param SpecialSearch $search
	 * @param string $profile
	 * @param SearchEngine $engine
	 * @return true
	 */
	public static function onSpecialSearchSetupEngine( $search, $profile, $engine ) {
		if ( !$engine->prefix ) {
			$engine->prefix = self::selectedIncubationWiki() ?? '';
		}
		return true;
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
}

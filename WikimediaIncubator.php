<?php
if ( !defined( 'MEDIAWIKI' ) ) { die( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" ); }
/**
 * An extension that adds features (such as a preference, recent changes, ...)
 * for a test wiki system (i.e. incubated wikis inside one actual wiki)
 * mainly intended for the Wikimedia Incubator
 *
 * The development of this extension is closely tied to MediaWiki trunk.
 * It may not work with previous MediaWiki versions.
 *
 * @file
 * @ingroup Extensions
 * @author Robin Pepermans (SPQRobin)
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Wikimedia Incubator',
	'author' => array( 'SPQRobin', 'Hydriz' ),
	'version' => '5.3.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:WikimediaIncubator',
	'descriptionmsg' => 'wminc-desc',
);

/* General (globals and/or configuration) */
$wmincPref = 'incubatortestwiki'; // Name of the preference
$dir = __DIR__ . '/';

# only one-letter codes can be used for projects
$wmincProjects = array(
	'p' => 'Wikipedia',
	'b' => 'Wikibooks',
	't' => 'Wiktionary',
	'q' => 'Wikiquote',
	'n' => 'Wikinews',
	'y' => 'Wikivoyage',
);
# Sister projects is here defined as projects that are not on Incubator
$wmincSisterProjects = array(
	's' => 'Wikisource',
	'v' => 'Wikiversity',
);
$wmincMultilingualProjects = array(
	'meta' => 'Meta-Wiki',
	'commons' => 'Wikimedia Commons',
	'species' => 'Wikispecies',
	'mediawiki' => 'MediaWiki',
	'wikidata' => 'Wikidata',
);
$wmincProjectSite = array(
	'name' => 'Incubator',
	'short' => 'inc',
);
$wmincTestWikiNamespaces = array(
	NS_MAIN, NS_TALK,
	NS_TEMPLATE, NS_TEMPLATE_TALK,
	NS_CATEGORY, NS_CATEGORY_TALK,
	828, 829, //NS_MODULE, NS_MODULE_TALK,
);
$wmincLangCodeLength = 12; // can be changed if needed (depends on policy)
// Pseudo category namespaces like "Category:Maintenance:Delete", for easy whitelisting and structure
$wmincPseudoCategoryNSes = array(
	'Incubator', 'Help', 'Users', 'Maintenance', 'Files',
);

/* Test wiki admin user group */
$wgGroupPermissions['test-sysop']['delete'] = true;
$wgGroupPermissions['test-sysop']['undelete'] = true;
$wgGroupPermissions['test-sysop']['deletedhistory'] = true;
$wgGroupPermissions['test-sysop']['block'] = true;
$wgGroupPermissions['test-sysop']['blockemail'] = true;
$wgGroupPermissions['test-sysop']['rollback'] = true;
$wgGroupPermissions['test-sysop']['suppressredirect'] = true;
$wgGroupPermissions['test-sysop']['autopatrol'] = true;
$wgAddGroups['bureaucrat'][] = 'test-sysop';
$wgRemoveGroups['bureaucrat'][] = 'test-sysop';

$wgMessagesDirs['WikimediaIncubator'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['WikimediaIncubator'] = $dir . 'WikimediaIncubator.i18n.php';
$wgExtensionMessagesFiles['WikimediaIncubatorAlias'] = $dir . 'WikimediaIncubator.alias.php';
$wgExtensionMessagesFiles['WikimediaIncubatorMagic'] = $dir . 'WikimediaIncubator.i18n.magic.php';

/* Special:ViewUserLang */
$wgAutoloadClasses['SpecialViewUserLang'] = $dir . 'SpecialViewUserLang.php';
$wgSpecialPages['ViewUserLang'] = 'SpecialViewUserLang';
$wgSpecialPageGroups['ViewUserLang'] = 'users';
$wgAvailableRights[] = 'viewuserlang';
$wgHooks['ContributionsToolLinks'][] = 'WikimediaIncubator::efLoadViewUserLangLink';
$wgGroupPermissions['*']['viewuserlang'] = false;
$wgGroupPermissions['sysop']['viewuserlang'] = true;

/* TestWiki preference */
$wgAutoloadClasses['WikimediaIncubator'] = $dir . 'WikimediaIncubator.class.php';
$wgHooks['GetPreferences'][] = 'WikimediaIncubator::onGetPreferences';
$wgHooks['UserGetDefaultOptions'][] = 'WikimediaIncubator::onUserGetDefaultOptions';
$wgHooks['MagicWordwgVariableIDs'][] = 'WikimediaIncubator::magicWordVariable';
$wgHooks['ParserGetVariableValueSwitch'][] = 'WikimediaIncubator::magicWordValue';

/* Special:MyMainPage (depending on your test wiki preference) */
$wgAutoloadClasses['SpecialMyMainPage'] = $dir . 'SpecialMyMainPage.php';
$wgSpecialPages['MyMainPage'] = 'SpecialMyMainPage';

/* Create/move page permissions */
$wgHooks['getUserPermissionsErrors'][] = 'WikimediaIncubator::onGetUserPermissionsErrors';
$wgHooks['AbortMove'][] = 'WikimediaIncubator::checkPrefixMovePermissions';

/* Recent Changes */
$wgAutoloadClasses['TestWikiRC'] = $dir . 'TestWikiRC.php';
$wgHooks['SpecialRecentChangesQuery'][] = 'TestWikiRC::onRcQuery';
$wgHooks['SpecialRecentChangesPanel'][] = 'TestWikiRC::onRcForm';

/* Automatic pref on account creation */
$wgAutoloadClasses['AutoTestWiki'] = $dir . 'CreateAccountTestWiki.php';
$wgHooks['UserCreateForm'][] = 'AutoTestWiki::onUserCreateForm';
$wgHooks['AddNewAccount'][] = 'AutoTestWiki::onAddNewAccount';

/* Random page by test */
$wgAutoloadClasses['SpecialRandomByTest'] = $dir . 'SpecialRandomByTest.php';
$wgSpecialPages['RandomByTest'] = 'SpecialRandomByTest';

/* support for automatic checking in a list of databases if a wiki exists */
$wmincExistingWikis = $wgLocalDatabases;
/* Stupid "wiki" referring to "wikipedia" in WMF config */
$wmincProjectDatabases = array(
	'p' => 'wiki',
	'b' => 'wikibooks',
	't' => 'wiktionary',
	'q' => 'wikiquote',
	'n' => 'wikinews',
	's' => 'wikisource',
	'v' => 'wikiversity',
	'y' => 'wikivoyage',
);
# set this to an array or file of closed wikis (like SiteMatrix $wgSiteMatrixClosedSites)
$wmincClosedWikis = false;

/* Wx/xx[x] info page */
$wgAutoloadClasses['InfoPage'] = $dir . 'InfoPage.php';
$wgHooks['ShowMissingArticle'][] = 'WikimediaIncubator::onShowMissingArticle';
$wgHooks['EditFormPreloadText'][] = 'WikimediaIncubator::onEditFormPreloadText';
$wgHooks['MediaWikiPerformAction'][] = 'WikimediaIncubator::onMediaWikiPerformAction';
$wgHooks['TitleIsAlwaysKnown'][] = 'WikimediaIncubator::onTitleIsAlwaysKnown';
$wgHooks['ParserFirstCallInit'][] = 'WikimediaIncubator::onParserFirstCallInit';

$wgResourceModules['WikimediaIncubator.InfoPage'] = array(
	'styles' => 'InfoPage.css',
	'localBasePath' => dirname(__FILE__),
	'remoteExtPath' => 'WikimediaIncubator',
);

/* Possibility to set a logo per test wiki */
$wgHooks['BeforePageDisplay'][] = 'WikimediaIncubator::fnTestWikiLogo';

/* Set page content language depending on the prefix */
$wgHooks['PageContentLanguage'][] = 'WikimediaIncubator::onPageContentLanguage';

/* List of users */
$wgAutoloadClasses['ListUsersTestWiki'] = $dir . 'ListUsersTestWiki.php';
$wgHooks['SpecialListusersHeaderForm'][] = 'ListUsersTestWiki::onSpecialListusersHeaderForm';
$wgHooks['SpecialListusersQueryInfo'][] = 'ListUsersTestWiki::onSpecialListusersQueryInfo';
$wgHooks['SpecialListusersHeader'][] = 'ListUsersTestWiki::onSpecialListusersHeader';

/* Search in test wiki */
$wgHooks['SpecialSearchCreateLink'][] = 'WikimediaIncubator::onSpecialSearchCreateLink';
$wgHooks['SpecialSearchPowerBox'][] = 'WikimediaIncubator::onSpecialSearchPowerBox';
$wgHooks['SpecialSearchSetupEngine'][] = 'WikimediaIncubator::onSpecialSearchSetupEngine';

/* Search for a wiki in a language */
$wgAutoloadClasses['SpecialSearchWiki'] = $dir . 'SpecialSearchWiki.php';
$wgSpecialPages['SearchWiki'] = 'SpecialSearchWiki';

/* IncubatorFirstSteps */
$wgAutoloadClasses['SpecialIncubatorFirstSteps'] = $dir . 'SpecialIncubatorFirstSteps.php';
$wgSpecialPages['IncubatorFirstSteps'] = 'SpecialIncubatorFirstSteps';

/* Tests */
$wgHooks['UnitTestsList'][] = 'WikimediaIncubator::onUnitTestsList';

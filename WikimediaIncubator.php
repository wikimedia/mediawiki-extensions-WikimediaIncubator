<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
}
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

$wgExtensionCredits['other'][] = [
	'path' => __FILE__,
	'name' => 'Wikimedia Incubator',
	'author' => [ 'SPQRobin', 'Hydriz' ],
	'version' => '5.3.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:WikimediaIncubator',
	'descriptionmsg' => 'wminc-desc',
];

/* General (globals and/or configuration) */
$wmincPref = 'incubatortestwiki'; // Name of the preference

# only one-letter codes can be used for projects
$wmincProjects = [
	'p' => 'Wikipedia',
	'b' => 'Wikibooks',
	't' => 'Wiktionary',
	'q' => 'Wikiquote',
	'n' => 'Wikinews',
	'y' => 'Wikivoyage',
];
# Sister projects is here defined as projects that are not on Incubator
$wmincSisterProjects = [
	's' => 'Wikisource',
	'v' => 'Wikiversity',
];
$wmincMultilingualProjects = [
	'meta' => 'Meta-Wiki',
	'commons' => 'Wikimedia Commons',
	'species' => 'Wikispecies',
	'mediawiki' => 'MediaWiki',
	'wikidata' => 'Wikidata',
];
$wmincProjectSite = [
	'name' => 'Incubator',
	'short' => 'inc',
];
$wmincTestWikiNamespaces = [
	NS_MAIN, NS_TALK,
	NS_TEMPLATE, NS_TEMPLATE_TALK,
	NS_CATEGORY, NS_CATEGORY_TALK,
	828, 829, // NS_MODULE, NS_MODULE_TALK,
];
$wmincLangCodeLength = 12; // can be changed if needed (depends on policy)
// Pseudo category namespaces like "Category:Maintenance:Delete", for easy whitelisting and structure
$wmincPseudoCategoryNSes = [
	'Incubator', 'Help', 'Users', 'Maintenance', 'Files',
];

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
$wgExtensionMessagesFiles['WikimediaIncubatorAlias'] = __DIR__ . '/WikimediaIncubator.alias.php';
$wgExtensionMessagesFiles['WikimediaIncubatorMagic'] = __DIR__ . '/WikimediaIncubator.i18n.magic.php';

/* Special:ViewUserLang */
$wgAutoloadClasses['SpecialViewUserLang'] = __DIR__ . '/SpecialViewUserLang.php';
$wgSpecialPages['ViewUserLang'] = 'SpecialViewUserLang';
$wgAvailableRights[] = 'viewuserlang';
$wgHooks['ContributionsToolLinks'][] = 'WikimediaIncubator::efLoadViewUserLangLink';
$wgGroupPermissions['*']['viewuserlang'] = false;
$wgGroupPermissions['sysop']['viewuserlang'] = true;

/* TestWiki preference */
$wgAutoloadClasses['WikimediaIncubator'] = __DIR__ . '/WikimediaIncubator.class.php';
$wgHooks['GetPreferences'][] = 'WikimediaIncubator::onGetPreferences';
$wgHooks['UserGetDefaultOptions'][] = 'WikimediaIncubator::onUserGetDefaultOptions';
$wgHooks['MagicWordwgVariableIDs'][] = 'WikimediaIncubator::magicWordVariable';
$wgHooks['ParserGetVariableValueSwitch'][] = 'WikimediaIncubator::magicWordValue';

/* Special:MyMainPage (depending on your test wiki preference) */
$wgAutoloadClasses['SpecialMyMainPage'] = __DIR__ . '/SpecialMyMainPage.php';
$wgSpecialPages['MyMainPage'] = 'SpecialMyMainPage';

/* Create/move page permissions */
$wgHooks['getUserPermissionsErrors'][] = 'WikimediaIncubator::onGetUserPermissionsErrors';
$wgHooks['MovePageIsValidMove'][] = 'WikimediaIncubator::onMovePageIsValidMove';
$wgHooks['AbortMove'][] = 'WikimediaIncubator::checkPrefixMovePermissions';

/* Recent Changes */
$wgAutoloadClasses['TestWikiRC'] = __DIR__ . '/TestWikiRC.php';
$wgHooks['ChangesListSpecialPageQuery'][] = 'TestWikiRC::onRcQuery';
$wgHooks['SpecialRecentChangesPanel'][] = 'TestWikiRC::onRcForm';

/* Automatic pref on account creation */
$wgAutoloadClasses['AutoTestWiki'] = __DIR__ . '/CreateAccountTestWiki.php';
$wgHooks['UserCreateForm'][] = 'AutoTestWiki::onUserCreateForm';
$wgHooks['AddNewAccount'][] = 'AutoTestWiki::onAddNewAccount';

/* Random page by test */
$wgAutoloadClasses['SpecialRandomByTest'] = __DIR__ . '/SpecialRandomByTest.php';
$wgSpecialPages['RandomByTest'] = 'SpecialRandomByTest';

/* support for automatic checking in a list of databases if a wiki exists */
$wmincExistingWikis = $wgLocalDatabases;
/* Stupid "wiki" referring to "wikipedia" in WMF config */
$wmincProjectDatabases = [
	'p' => 'wiki',
	'b' => 'wikibooks',
	't' => 'wiktionary',
	'q' => 'wikiquote',
	'n' => 'wikinews',
	's' => 'wikisource',
	'v' => 'wikiversity',
	'y' => 'wikivoyage',
];
# set this to an array or file of closed wikis (like SiteMatrix $wgSiteMatrixClosedSites)
$wmincClosedWikis = false;

/* Wx/xx[x] info page */
$wgAutoloadClasses['InfoPage'] = __DIR__ . '/InfoPage.php';
$wgHooks['ShowMissingArticle'][] = 'WikimediaIncubator::onShowMissingArticle';
$wgHooks['EditFormPreloadText'][] = 'WikimediaIncubator::onEditFormPreloadText';
$wgHooks['MediaWikiPerformAction'][] = 'WikimediaIncubator::onMediaWikiPerformAction';
$wgHooks['TitleIsAlwaysKnown'][] = 'WikimediaIncubator::onTitleIsAlwaysKnown';
$wgHooks['ParserFirstCallInit'][] = 'WikimediaIncubator::onParserFirstCallInit';

$wgResourceModules['WikimediaIncubator.InfoPage'] = [
	'position' => 'top',
	'styles' => 'InfoPage.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'WikimediaIncubator',
];

/* Possibility to set a logo per test wiki */
$wgHooks['BeforePageDisplay'][] = 'WikimediaIncubator::fnTestWikiLogo';

/* Set page content language depending on the prefix */
$wgHooks['PageContentLanguage'][] = 'WikimediaIncubator::onPageContentLanguage';

/* List of users */
$wgAutoloadClasses['ListUsersTestWiki'] = __DIR__ . '/ListUsersTestWiki.php';
$wgHooks['SpecialListusersHeaderForm'][] = 'ListUsersTestWiki::onSpecialListusersHeaderForm';
$wgHooks['SpecialListusersQueryInfo'][] = 'ListUsersTestWiki::onSpecialListusersQueryInfo';
$wgHooks['SpecialListusersHeader'][] = 'ListUsersTestWiki::onSpecialListusersHeader';

/* Search in test wiki */
$wgHooks['SpecialSearchCreateLink'][] = 'WikimediaIncubator::onSpecialSearchCreateLink';
$wgHooks['SpecialSearchPowerBox'][] = 'WikimediaIncubator::onSpecialSearchPowerBox';
$wgHooks['SpecialSearchSetupEngine'][] = 'WikimediaIncubator::onSpecialSearchSetupEngine';

/* Search for a wiki in a language */
$wgAutoloadClasses['SpecialSearchWiki'] = __DIR__ . '/SpecialSearchWiki.php';
$wgSpecialPages['SearchWiki'] = 'SpecialSearchWiki';

/* IncubatorFirstSteps */
$wgAutoloadClasses['SpecialIncubatorFirstSteps'] = __DIR__ . '/SpecialIncubatorFirstSteps.php';
$wgSpecialPages['IncubatorFirstSteps'] = 'SpecialIncubatorFirstSteps';

/* Tests */
$wgHooks['UnitTestsList'][] = 'WikimediaIncubator::onUnitTestsList';

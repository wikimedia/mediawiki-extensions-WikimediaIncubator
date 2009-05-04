<?php
if ( !defined( 'MEDIAWIKI' ) ) { die( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" ); }
/**
 * An extension that adds test wiki features (such as a preference, recent changes for a test wiki, ...) specifically for the Wikimedia Incubator
 *
 * @addtogroup Extensions
 */

$wgExtensionCredits['other'][] = array(
	'name' => 'Wikimedia Incubator',
	'author' => 'SPQRobin',
	'version' => '2.1.1',
	'url' => 'http://www.mediawiki.org/wiki/Extension:WikimediaIncubator',
	'description' => 'Test wiki features for Wikimedia Incubator',
	'descriptionmsg' => 'wminc-desc',
);

/* Config */
$wmincEnableAutoTestWiki = false;
$wmincPref = 'incubatortestwiki'; /* Name of the preference */
$wgGroupPermissions['*']['viewuserlang'] = false;
$wgGroupPermissions['sysop']['viewuserlang'] = true;

/* General */
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['WikimediaIncubator'] = $dir . 'WikimediaIncubator.i18n.php';

/* Special:ViewUserLang */
$wgExtensionAliasesFiles['ViewUserLang'] = $dir . 'WikimediaIncubator.alias.php';
$wgAutoloadClasses['SpecialViewUserLang'] = $dir . 'SpecialViewUserLang.php';
$wgSpecialPages['ViewUserLang'] = 'SpecialViewUserLang';
$wgSpecialPageGroups['ViewUserLang'] = 'users';
$wgAvailableRights[] = 'viewuserlang';
$wgHooks['ContributionsToolLinks'][] = 'efLoadViewUserLangLink';

/* TestWiki preference */
$wgAutoloadClasses['IncubatorTest'] = $dir . 'IncubatorTest.php';
$wgHooks['GetPreferences'][] = 'IncubatorTest::AddPreferences';
$wgHooks['MagicWordwgVariableIDs'][] = 'IncubatorTest::MagicWordVariable';
$wgHooks['LanguageGetMagic'][] = 'IncubatorTest::MagicWord';
$wgHooks['ParserGetVariableValueSwitch'][] = 'IncubatorTest::MagicWordValue';

/* Edit page */
$wgHooks['EditPage::showEditForm:initial'][] = 'IncubatorTest::EditPageCheckPrefix';

/* Recent Changes */
$wgAutoloadClasses['TestWikiRC'] = $dir . 'TestWikiRC.php';
$wgHooks['SpecialRecentChangesQuery'][] = 'TestWikiRC::RcQuery';
$wgHooks['SpecialRecentChangesPanel'][] = 'TestWikiRC::RcForm';

/* Automatic pref on account creation */
if ( $wmincEnableAutoTestWiki == true ) {
	$wgAutoloadClasses['AutoTestWiki'] = $dir . 'CreateAccountTestWiki.php';
	$wgHooks['UserCreateForm'][] = 'AutoTestWiki::UserCreateForm';
	$wgHooks['AddNewAccount'][] = 'AutoTestWiki::AddNewAccount';
}

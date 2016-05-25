<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'WikimediaIncubator' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['WikimediaIncubator'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['WikimediaIncubatorAlias'] = __DIR__ . '/WikimediaIncubator.alias.php';
	$wgExtensionMessagesFiles['WikimediaIncubatorMagic'] = __DIR__ . '/WikimediaIncubator.i18n.magic.php';
	/* wfWarn(
		'Deprecated PHP entry point used for WikimediaIncubator extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return;
} else {
	die( 'This version of the WikimediaIncubator extension requires MediaWiki 1.25+' );
}

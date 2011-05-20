<?php
/*
* If URL parameters "testwikiproject" and "testwikicode" are set
* on account creation form, set them as user preference.
* This can be used to work with links on other sites
* referring to the account creation form so users don't *have* to
* change their preferences (automatically is always better :p)
*/
class AutoTestWiki {
	public static function onUserCreateForm( $template ) {
		global $wgRequest, $wmincProjects;
		$projectvalue = strtolower( $wgRequest->getVal( 'testwikiproject', '' ) );
		$codevalue = strtolower( $wgRequest->getVal( 'testwikicode', '' ) );
		if ( IncubatorTest::validateLanguageCode( $codevalue ) && in_array( $projectvalue, (array)$wmincProjects ) ) {
			$template->set( 'header',
				Html::hidden('testwiki-project', $projectvalue).
				Html::hidden('testwiki-code', $codevalue)
			);
		}
		return true;
	}

	public static function onAddNewAccount( $user ) {
		global $wgRequest, $wmincProjects, $wmincPref;
		$projectvalue = $wgRequest->getVal( 'testwiki-project' );
		$codevalue = $wgRequest->getVal( 'testwiki-code' );
		if ( IncubatorTest::validateLanguageCode( $codevalue ) && in_array( $projectvalue, (array)$wmincProjects ) ) {
			$user->setOption( $wmincPref . '-project', $projectvalue );
			$user->setOption( $wmincPref . '-code', $codevalue );
			$user->saveSettings();
		}
		return true;
	}
}

<?php
/*
* If URL parameters "testwikiproject" and "testwikicode" are set
* on account creation form, set them as user preference.
* This can be used to work with links on other sites
* referring to the account creation form so users don't *have* to
* change their preferences (automatically is always better :p)
*/
class AutoTestWiki {
	function onUserCreateForm( $template ) {
		global $wgRequest, $wmincProjects;
		$projectvalue = strtolower( $wgRequest->getVal( 'testwikiproject', '' ) );
		$codevalue = strtolower( $wgRequest->getVal( 'testwikicode', '' ) );
		if ( preg_match( '/[a-z][a-z][a-z]?/', $codevalue ) && in_array( $projectvalue, (array)$wmincProjects ) ) {
			$template->set( 'header',
				Html::hidden('testwiki-project', $projectvalue).
				Html::hidden('testwiki-code', $codevalue)
			);
		}
		return true;
	}

	function onAddNewAccount( $user ) {
		global $wgRequest, $wmincPref;
		$getprojectvalue = $wgRequest->getVal( 'testwiki-project' );
		$getcodevalue = $wgRequest->getVal( 'testwiki-code' );
		if ( $getprojectvalue && $getcodevalue ) {
			$user->setOption( $wmincPref . '-project', $getprojectvalue );
			$user->setOption( $wmincPref . '-code', $getcodevalue );
			$user->saveSettings();
		}
		return true;
	}
}

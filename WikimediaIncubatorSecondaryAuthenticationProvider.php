<?php

use MediaWiki\Auth\AuthManager;
use MediaWiki\Auth\AbstractSecondaryAuthenticationProvider;
use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Auth\AuthenticationResponse;

/**
 * If URL parameters "testwikiproject" and "testwikicode" are set
 * on account creation form, set them as user preference.
 * This can be used to work with links on other sites
 * referring to the account creation form so users don't *have* to
 * change their preferences (automatically is always better :p)
 */
class WikimediaIncubatorSecondaryAuthenticationProvider
	extends AbstractSecondaryAuthenticationProvider
{

	/**
	 * @param array $params
	 */
	public function __construct( $params = [] ) {
	}

	public function getAuthenticationRequests( $action, array $options ) {
		if ( $action === AuthManager::ACTION_CREATE ) {
			return [ new WikimediaIncubatorAuthenticationRequest ];
		}

		return [];
	}

	public function beginSecondaryAuthentication( $user, array $reqs ) {
		return AuthenticationResponse::newAbstain();
	}

	public function beginSecondaryAccountCreation( $user, $creator, array $reqs ) {
		global $wmincPref;

		$req = AuthenticationRequest::getRequestByClass(
			$reqs, WikimediaIncubatorAuthenticationRequest::class
		);

		if ( $req ) {
			$user->setOption( $wmincPref . '-project', $req->testwikiproject );
			$user->setOption( $wmincPref . '-code', $req->testwikicode );
			$user->saveSettings();
		}

		return AuthenticationResponse::newPass();
	}
}

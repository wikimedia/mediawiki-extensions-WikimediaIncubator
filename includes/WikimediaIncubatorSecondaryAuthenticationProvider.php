<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Auth\AbstractSecondaryAuthenticationProvider;
use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Auth\AuthenticationResponse;
use MediaWiki\Auth\AuthManager;
use MediaWiki\User\Options\UserOptionsManager;

/**
 * If URL parameters "testwikiproject" and "testwikicode" are set
 * on account creation form, set them as user preference.
 * This can be used to work with links on other sites
 * referring to the account creation form so users don't *have* to
 * change their preferences (automatically is always better :p)
 */
class WikimediaIncubatorSecondaryAuthenticationProvider
	extends AbstractSecondaryAuthenticationProvider {

	/** @var UserOptionsManager */
	private $userOptionsManager;

	/**
	 * @param UserOptionsManager $userOptionsManager
	 * @param array $params
	 */
	public function __construct( UserOptionsManager $userOptionsManager, $params = [] ) {
		$this->userOptionsManager = $userOptionsManager;
	}

	/** @inheritDoc */
	public function getAuthenticationRequests( $action, array $options ) {
		if ( $action === AuthManager::ACTION_CREATE ) {
			return [ new WikimediaIncubatorAuthenticationRequest ];
		}

		return [];
	}

	/** @inheritDoc */
	public function beginSecondaryAuthentication( $user, array $reqs ) {
		return AuthenticationResponse::newAbstain();
	}

	/** @inheritDoc */
	public function beginSecondaryAccountCreation( $user, $creator, array $reqs ) {
		global $wmincPref;

		$req = AuthenticationRequest::getRequestByClass(
			$reqs, WikimediaIncubatorAuthenticationRequest::class
		);

		if ( $req ) {
			'@phan-var WikimediaIncubatorAuthenticationRequest $req';
			$this->userOptionsManager->setOption( $user, $wmincPref . '-project', $req->testwikiproject );
			$this->userOptionsManager->setOption( $user, $wmincPref . '-code', $req->testwikicode );
			$this->userOptionsManager->saveOptions( $user );
		}

		return AuthenticationResponse::newPass();
	}
}

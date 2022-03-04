<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Auth\AuthenticationRequest;
use RequestContext;

/**
 * An authentication request to grab the custom fields passed to the creation form.
 */
class WikimediaIncubatorAuthenticationRequest extends AuthenticationRequest {
	public $required = self::OPTIONAL;

	public $testwikiproject;
	public $testwikicode;

	/**
	 * @inheritDoc
	 */
	public function getFieldInfo() {
		$request = RequestContext::getMain()->getRequest();

		// Accessing $request for the defaults is a bit ugly, but it's what's
		// needed here.
		return [
			'testwikiproject' => [
				'type' => 'hidden',
				'value' => strtolower( $request->getVal( 'testwikiproject', '' ) ),
				'label' => wfMessage( 'wminc-testwiki' ),
				'help' => wfMessage( 'wminc-prefinfo-project' ),
			],
			'testwikicode' => [
				'type' => 'hidden',
				'value' => strtolower( $request->getVal( 'testwikicode', '' ) ),
				'label' => wfMessage( 'wminc-testwiki-code' ),
				'help' => wfMessage( 'wminc-prefinfo-code' ),
			],
		];
	}

	public function loadFromSubmission( array $data ) {
		global $wmincProjects;

		return parent::loadFromSubmission( $data ) &&
			WikimediaIncubator::validateLanguageCode( $this->testwikicode ) &&
			isset( $wmincProjects[$this->testwikiproject] );
	}
}

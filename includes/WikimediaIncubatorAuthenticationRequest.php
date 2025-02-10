<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Context\RequestContext;

/**
 * An authentication request to grab the custom fields passed to the creation form.
 */
class WikimediaIncubatorAuthenticationRequest extends AuthenticationRequest {
	/** @var int */
	public $required = self::OPTIONAL;
	/** @var string */
	public $testwikiproject;
	/** @var string */
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

	/** @inheritDoc */
	public function loadFromSubmission( array $data ) {
		global $wgWmincProjects;

		return parent::loadFromSubmission( $data ) &&
			WikimediaIncubator::validateLanguageCode( $this->testwikicode ) &&
			isset( $wgWmincProjects[$this->testwikiproject] );
	}
}

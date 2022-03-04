<?php

use MediaWiki\Extension\WikimediaIncubator\WikimediaIncubator;

class IncubatorUnitTests extends MediaWikiIntegrationTestCase {
	/**
	 * @covers \MediaWiki\Extension\WikimediaIncubator::validateLanguageCode
	 */
	public function testValidateLanguageCode() {
		$this->assertTrue( WikimediaIncubator::validateLanguageCode( 'aa' ),
			'Valid language code aa' );
		$this->assertFalse( WikimediaIncubator::validateLanguageCode( 'aaaa' ),
			'Invalid language code aaaa' );
	}

	/**
	 * @covers \MediaWiki\Extension\WikimediaIncubator::shouldWeShowUnprefixedError
	 */
	public function testShouldWeShowUnprefixedError() {
		$testPages = [
			'Bl/urb' => true,
			'Talk:Bl/urb' => true,
			'Template:Bl/urb' => true,
			'Wt/da/Test' => false,
			'File:Blurb.png' => false,
		];
		foreach ( $testPages as $testPage => $outcome ) {
			$title = Title::newFromText( $testPage );
			$function = $outcome ? 'assertTrue' : 'assertFalse';
			$this->$function(
				WikimediaIncubator::shouldWeShowUnprefixedError( $title ),
				$testPage . ' is ' . ( $outcome ? 'prefixed' : 'unprefixed' )
			);
		}
	}

	/**
	 * @covers \MediaWiki\Extension\WikimediaIncubator::onTitleIsAlwaysKnown
	 */
	public function testOnTitleIsAlwaysKnown() {
		# Assuming default configuration (Wikipedia = Wp; fictional Wz)
		$title = Title::newFromText( 'Wp/nl' );
		$this->assertTrue( $title->isKnown() );
		$title = Title::newFromText( 'Wz/nl' );
		$this->assertFalse( $title->isKnown() );
	}

	/**
	 * @covers \MediaWiki\Extension\WikimediaIncubator::onPageContentLanguage
	 */
	public function testOnPageContentLanguage() {
		$title = Title::newFromText( 'Wp/nl/Test' );
		$this->assertEquals( 'nl', $title->getPageLanguage()->getCode() );
		$title = Title::newFromText( 'Template:Wp/be-tarask/Test' );
		$this->assertEquals( 'be-tarask', $title->getPageLanguage()->getCode() );
		$title = Title::newFromText( 'Project:Wp/nl/Test' );
		$this->assertEquals( 'en', $title->getPageLanguage()->getCode() );
	}
}

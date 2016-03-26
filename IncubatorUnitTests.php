<?php

class IncubatorUnitTests extends MediaWikiTestCase {
	function testValidateLanguageCode() {
		$this->assertTrue( WikimediaIncubator::validateLanguageCode( 'aa' ),
			'Valid language code aa' );
		$this->assertFalse( WikimediaIncubator::validateLanguageCode( 'aaaa' ),
			'Invalid language code aaaa' );
	}

	function testShouldWeShowUnprefixedError() {
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

	function testOnTitleIsAlwaysKnown() {
		# Assuming default configuration (Wikipedia = Wp; fictional Wz)
		$title = Title::newFromText( 'Wp/nl' );
		$this->assertTrue( $title->isKnown() );
		$title = Title::newFromText( 'Wz/nl' );
		$this->assertFalse( $title->isKnown() );
	}

	function testOnPageContentLanguage() {
		$title = Title::newFromText( 'Wp/nl/Test' );
		$this->assertEquals( $title->getPageLanguage()->getCode(), 'nl' );
		$title = Title::newFromText( 'Template:Wp/be-tarask/Test' );
		$this->assertEquals( $title->getPageLanguage()->getCode(), 'be-tarask' );
		$title = Title::newFromText( 'Project:Wp/nl/Test' );
		$this->assertEquals( $title->getPageLanguage()->getCode(), 'en' );
	}
}

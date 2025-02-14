<?php

use MediaWiki\Extension\WikimediaIncubator\WikimediaIncubator;
use MediaWiki\Language\Language;
use MediaWiki\Languages\LanguageFactory;
use MediaWiki\Parser\ParserOptions;
use MediaWiki\Title\Title;

/**
 * @covers \MediaWiki\Extension\WikimediaIncubator\WikimediaIncubator
 * @group Database
 */
class IncubatorUnitTest extends MediaWikiLangTestCase {
	/**
	 * @before
	 */
	protected function userLangSetUp(): void {
		$this->setUserLang( 'de' );
	}

	public function testValidateLanguageCode() {
		$this->assertTrue( WikimediaIncubator::validateLanguageCode( 'aa' ),
			'Valid language code aa' );
		$this->assertFalse( WikimediaIncubator::validateLanguageCode( 'aaaa' ),
			'Invalid language code aaaa' );
	}

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

	public static function provideOnPageContentLanguage() {
		yield 'content under test prefix' => [ 'Wp/nl/Test', 'nl' ];
		yield 'template under test prefix' => [ 'Template:Wp/be-tarask/Test', 'be-tarask' ];
		yield 'unchanged: shared namespace' => [ 'Project:Wp/nl/Test', 'en' ];
		yield 'unchanged: info page metadata' => [ 'Wp/nl', 'en' ];
	}

	/**
	 * @dataProvider provideOnPageContentLanguage
	 */
	public function testOnPageContentLanguage( $pageName, $expected ) {
		$title = Title::newFromText( $pageName );
		$this->assertEquals( $expected, $title->getPageLanguage()->getCode() );
	}

	public static function provideOnArticleParserOptions() {
		yield 'unchanged: content under test' => [ 'Wp/nl/Test', null ];
		yield 'unchanged: template under test' => [ 'Template:Wp/be-tarask/Test', null ];
		yield 'unchanged: shared namespace' => [ 'Project:Wp/nl/Test', null ];
		yield 'localise info page view' => [ 'Wp/nl', 'de' ];
	}

	/**
	 * @dataProvider provideOnArticleParserOptions
	 */
	public function testOnArticleParserOptions( $pageName, $expected ) {
		$title = Title::newFromText( $pageName );
		$popt = ParserOptions::newFromAnon();
		$languageFactory = $this->createMock( LanguageFactory::class );
		$languageFactory->method( 'getLanguage' )
			->willReturnCallback( function ( $code ) {
				$languageMock = $this->createMock( Language::class );
				$languageMock->method( 'getCode' )
							 ->willReturn( $code );
				return $languageMock;
			} );
		$wi = new WikimediaIncubator( $languageFactory );
		$wi->onArticleParserOptions( new Article( $title ), $popt );
		$actual = $popt->getTargetLanguage() ? $popt->getTargetLanguage()->getCode() : null;
		$this->assertEquals( $expected, $actual );
	}
}

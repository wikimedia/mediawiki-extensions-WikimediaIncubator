<?php
/**
 * Makes Special:IncubatorFirstSteps to guide users
 * through the process of starting a new wiki.
 *
 * Based on the concept of FirstSteps of the Translate extension.
 *
 * @file
 * @author Robin Pepermans
 * @author Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @ingroup SpecialPage
 */

class SpecialIncubatorFirstSteps extends UnlistedSpecialPage {

	/**
	 * @var array
	 */
	protected $wikiprefix;

	public function __construct() {
		parent::__construct( 'IncubatorFirstSteps' );
	}

	/**
	 * @param $params
	 */
	public function execute( $params ) {
		$this->wikiprefix = WikimediaIncubator::analyzePrefix( WikimediaIncubator::displayPrefix() );

		$this->getOutput()->addWikiMsg( 'wminc-fs-intro' );
		$step = false;

		$this->addLanguageSelector();

		$step = $this->showSignup( $step );
		$step = $this->showTestwikiSetting( $step );
		$step = $this->showUserpage( $step );
		$step = $this->showStartWiki( $step );

		$title = $this->msg( 'wminc-fs-pagetitle', $step->text() )->escaped();
		$this->getOutput()->setPageTitle( $title );
	}

	/**
	 * @param $msg Message object
	 * @param $opaque bool
	 * @param $done bool
	 */
	protected function showHeader( $msg, $opaque = true, $done = false ) {
		$attrs = [];
		if ( $opaque ) {
			$attrs['class'] = 'mw-special-incubatorfirststeps-header';
		}
		$content = $msg->plain();
		if ( $done ) {
			$content .= $this->msg( 'wminc-fs-pagetitle-done' )->text();
		}
		return $this->getOutput()->addHtml( Html::element( 'h3', $attrs, $content ) );
	}

	/**
	 * Adds an inline list of languages that change the language with uselang=xx
	 */
	protected function addLanguageSelector() {
		$getLangCodes = $this->msg( 'wminc-fs-langselect-langs' )->inContentLanguage();
		$currentLangCode = $this->getLanguage()->getCode();

		if ( $this->getUser()->isLoggedIn() || $getLangCodes->isBlank() ) {
			return;
		}

		# Make a list of selectable languages, based on language codes
		# in a MediaWiki message and on the browser language(s)
		$getLangCodes = array_flip( explode( ',', $getLangCodes ) );
		$names = Language::fetchLanguageNames();
		$names_keys = array_keys( $names );
		$browserLanguages = array_keys( $this->getRequest()->getAcceptLang() );

		foreach ( $browserLanguages as $browserLanguage ) {
			if ( in_array( $browserLanguage, $names_keys ) ) {
				// add the language to the list if it is supported in MediaWiki
				$getLangCodes[$browserLanguage] = true;
			}
		}

		# add the language of the "testwiki" URL param if set
		$urlTestWiki = WikimediaIncubator::getUrlParam();
		if ( $urlTestWiki ) {
			$getLangCodes[$urlTestWiki['lang']] = true;
		}

		ksort( $getLangCodes ); // sorting by language code is not ideal, but well

		$showLanguages = [];
		foreach ( $getLangCodes as $code => $nothing ) {
			$code = trim( $code );
			if ( !isset( $names[$code] ) || $code === $currentLangCode ) {
				# language code not recognised, or is current interface language
				continue;
			}
			$linkParams = [ 'uselang' => $code,
				'testwiki' => $this->getRequest()->getVal( 'testwiki' ) ];
			$showLanguages[] = Linker::linkKnown( $this->getPageTitle(),
				$names[$code], [], $linkParams );
		}

		# Show list
		$this->getOutput()->addHtml( '<div id="mw-special-incubatorfirststeps-langselect">' .
			$this->msg( 'wminc-fs-langselect', $names[$currentLangCode] )->rawParams(
			$this->getLanguage()->pipeList( $showLanguages ) )->escaped() .
		'</div>' );
	}

	/**
	 * @param $step
	 * @return string
	 */
	protected function showSignup( $step ) {
		$step_msg = $this->msg( 'wminc-fs-signup-title' );
		if ( $step ) {
			$this->showHeader( $step_msg, true, false );
			return $step;
		} elseif ( $this->getUser()->isLoggedIn() ) {
			$this->showHeader( $step_msg, true, true );
			return $step;
		}
		$this->showHeader( $step_msg, false, false );

		# Login / create account links
		$link = SpecialPage::getTitleFor( 'Userlogin' );
		$query = [ 'returnto' => $this->getPageTitle(),
			'uselang' => $this->getRequest()->getVal( 'uselang' ) ];
		$urlTestWiki = WikimediaIncubator::getUrlParam();
		if ( $urlTestWiki ) {
			// set preferences automatically, based on the "testwiki" URL param
			$query['testwikiproject'] = $urlTestWiki['project'];
			$query['testwikicode'] = $urlTestWiki['lang'];
		}
		$login = $link->getFullUrl( $query );
		$signup = $link->getFullUrl( $query + [ 'type' => 'signup' ] );

		$this->getOutput()->addWikiMsg( 'wminc-fs-signup-text', $login, $signup );

		return $step_msg;
	}

	/**
	 * @param $step
	 * @return string
	 */
	protected function showTestwikiSetting( $step ) {
		$step_msg = $this->msg( 'wminc-fs-settings-title' );
		if ( $step ) {
			$this->showHeader( $step_msg, true, false );
			return $step;
		} elseif ( !$this->wikiprefix['error'] ) {
			$this->showHeader( $step_msg, true, true );
			return $step;
		}
		$this->showHeader( $step_msg, false, false );

		$this->getOutput()->addWikiMsg( 'wminc-fs-settings-image' );
		$this->getOutput()->addWikiMsg( 'wminc-fs-settings-text' );

		return $step_msg;
	}

	/**
	 * @param $step
	 * @return string
	 */
	protected function showUserpage( $step ) {
		$step_msg = $this->msg( 'wminc-fs-userpage-title' );

		if ( $step ) {
			$this->showHeader( $step_msg, true, false );
			return $step;
		} elseif ( $this->getUser()->getUserPage()->exists() ) {
			$this->showHeader( $step_msg, true, true );
			return $step;
		}
		$this->showHeader( $step_msg, false, false );

		$link = Linker::link( $this->getUser()->getUserPage(), $this->getUser()->getName() );
		$this->getOutput()->addHtml( $this->msg( 'wminc-fs-userpage-text', $link )->plain() );

		if ( class_exists( 'CentralAuthUser' ) ) {
			# If CentralAuth is installed, recommend the user to make his account global
			$globalUser = new CentralAuthUser( $this->getUser()->getName() );
			if ( !$globalUser->exists() ) {
				$link = Linker::specialLink( 'mergeaccount' );
				$this->getOutput()->addHtml( $this->msg( 'wminc-fs-globaluser-text' )->rawParams( $link )->escaped() );
			}
		}

		return $step_msg;
	}

	/**
	 * @param $step
	 * @return string
	 */
	protected function showStartWiki( $step ) {
		$step_msg = $this->msg( 'wminc-fs-startwiki-title' );

		if ( $step ) {
			$this->showHeader( $step_msg, true, false );
			return $step;
		}
		$this->showHeader( $step_msg, false, false );

		$mainpage = WikimediaIncubator::getMainPage(
			$this->wikiprefix['lang'], $this->wikiprefix['prefix'] );

		$prefix = Linker::linkKnown( Title::newFromText( $this->wikiprefix['prefix'] ) );
		$link = Linker::link( $mainpage, $mainpage->getText() );
		$this->getOutput()->addHtml( $this->msg( $mainpage->exists() ?
			'wminc-fs-startwiki-exists-text' : 'wminc-fs-startwiki-text' )->rawParams( $prefix, $link )->parse() );

		return $step_msg;
	}
}

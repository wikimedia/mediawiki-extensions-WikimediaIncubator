<?php
/*
* Implement test wiki preference, magic word and prefix check on edit page
*/

class IncubatorTest
{
	static function onGetPreferences( $user, &$preferences ) {
		global $wmincPref, $wmincProjects, $wmincProjectSite,
			$wmincLangCodeLength, $wgDefaultUserOptions;

		$preferences['language']['help-message'] = 'wminc-prefinfo-language';

		$prefinsert[$wmincPref . '-project'] = array(
			'type' => 'select',
			'options' => array( wfMsg( 'wminc-testwiki-none' ) => 'none' ) +
				(array)$wmincProjects + array( $wmincProjectSite['name'] => $wmincProjectSite['short'] ),
			'section' => 'personal/i18n',
			'label-message' => 'wminc-testwiki',
			'id' => $wmincPref . '-project',
			'help-message' => 'wminc-prefinfo-project',
		);
		$prefinsert[$wmincPref . '-code'] = array(
			'type' => 'text',
			'section' => 'personal/i18n',
			'label-message' => 'wminc-testwiki',
			'id' => $wmincPref . '-code',
			'maxlength' => (int)$wmincLangCodeLength,
			'size' => (int)$wmincLangCodeLength,
			'help-message' => 'wminc-prefinfo-code',
			'validation-callback' => array( 'IncubatorTest', 'validateCodePreference' ),
		);

		$wgDefaultUserOptions[$wmincPref . '-project'] = 'none';

		$preferences = wfArrayInsertAfter( $preferences, $prefinsert, 'language' );

		return true;
	}

	static function validateCodePreference( $input, $alldata ) {
		global $wmincPref, $wmincProjects;
		// If the user selected a project that NEEDS a language code, but the user DID NOT enter a language code, give an error
		if ( isset( $alldata[$wmincPref.'-project'] ) && in_array( $alldata[$wmincPref.'-project'], $wmincProjects ) && !$input ) {
			return Xml::element( 'span', array( 'class' => 'error' ), wfMsg( 'wminc-prefinfo-error' ) );
		} else {
			return true;
		}
	}

	/*
	* This validates a given language code.
	* Only "xx[x]" and "xx[x]-x[xxxxxxxx]" are allowed.
	*/
	static function validateLanguageCode( $code ) {
		global $wmincLangCodeLength;
		if( strlen( $code ) > $wmincLangCodeLength ) { return false; }
		if( $code == 'be-x-old' ) { return true; } // one exception...
		return (bool) preg_match( '/^[a-z][a-z][a-z]?(-[a-z]+)?$/', $code );
	}

	/*
	* This validates a full prefix in a given title.
	* It gives an array with the project and language code, containing
	* the key 'error' if it is invalid.
	* Use validatePrefix() if you just want true or false.
	* Use displayPrefixedTitle() to make a prefix page title!
	*
	* @param $onlyprefix Bool Whether to validate only the prefix, or
	* also allow other text within the page title (Wx/xxx vs Wx/xxx/Text)
	*/
	static function analyzePrefix( $title, $onlyprefix = false ) {
		$data = array();
		// split title into parts
		$titleparts = explode( '/', $title );
		if( !is_array( $titleparts ) || !isset( $titleparts[1] ) ) {
			$data['error'] = 'noslash';
		} else {
			$data['project'] = $titleparts[0][1]; // get the x from Wx/...
			$data['lang'] = $titleparts[1];
			$data['prefix'] = 'W'.$data['project'].'/'.$data['lang'];
			// check language code
			if( !self::validateLanguageCode( $data['lang'] ) ) {
				$data['error'] = 'invalidlangcode';
			}
		}
		global $wmincProjects;
		$listProjects =	implode( '', $wmincProjects ); // something like: pbtqn
		if( !preg_match( '/^W['.$listProjects.']\/[a-z-]+' .
			($onlyprefix ? '$/' : '(\/.+)?$/' ), $title ) ) {
			$data['error'] = 'invalidprefix';
		}
		if( !$onlyprefix && ( isset( $data['error'] ) &&
			$data['error'] != 'invalidprefix' ) ) { // there is a Page_title
			$prefixn = strlen( $data['prefix'].'/' ); // number of chars in prefix
			// get Page_title from Wx/xx/Page_title
			$data['realtitle'] = substr( $title, $prefixn );
		}
		return $data; // return an array with information
	}

	/*
	* This returns simply true or false based on analyzePrefix().
	*/
	static function validatePrefix( $title, $onlyprefix = false ) {
		$data = self::analyzePrefix( $title, $onlyprefix );
		if( isset( $data['error'] ) ) { return true; }
		return false;
	}

	/* 
	* Returns true if the given project (or preference
	* by default) is one of the projects using the
	* format Wx/xxx (as defined in $wmincProjects)
	*/
	static function isContentProject( $project = '' ) {
		global $wgUser, $wmincPref, $wmincProjects;
		$project = ($project ? $project : $wgUser->getOption($wmincPref . '-project') );
		return (bool) in_array( $project, $wmincProjects );
	}

	/*
	* display the prefix by the given project and code
	* (or the user preference if no parameters are given)
	*/
	static function displayPrefix( $project = '', $code = '' ) {
		global $wgUser, $wmincPref;
		if ( self::isContentProject() ) {
			// return the prefix
			return 'W' . ( $project ? $project : $wgUser->getOption($wmincPref . '-project') ) .
				'/' . ( $code ? $code : $wgUser->getOption($wmincPref . '-code') ); // return the prefix
		} else {
			// still provide the value
			return $wgUser->getOption($wmincPref . '-project');
		}
	}

	/*
	* Makes a full prefixed title of a given page title and namespace
	* @param $ns Int numeric value of namespace
	*/
	static function displayPrefixedTitle( $title, $ns = 0 ) {
		global $wgLang, $wmincTestWikiNamespaces;
		if( in_array( $ns, $wmincTestWikiNamespaces ) ) {
			/* Standard namespace as defined by
			* $wmincTestWikiNamespaces, so use format:
			* TITLE + NS => NS:Wx/xxx/TITLE
			*/
			$title = Title::makeTitleSafe( $ns, self::displayPrefix() . '/' . $title );
		} else {
			/* Non-standard namespace, so use format:
			* TITLE + NS => Wx/xxx/NS:TITLE
			* (with localized namespace name)
			*/
			$title = Title::makeTitleSafe( NULL, self::displayPrefix() . '/' .
				$wgLang->getNsText( $ns ) . ':' . $title );
		}
		return $title;
	}

	static function magicWordVariable( &$magicWords ) {
		$magicWords[] = 'usertestwiki';
		return true;
	}

	static function magicWord( &$magicWords, $langCode ) {
		$magicWords['usertestwiki'] = array( 0, 'USERTESTWIKI' );
		return true;
	}

	static function magicWordValue( &$parser, &$cache, &$magicWordId, &$ret ) {
		if( !self::displayPrefix() ) {
			$ret = 'none';
		} else {
			$ret = self::displayPrefix();
		}
		return true;
	}

	/* Return an error if the user wants to create an unprefixed page
	*/
	static function checkPrefixCreatePermissions( $title, $user, $action, &$result ) {
		global $wmincProjectSite, $wmincTestWikiNamespaces, $wmincPseudoCategoryNSes;
		$titletext = $title->getText();
		$ns = $title->getNamespace();
		$prefixdata = self::analyzePrefix( $titletext );
		if( $action != 'create' ) {
			// only check on page creation
			return true;
		} elseif( self::displayPrefix() == $wmincProjectSite['short'] ) {
			// If user has "project" as test wiki preference, it isn't needed to check
			return true;
		} elseif( !in_array( $ns, $wmincTestWikiNamespaces ) ) {
			// OK if it's not in one of the content namespaces
			return true;
		} elseif( !isset( $prefixdata['error'] ) ) {
			// no error in prefix -> no error to show
			return true;
		} elseif( ($ns == NS_CATEGORY || $ns == NS_CATEGORY_TALK) &&
			preg_match('/^('.implode('|',$wmincPseudoCategoryNSes).'):.+$/', $titletext) ) {
			// whitelisting
			return true;
		} elseif( $prefixdata['error'] == 'invalidlangcode' ) {
			$error[] = array( 'wminc-error-wronglangcode', $prefixdata['lang'] );
		} elseif ( self::isContentProject() ) {
			// If the user has a test wiki pref, suggest a page title with prefix
			$suggesttitle = (isset( $prefixdata['realtitle'] ) ?
				$prefixdata['realtitle'] : $titletext );
			$suggest = self::displayPrefixedTitle( $suggesttitle, $ns );
			if ( !$title->exists() ) {
				// Creating a page, so suggest to create a prefixed page
				$error[] = array( 'wminc-error-unprefixed-suggest', $suggest );
			}
		} else {
			$error = 'wminc-error-unprefixed';
		}
		$result = $error;
		return false;
	}

	/* Return an error if the user wants to move 
	* an existing page to an unprefixed title
	*/
	static function checkPrefixMovePermissions( $oldtitle, $newtitle, $user, &$error ) {
		global $wmincProjectSite, $wmincTestWikiNamespaces;
		$prefixdata = self::analyzePrefix( $newtitle->getText() );
		$ns = $newtitle->getNamespace();
		if( !isset( $prefixdata['error'] ) ) {
			// if there is no error with the page title
			return true;
		} elseif( self::displayPrefix() == $wmincProjectSite['short'] ) {
			// If user has "project" as test wiki preference, it isn't needed to check
			return true;
		} elseif( !in_array( $ns, $wmincTestWikiNamespaces ) ) {
			// OK if it's not in one of the content namespaces
			return true;
		}
		// now there should be an error with the new page title
		$error = wfMsgWikiHtml( 'wminc-error-move-unprefixed' );
		return false;
	}

	/**
	* Add a link to Special:ViewUserLang from Special:Contributions/USERNAME
	* if the user has 'viewuserlang' permission
	* Based on code from extension LookupUser made by Tim Starling
	* @return true
	*/
	static function efLoadViewUserLangLink( $id, $nt, &$links ) {
		global $wgUser;
		if ( $wgUser->isAllowed( 'viewuserlang' ) ) {
			$user = wfUrlencode( $nt->getText() );
			$links[] = $wgUser->getSkin()->link(
				SpecialPage::getTitleFor( 'ViewUserLang', $user ),
				wfMsgHtml( 'wminc-viewuserlang' )
			);
		}
		return true;
	}
}
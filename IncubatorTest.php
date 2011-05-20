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
	* This validates a language code. Currently it is set
	* to only allow two or three-letter codes strictly, but
	* it can be changed when the policy changes.
	* See also $wmincLangCodeLength.
	*/
	static function validateLanguageCode( $code ) {
		return (bool) preg_match( '/[a-z][a-z][a-z]?/', $code );
	}

	/*
	* Same as above, but for full prefix in a given title.
	* @param $onlyprefix Bool Whether to validate only the prefix, or
	* also allow other text within the page title (Wx/xxx vs Wx/xxx/Text)
	*/
	static function validatePrefix( $title, $onlyprefix = false ) {
		global $wmincProjects;
		$listProjects =	implode( '', $wmincProjects ); // something like: pbtqn
		return (bool) preg_match( '/^W['.$listProjects.']\/[a-z][a-z][a-z]?' .
			($onlyprefix ? '' : '' ) . '/', $title );
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
	* @param $ns Tnt numeric value of namespace
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

	static function checkPrefixOnEditPage( $editpage ) {
		global $wmincProjectSite;
		// If user has "project" as test wiki preference, it isn't needed to check
		if ( self::displayPrefix() == $wmincProjectSite['short'] ) {
			return true;
		}
		global $wgTitle, $wmincTestWikiNamespaces;
		$title = $wgTitle->getText();
		$ns = $wgTitle->getNamespace();
		// If it's in one of the content namespaces or if the page title has a prefix, return
		if ( !in_array( $ns, $wmincTestWikiNamespaces ) || self::validatePrefix( $title ) ) {
			return true;
		}
		$warning = '<div id="wminc-warning"><span id="wm-warning-unprefixed">'
			. wfMsg( 'wminc-warning-unprefixed' )
			. '</span>';
		// If the user has a test wiki pref, suggest a page title with prefix
		if ( self::isContentProject() ) {
			global $wgUser;
			$suggest = self::displayPrefixedTitle( $title, $ns );
			if ( !$wgTitle->exists() ) { // Creating a page, so suggest to create a prefixed page
				$warning .= ' <span id="wminc-warning-suggest">'
					. wfMsg( 'wminc-warning-suggest', $suggest )
					. '</span>';
			} elseif ( $wgUser->isAllowed( 'move' ) ) { // Page exists, so suggest to move
				$warning .= ' <span id="wminc-warning-suggest-move" class="plainlinks">'
					. wfMsg( 'wminc-warning-suggest-move', $suggest, wfUrlencode( $suggest ), wfUrlencode( $wgTitle ) )
					. '</span>';
			}
		}
		$warning .= '</div>';
		global $wgOut;
		$wgOut->addWikiText( $warning );
		return true;
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
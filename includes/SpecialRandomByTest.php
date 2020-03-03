<?php
/**
 * Special page to go to a random page in your test wiki
 * (or a specific wiki if it is defined through &testwiki=Wx/xx)
 *
 * @file
 * @ingroup SpecialPage
 * @author Robin Pepermans (SPQRobin)
 */

class SpecialRandomByTest extends RandomPage {
	public function __construct() {
		global $wmincPref, $wmincProjectSite;
		$target = $this->getRequest()->getVal( 'testwiki' );
		$target = WikimediaIncubator::analyzePrefix( $target );
		$project = $target['project'] ?? '';
		$lang = $target['lang'] ?? '';
		$user = $this->getUser();
		if ( WikimediaIncubator::isContentProject( $user ) || ( $project && $lang ) ) {
			$dbr = wfGetDB( DB_REPLICA );
			$this->extra[] = 'page_title' .
				$dbr->buildLike( WikimediaIncubator::displayPrefix( $project, $lang ) .
					'/', $dbr->anyString() );
		} elseif (
			$user->getOption( $wmincPref . '-project' ) == $wmincProjectSite['short']
		) {
			# project or help namespace
			$this->extra['page_namespace'] = [ 4, 12 ];
		}
		parent::__construct( 'RandomByTest' );
	}
}

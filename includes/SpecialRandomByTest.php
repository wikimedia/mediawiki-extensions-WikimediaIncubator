<?php

namespace MediaWiki\Extension\WikimediaIncubator;

use MediaWiki\Specials\SpecialRandomPage;
use MediaWiki\Title\NamespaceInfo;
use MediaWiki\User\Options\UserOptionsLookup;
use Wikimedia\Rdbms\IConnectionProvider;
use Wikimedia\Rdbms\IExpression;
use Wikimedia\Rdbms\LikeValue;

/**
 * Special page to go to a random page in your test wiki
 * (or a specific wiki if it is defined through &testwiki=Wx/xx)
 *
 * @file
 * @ingroup SpecialPage
 * @author Robin Pepermans (SPQRobin)
 */

class SpecialRandomByTest extends SpecialRandomPage {

	/**
	 * @param IConnectionProvider $dbProvider
	 * @param NamespaceInfo $nsInfo
	 * @param UserOptionsLookup $userOptionsLookup
	 */
	public function __construct(
		IConnectionProvider $dbProvider,
		NamespaceInfo $nsInfo,
		UserOptionsLookup $userOptionsLookup
	) {
		global $wgWmincPref, $wgWmincProjectSite;
		$target = $this->getRequest()->getVal( 'testwiki', '' );
		$target = WikimediaIncubator::analyzePrefix( $target );
		$project = $target['project'] ?? '';
		$lang = $target['lang'] ?? '';
		$user = $this->getUser();
		if ( WikimediaIncubator::isContentProject( $user ) || ( $project && $lang ) ) {
			$dbr = $dbProvider->getReplicaDatabase();
			$this->extra[] = $dbr->expr(
				'page_title',
				IExpression::LIKE,
				new LikeValue( WikimediaIncubator::displayPrefix( $project, $lang ) . '/', $dbr->anyString() )
			);
		} elseif (
			$userOptionsLookup->getOption( $user, $wgWmincPref . '-project' ) == $wgWmincProjectSite['short']
		) {
			# project or help namespace
			$this->extra['page_namespace'] = [ 4, 12 ];
		}
		parent::__construct(
			$dbProvider,
			$nsInfo
		);
		$this->mName = 'RandomByTest';
	}
}

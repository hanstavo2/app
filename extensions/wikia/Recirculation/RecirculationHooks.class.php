<?php

/**
 * Class RecirculationHooks
 */
class RecirculationHooks {

	/**
	 * Insert the VideosModule on to the right rail
	 * @param array $modules
	 * @return bool
	 */
	static public function onGetRailModuleList( &$modules ) {
		wfProfileIn(__METHOD__);

		// Check if we're on a page where we want to show the Videos Module.
		// If we're not, stop right here.
		if ( !self::canShowVideosModule() ) {
			wfProfileOut(__METHOD__);
			return true;
		}

		// Use a different position depending on whether the user is logged in
		$app = F::App();
		$pos = $app->wg->User->isAnon() ? 1305 : 1285;

		$modules[$pos] = array('AdEmptyContainer', 'Index', ['slotName' => 'RECIRCULATION_RAIL']);

		wfProfileOut(__METHOD__);

		return true;
	}

	/**
	 * Modify assets appended to the bottom of the page
	 *
	 * @param array $jsAssets
	 *
	 * @return bool
	 */
	public static function onOasisSkinAssetGroups( &$jsAssets ) {
		$jsAssets[] = 'recirculation_js';

		return true;
	}

	/**
	 * Return whether we're on one of the pages where we want to show the Videos Module,
	 * specifically File pages, Article pages, and Main pages
	 * @return bool
	 */
	static public function canShowVideosModule() {
		$wg = F::app()->wg;
		$showableNameSpaces = array_merge( $wg->ContentNamespaces, [ NS_FILE ] );

		if ( $wg->Title->exists()
			 && in_array( $wg->Title->getNamespace(), $showableNameSpaces )
			 && in_array( $wg->request->getVal( 'action' ), [ 'view', null ] )
			 && $wg->request->getVal( 'diff' ) === null
		) {
			return true;
		}
		return false;
	}
}

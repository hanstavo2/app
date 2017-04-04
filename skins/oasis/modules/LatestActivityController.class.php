<?php

class LatestActivityController extends WikiaController {
	const MAX_ELEMENTS = 4;

	public function executeIndex() {
		global $wgLang, $wgContentNamespaces, $wgMemc;

		$mKey = wfMemcKey( 'mOasisLatestActivity' );
		$feedData = $wgMemc->get( $mKey );

		if ( empty( $feedData ) ) {
			// data provider
			$includeNamespaces = implode( '|', $wgContentNamespaces );
			$parameters = [
				'type' => 'widget',
				'maxElements' => self::MAX_ELEMENTS,
				'flags' => [ 'shortlist' ],
				'uselang' => $wgLang->getCode(),
				'includeNamespaces' => $includeNamespaces
			];

			$feedProxy = new ActivityFeedAPIProxy( $includeNamespaces );
			$feedProvider = new DataFeedProvider( $feedProxy, 1, $parameters );
			$feedData = $feedProvider->get( self::MAX_ELEMENTS );

			$wgMemc->set( $mKey, $feedData );
		}

		// Time strings are slow to calculate, but we still want them to update frequently (60 seconds)
		$mKeyTimes = wfMemcKey( 'mOasisLatestActivity_times', $wgLang->getCode() );
		$changeList = $wgMemc->get( $mKeyTimes, [] );

		if ( empty( $changeList ) && !empty( $feedData ) && is_array( $feedData['results'] ) ) {
			foreach ( $feedData['results'] as $change ) {
				$item = [];
				$item['time_ago'] = wfTimeFormatAgoOnlyRecent( $change['timestamp'] ); // TODO: format the timestamp on front-end to allow longer caching in memcache?
				$item['user_name'] = $change['username'];
				$item['user_profile_url'] = AvatarService::getUrl( $item['user_name'] );
				$item['page_title'] = $change['title'];

				$title = Title::newFromText( $change['title'], $change['ns'] );

				$item['page_url'] = $change['url'];

				if ( ( empty( $change['articleComment'] ) || empty( $change['url'] ) ) && is_object( $title ) ) {
					$item['page_url'] = $title->getLocalURL();
				}

				$changeList[] = $item;
			}

			$wgMemc->set( $mKeyTimes, $changeList, 60 );
		}

		$this->setVal( 'changeList', $changeList );
		$this->setVal( 'moduleHeader', wfMsg( 'oasis-activity-header' ) );

		// Cache the response in CDN and browser
		$this->response->setCacheValidity( 600 );
	}

	static function onArticleSaveComplete(
		&$article,
		&$user,
		$text,
		$summary,
		$minoredit,
		$watchthis,
		$sectionanchor,
		&$flags,
		$revision,
		&$status,
		$baseRevId
	) {
		global $wgMemc, $wgLang;

		$wgMemc->delete( wfMemcKey( 'mOasisLatestActivity' ) );
		$wgMemc->delete( wfMemcKey( 'mOasisLatestActivity_times', $wgLang->getCode() ) );

		return true;
	}
}

<?php

/* This module encapsulates the right rail.  BodyModule handles the business logic for turning modules on or off */

class RailController extends WikiaController {

	const LAZY_LOADING_BEAKPOINT = 1440; // TOP_RIGHT_BOXAD

	public function executeIndex($params) {
		wfProfileIn(__METHOD__);

		$railModules = isset($params['railModuleList']) ? $params['railModuleList'] : [];

		$this->railModuleList = $this->filterModules($railModules);
		$this->isGridLayoutEnabled = BodyController::isGridLayoutEnabled();
		$this->isAside = $this->wg->RailInAside;
		$this->loadLazyRail = $railModules > $this->railModuleList;

		wfProfileOut(__METHOD__);
	}

	public function executeLazy() {
		wfProfileIn(__METHOD__);

		$this->railModuleList = $this->filterModules((new BodyController)->getRailModuleList(), true);

		wfProfileOut(__METHOD__);
	}

	private function filterModules($moduleList, $lazy = false) {
		$lazyChecker = ($lazy) ? [$this, 'modulesLazyCheck'] : [$this, 'modulesNotLazyCheck'];
		$out = [];
		foreach ($moduleList as $key => $val) {
			if ($lazyChecker($key)) {
				$out[$key] = $val;
			}
		}

		return $out;
	}
	private function modulesNotLazyCheck($moduleKey) {
		return $moduleKey >= self::LAZY_LOADING_BEAKPOINT;
	}
	private function modulesLazyCheck($moduleKey) {
		return $moduleKey < self::LAZY_LOADING_BEAKPOINT;
	}
}

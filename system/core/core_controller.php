<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_loader.php";

class core_controller {

	public function __construct() {
		$this->load = new core_loader();
	}
}
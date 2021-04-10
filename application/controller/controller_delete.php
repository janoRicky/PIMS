<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_delete extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("delete");
	}

}
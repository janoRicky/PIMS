<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/config/config.php";

class core_loader {

 	function __construct() {
 		$this->cfg = new config();
 	}

	public function view($url, $data = NULL) {
		if ($data != NULL) {
			extract($data);
		}
		return require($_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/view/" . $url . ".php");
	}
}
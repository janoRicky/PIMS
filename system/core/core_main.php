<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/config/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_main.php";

class core_main {

 	function __construct() {
		$this->cfg = new config();
		$this->main = new controller_main();
	}

	public function move($dest) {
		header("Location: " . $dest);
	}
	public function route($rt) {
		if ($rt == "index") {
			$func_name = $this->cfg->routes()[$rt];
			$this->main->$func_name();
		} else {
			if (!array_key_exists($rt, $this->cfg->routes())) {
				header("Location: 404.html");
			} else {
				$func_name = $this->cfg->routes()[$rt];
				$this->main->$func_name();
			}
		}
	}
}

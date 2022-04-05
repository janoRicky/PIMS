<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/config/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_login.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_main.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_add.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_edit.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/controller/controller_delete.php";

class core_main {

 	function __construct() {
		$this->cfg = new config();
		$this->login = new controller_login();
		$this->main = new controller_main();
		$this->add = new controller_add();
		$this->edit = new controller_edit();
		$this->delete = new controller_delete();
	}

	public function move($dest) {
		header("Location: " . $dest);
	}
	public function route($rt) {
		if ($rt == "index" || $rt == "" || $rt == NULL) {
			// $func_name = $this->cfg->routes()[$rt];
			$this->main->index();
		} elseif ($rt == "login") {
			$this->main->view_login();
		} elseif ($rt == "login_v") {
			$this->login->verify_admin();
		} else {
			if (isset($_SESSION["admin_in"]) && $_SESSION["admin_in"] == TRUE) {
				if (!array_key_exists($rt, $this->cfg->routes())) {
					header("Location: 404.html");
				} else {
					$route = explode("/", $this->cfg->routes()[$rt]);
					$ctrl = $route[0];
					$func = $route[1];
					$this->$ctrl->$func();
				}
			} else {
				$this->move("login");
			}
		}
	}
}

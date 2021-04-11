<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_login extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("read");
	}

	function verify_admin() {
		$email = $this->post("inp_email");
		$password = $this->post("inp_password");

		if ($email != NULL && $password != NULL) {
			$admin_info = $this->read->admin_verify($email)->fetch_array();
			if ($admin_info != NULL) {
				if (password_verify($password, $admin_info["password"])) {
					$_SESSION["admin_id"] = $admin_info["id"];
					$_SESSION["admin_name"] = $admin_info["name"];
					$_SESSION["admin_in"] = TRUE;
				} else {
					$_SESSION["alert"] = "Incorrect Password.";
					header("Location: login");
					exit();
				}
			} else {
				$_SESSION["alert"] = "Email does not exist.";
				header("Location: login");
				exit();
			}
		} else {
			$_SESSION["alert"] = "All inputs must be filled.";
			header("Location: login");
			exit();
		}
		header("Location: dashboard");
		exit();
	}
}
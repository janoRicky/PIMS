<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_main extends core_controller {

	public function load_view($url, $data = NULL) {
		if ($data != NULL) {
			extract($data);
		}
		return require($_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/view/" . $url . ".php");
	}

	public function index() {
		$this->load->view($this->load->config->index());
	}
	public function view_login() {
		$data["head_title"] = "Pharmacy Inventory System";
		$this->load->view("login", $data);
	}
	public function view_dashboard() {
		$data["head_title"] = "Dashboard - PIMS";

		$this->load->view("dashboard", $data);
	}
}
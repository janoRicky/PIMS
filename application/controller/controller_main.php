<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_main extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("read");
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
		$data["table"] = $this->read->get_admins();
		$this->load->view("dashboard", $data);
	}
}
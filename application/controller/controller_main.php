<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_main extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("read");
	}

	public function view_login() {
		$data["head_title"] = "Pharmacy Inventory System";

		$this->load->view("login", $data);
	}
	public function view_dashboard() {
		$data["head_title"] = "Dashboard - PIMS";

		$this->load->view("dashboard", $data);
	}
	public function view_items() {
		$data["head_title"] = "Items - PIMS";

		$this->load->view("items", $data);
	}
	public function view_accounts() {
		$data["head_title"] = "Accounts - PIMS";
		$data["nav_link"] = "accounts";
		$data["nav_text"] = "Accounts";

		if (isset($_GET["pg"]) && $_GET["pg"] != NULL) {
			if ((int)$_GET["pg"] < 1) {
				$page = 1;
			} else {
				$page = (int)$_GET["pg"];
			}
		} else {
			$page = 1;
		}
		if (isset($_GET["search"]) && $_GET["search"] != NULL) {
			$data["search_val"] = $_GET["search"];
			$data["table_size"] = $this->read->admin_search_count($data["search_val"]);
			$data["table"] = $this->read->admin_search($data["search_val"], $page);
		} else {
			$data["table_size"] = $this->read->admin_count();
			$data["table"] = $this->read->admin_get($page);
		}

		$data["page_limit"] = $this->load->cfg->page_limit();
		$data["acc_pg"] = $page;
		

		$this->load->view("accounts", $data);
	}
}
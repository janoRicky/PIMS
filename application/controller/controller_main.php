<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_main extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("read");

		date_default_timezone_set("Asia/Manila");
	}

	function index() {
		$this->load->view("login");
	}

	function logout() {
		session_destroy();
		$this->load->view("login");
	}
	function view_about_me() {
		$data["head_title"] = "About Me - PIMS";
		$data["nav_link"] = "about_me";
		$data["nav_text"] = "About Me";
		
		$this->load->view("about_me", $data);
	}

	function page_details($page_no, $table_size, $page_limit) {
		$desc = "Showing " . ((($page_no - 1) * $page_limit) + 1) . "-" . ($page_no * $page_limit < $table_size ? $page_no * $page_limit : $table_size) . " results of " . $table_size . " rows.";
		$prev = NULL;
		$next = NULL;
		if ($page_no > 1) {
			$prev = ($page_no - 1);
		}
		if ($table_size > ($page_no * $page_limit)) {
			$next = ($page_no + 1);
		}
		$details = array(
			"desc" => $desc,
			"prev" => $prev,
			"next" => $next
		);
		return $details;
	}

	function view_login() {
		if (isset($_SESSION["admin_in"])) {
			header("Location: dashboard");
		}

		$data["head_title"] = "Pharmacy Inventory System";

		$this->load->view("login", $data);
	}
	function view_dashboard() {
		$data["head_title"] = "Dashboard - PIMS";
		$data["nav_link"] = "dashboard";
		$data["nav_text"] = "Dashboard";

		$data["item_count"] = $table_size = $this->read->item_count();
		$data["admin_count"] = $table_size = $this->read->admin_count();

		$this->load->view("dashboard", $data);
	}
	// ITEMS
	function view_items() {
		$page = (int)$this->get("pg");
		$search = $this->get("search");

		$data["head_title"] = "Items - PIMS";
		$data["nav_link"] = "items";
		$data["nav_text"] = "Items";

		if ($page == NULL) {
			$page = 1;
		}
		if ($search != NULL) {
			$data["search_val"] = $search;
			$table_size = $this->read->item_search_count($data["search_val"]);
			$data["table"] = $this->read->item_search($data["search_val"], $page);
		} else {
			$data["search_val"] = NULL;
			$table_size = $this->read->item_count();
			$data["table"] = $this->read->item_get($page);
		}

		$page_limit = $this->load->cfg->page_limit();
		$data["page_details"] = $this->page_details($page, $table_size, $page_limit);

		$this->load->view("items", $data);
	}
	function view_item() {
		$id = $this->get("id");

		$data["head_title"] = "Item View - PIMS";
		$data["nav_link"] = "items";
		$data["nav_text"] = "Items > View";

		if ($id != NULL) {
			$data["table"] = $this->read->item_det_get($id);
			$this->load->view("items_view", $data);
		} else {
			header("Location: items");
		}
	}
	function view_item_update() {
		$id = $this->get("id");

		$data["head_title"] = "Item View - PIMS";
		$data["nav_link"] = "items";
		$data["nav_text"] = "Items > Edit";

		if ($id != NULL) {
			$data["table"] = $this->read->item_det_get($id);
			$this->load->view("items_edit", $data);
		} else {
			header("Location: items");
		}
	}
	// ACCOUNTS
	function view_accounts() {
		$page = (int)$this->get("pg");
		$search = $this->get("search");

		$data["head_title"] = "Accounts - PIMS";
		$data["nav_link"] = "accounts";
		$data["nav_text"] = "Accounts";

		if ($page == NULL) {
			$page = 1;
		}
		if ($search != NULL) {
			$data["search_val"] = $search;
			$table_size = $this->read->admin_search_count($data["search_val"]);
			$data["table"] = $this->read->admin_search($data["search_val"], $page);
		} else {
			$data["search_val"] = NULL;
			$table_size = $this->read->admin_count();
			$data["table"] = $this->read->admin_get($page);
		}

		$page_limit = $this->load->cfg->page_limit();
		$data["page_details"] = $this->page_details($page, $table_size, $page_limit);

		$this->load->view("accounts", $data);
	}
	function view_account() {
		$id = $this->get("id");

		$data["head_title"] = "Account View - PIMS";
		$data["nav_link"] = "accounts";
		$data["nav_text"] = "Accounts > View";

		if ($id != NULL) {
			$data["table"] = $this->read->admin_acc_get($id);
			$this->load->view("accounts_view", $data);
		} else {
			header("Location: accounts");
		}
	}
	function view_account_update() {
		$id = $this->get("id");

		$data["head_title"] = "Account View - PIMS";
		$data["nav_link"] = "accounts";
		$data["nav_text"] = "Accounts > Edit";

		if ($id != NULL) {
			$data["table"] = $this->read->admin_acc_get($id);
			$this->load->view("accounts_edit", $data);
		} else {
			header("Location: accounts");
		}
	}
}
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_read extends core_model {

	function admin_verify($email) {
		return $this->select("adm_accounts", array("email" => $email));
	}
// ITEMS
	function item_count() {
		return $this->get_rows("p_items");
	}
	function item_get($page) {
		return $this->select("p_items", NULL, NULL, $page);
	}
	function item_search_count($search) {
		return $this->get_rows("p_items", $search);
	}
	function item_search($search, $page) {
		return $this->general_search("p_items", $search, $page);
	}
	function item_det_get($id) {
		return $this->select("p_items", array("id" => $id));
	}
// ADMINS
	function admin_count() {
		return $this->get_rows("adm_accounts");
	}
	function admin_get($page) {
		return $this->select("adm_accounts", NULL, NULL, $page);
	}
	function admin_search_count($search) {
		return $this->get_rows("adm_accounts", $search);
	}
	function admin_search($search, $page) {
		return $this->general_search("adm_accounts", $search, $page);
	}
	function admin_acc_get($id) {
		return $this->select("adm_accounts", array("id" => $id));
	}
}
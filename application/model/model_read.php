<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_read extends core_model {

	function adm_verification($email, $password) {
		// 
	}
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
}
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_read extends core_model {

	public function adm_verification($email, $password) {
		// 
	}
	public function get_admins() {
		return $this->select("adm_accounts");
	}
}
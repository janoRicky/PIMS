<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_update extends core_model {

	public function adm_verification($email, $password) {
		// 
	}
	public function admin_get() {
		return $this->select("adm_accounts");
	}
}
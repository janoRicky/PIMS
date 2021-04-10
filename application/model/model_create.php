<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_create extends core_model {

	public function admin_get() {
		return $this->select("adm_accounts");
	}
}
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_model.php";

class model_create extends core_model {

// ITEM
	public function item_add($data) {
		return $this->add("p_items", $data);
	}
// ADMIN
	public function admin_add($data) {
		return $this->add("adm_accounts", $data);
	}
}
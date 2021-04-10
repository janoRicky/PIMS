<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_loader.php";

class core_controller {

	public function model($model) {
		require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/model/model_" . $model . ".php";
		$class_name = "model_" . $model;
		$this->$model = new $class_name();
	}
}
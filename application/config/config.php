<?php

class config {

	public $arr_cfg;

	public function __construct() {
		$this->arr_cfg["base_url"] = $_SERVER["SERVER_NAME"] . "/PIMS/";

		$this->arr_cfg["index"] = "login";

		$this->arr_cfg["routes"] = array(
			"login" => "view_login",
			"dashboard" => "view_dashboard",
			"items" => "view_items"
		);
	}

	public function base_url() {
		return $this->arr_cfg["base_url"];
	}
	public function index() {
		return $this->arr_cfg["index"];
	}
	public function routes() {
		return $this->arr_cfg["routes"];
	}
}
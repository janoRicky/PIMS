<?php

class config {

	function __construct() {
		$this->base_url = $_SERVER["SERVER_NAME"] . "/PIMS/";

		$this->index = "login";

		$this->routes = array(
			"login" => "view_login",
			"dashboard" => "view_dashboard",
			"items" => "view_items"
		);
	}

	public function base_url() {
		return $this->base_url;
	}
	public function index() {
		return $this->index;
	}
	public function routes() {
		return $this->routes;
	}
}
<?php

class config {

	function __construct() {
		$this->page_limit = 25;
		$this->base_url = $_SERVER["SERVER_NAME"] . "/PIMS/";
		$this->index = "login";
		$this->routes = array(
			"login" => "main/view_login",
			"dashboard" => "main/view_dashboard",
			"accounts" => "main/view_accounts",
			"items" => "main/view_items",

			// FUNCTIONS,
			"item_add" => "add/item_add",
			"item_edit" => "edit/item_edit",
			"item_delete" => "delete/item_delete",

			"account_add" => "add/account_add",
			"account_edit" => "edit/account_edit",
			"account_delete" => "delete/account_delete"
		);
	}

	public function page_limit() {
		return $this->page_limit;
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
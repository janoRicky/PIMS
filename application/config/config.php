<?php

session_start();

class config {

	function __construct() {
		$this->page_limit = 15;
		$this->notif_timeout = 5000;

		$this->base_url = $_SERVER["SERVER_NAME"] . "/PIMS/";
		$this->index = "login";
		$this->routes = array(
			"login" => "main/view_login",
			"dashboard" => "main/view_dashboard",
			"about_me" => "main/view_about_me",
			
			// FUNCTION PAGES
			"accounts" => "main/view_accounts",
			"account_view" => "main/view_account",
			"account_update_view" => "main/view_account_update",

			"items" => "main/view_items",
			"item_view" => "main/view_item",
			"item_update_view" => "main/view_item_update",
			
			// FUNCTIONS
			"login_v" => "login/add_item",
			"logout" => "main/logout",

			"item_add" => "add/add_item",
			"item_edit" => "edit/edit_item",
			"item_delete" => "delete/delete_item",

			"account_add" => "add/add_account",
			"account_edit" => "edit/edit_account",
			"account_delete" => "delete/delete_account"
		);
	}

	public function page_limit() {
		return $this->page_limit;
	}
	public function notif_timeout() {
		return $this->notif_timeout;
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
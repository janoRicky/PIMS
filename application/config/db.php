<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pharmacy_db');


class db {

	private $server;
	private $username;
	private $password;
	private $name;

	function __construct() {
		$this->server = DB_SERVER;
		$this->username = DB_USERNAME;
		$this->password = DB_PASSWORD;
		$this->name = DB_NAME;
	}

	public function server() {
		return $this->server;
	}
	public function username() {
		return $this->username;
	}
	public function password() {
		return $this->password;
	}
	public function name() {
		return $this->name;
	}
}
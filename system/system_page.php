<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_main.php";

$core = new core_main();

if (!isset($_GET["page"])) {
	$core->move("login");
} else {
	$page = $_GET["page"];
	echo $core->route($page);
}

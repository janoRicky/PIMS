<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/system/core/core_controller.php";

class controller_edit extends core_controller {

	function __construct() {
		$this->load = new core_loader();
		$this->model("update");
	}

	function edit_item() {
		$id = $this->post("inp_id");
		$lot_no = $this->post("inp_lot_no");
		$brand = $this->post("inp_brand");
		$name = $this->post("inp_name");
		$name_generic = $this->post("inp_name_generic");
		$unit_price = $this->post("inp_unit_price");
		$unit_qty = $this->post("inp_unit_qty");
		$qty = $this->post("inp_qty");
		$date_purchase = $this->post("inp_date_purchase");
		$date_expire = $this->post("inp_date_expire");

		if ($id != NULL && $lot_no != NULL && $brand != NULL && $name != NULL && $name_generic != NULL && $unit_price != NULL && $unit_qty != NULL && $qty != NULL && $date_purchase != NULL && $date_expire != NULL) {
			if (strlen($unit_price) > 16 || strlen($qty) > 16 || strlen($date_purchase) > 16 || strlen($date_expire) > 16) {
				$_SESSION["alert"] = "Unit Price/Qty. cannot be longer than 16 characters.";
			} elseif (strlen($lot_no) > 32 || strlen($unit_qty) > 32) {
				$_SESSION["alert"] = "Lot No./Unit Amount cannot be longer than 32 characters.";
			} elseif (strlen($brand) > 64 || strlen($name) > 64 || strlen($name_generic) > 64) {
				$_SESSION["alert"] = "Brand/Name/Generic Name cannot be longer than 64 characters.";
			} else {
				$data = array(
					"lot_no" => $lot_no,
					"brand" => $brand,
					"name" => $name,
					"name_generic" => $name_generic,
					"unit_price" => $unit_price,
					"unit_qty" => $unit_qty,
					"qty" => $qty,
					"date_purchase" => $date_purchase,
					"date_expire" => $date_expire
				);
				if ($this->update->item_update($id, $data)) {
					$_SESSION["alert"] = "Successfully updated Item.";
				} else {
					$_SESSION["alert"] = "Something went wrong. Please try again later.";
				}
			}
		} else {
			$_SESSION["alert"] = "All inputs must be filled.";
		}
		header("Location: items");
		exit();
	}
	function edit_account() {
		$id = $this->post("inp_id");
		$name = $this->post("inp_name");
		$email = $this->post("inp_email");
		$password = $this->post("inp_password");

		if ($id != NULL && $name != NULL && $email != NULL && $password != NULL) {
			if (strlen($name) <= 60 || strlen($email) <= 60 || strlen($password) <= 60) {
				$data = array(
					"name" => $name,
					"email" => $email,
					"password" => password_hash($password, PASSWORD_DEFAULT)
				);
				if ($this->update->admin_update($id, $data)) {
					$_SESSION["alert"] = "Successfully updated Account.";
				} else {
					$_SESSION["alert"] = "Something went wrong. Please try again later.";
				}
			} else {
				$_SESSION["alert"] = "Input cannot be longer than 60.";
			}
		} else {
			$_SESSION["alert"] = "All inputs must be filled.";
		}
		header("Location: accounts");
		exit();
	}
}
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/PIMS/application/config/db.php";

class core_model extends db {

	function connect() {
		$conn = new mysqli($this->server(), $this->username(), $this->password(), $this->name());

		if ($conn->connect_error) {
		    return false;
		} else {
			return $conn;
		}
	}
	function param_binder($stmt, $data) {
		$arr_count = 0;
		$arr_size = count($data);
		$param_var = "";

		foreach ($data as $key => $val) {
			$arr_count++;
			if ($arr_size > 1) {
				$var_ref_name = "binder" . $arr_count;
				$$var_ref_name = $val;
				$param_arr[] = &$$var_ref_name;
			} else {
				$param_arr[] = $val;
			}
			$param_var .= "s";
		}
		if ($arr_size > 1) {
			array_unshift($param_arr, $param_var);
			call_user_func_array(array($stmt, "bind_param"), $param_arr);
		} else {
			$stmt->bind_param($param_var, $param_arr[0]);
		}

		return $stmt;
	}

	public function select($table, $conditions = NULL, $what = NULL) {
		if ($conn = $this->connect()){
			if ($what == "*" || $what == NULL) {
				$sql = "SELECT * FROM $table";
			} else {
				$sql = "SELECT $what FROM $table";
			}

			$stmt = NULL;
			if ($conditions != NULL) {
				$sql .= " WHERE ";

				$arr_count = 0;
				$arr_size = count($conditions);
				$param_var = "";
				foreach ($conditions as $key => $val) {
					$arr_count++;
					$sql .= "$key = ?";
					if ($arr_size > 1 && $arr_count != $arr_size) {
						$sql .= " AND ";
					}
				}

				$stmt = $conn->prepare($sql);
				$stmt = $this->param_binder($stmt, $conditions);
			} else {
				$stmt = $conn->prepare($sql);
			}
			
			if ($stmt->execute()) {
				$result = $stmt->get_result();
			}
			$stmt->close();
			$conn->close();
		}
		return $result;
	}
	public function add($table, $data,) {
		if ($conn = $this->connect()){
			$sql = "INSERT INTO $table (";

			$arr_count = 0;
			$arr_size = count($data);
			$param_var = "";
			$sql1 = "";
			foreach ($data as $key => $val) {
				$arr_count++;
				$sql .= "$key";
				$sql1 .= "?";
				if ($arr_size > 1 && $arr_count != $arr_size) {
					$sql .= ", ";
					$sql1 .= ", ";
				}
			}

			$sql .= ") VALUES (" . $sql1 . ")";

			$stmt = $conn->prepare($sql);
			$stmt = $this->param_binder($stmt, $data);
			
			if ($stmt->execute()) {
				$result = $stmt->get_result();
			}
			$stmt->close();
			$conn->close();
		}
		return $result;
	}
	public function update($table, $data, $conditions) {
		if ($conn = $this->connect()){
			$sql = "UPDATE $table SET ";

			$arr_count = 0;
			$arr_size = count($data);
			$param_var = "";
			foreach ($data as $key => $val) {
				$arr_count++;
				$sql .= "$key = ?";
				if ($arr_size > 1 && $arr_count != $arr_size) {
					$sql .= ", ";
				}
			}

			$sql .= " WHERE ";

			$arr_count = 0;
			$arr_size = count($conditions);
			$param_var = "";
			foreach ($conditions as $key => $val) {
				$arr_count++;
				$sql .= "$key = ?";
				if ($arr_size > 1 && $arr_count != $arr_size) {
					$sql .= " AND ";
				}
			}

			$data = array_merge($data, $conditions);

			$stmt = $conn->prepare($sql);
			$stmt = $this->param_binder($stmt, $data);
			
			if ($stmt->execute()) {
				$result = $stmt->get_result();
			}
			$stmt->close();
			$conn->close();
		}
		return $result;
	}
	public function delete($table, $conditions) {
		if ($conn = $this->connect()){
			$sql = "DELETE FROM $table WHERE ";

			$arr_count = 0;
			$arr_size = count($conditions);
			$param_var = "";
			foreach ($conditions as $key => $val) {
				$arr_count++;
				$sql .= "$key = ?";
				if ($arr_size > 1 && $arr_count != $arr_size) {
					$sql .= " AND ";
				}
			}

			$stmt = $conn->prepare($sql);
			$stmt = $this->param_binder($stmt, $conditions);
			
			if ($stmt->execute()) {
				$result = $stmt->get_result();
			}
			$stmt->close();
			$conn->close();
		}
		return $result;
	}
}

?>
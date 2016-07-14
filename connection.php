<?php

class Connection {
	public $db;

	function __construct($database, $user = "root", $pass = "") {

		$this->db = new PDO('mysql:host=localhost;dbname=' . $database, $user, $pass);
	}
	public function insertUser($insert) {
		$sql = "INSERT INTO user (firstname,lastname,username,password)
                VALUES (?,?,?,?);";
		$stmt = $this->db->prepare($sql);
		$stmt->execute($insert);
	}

}

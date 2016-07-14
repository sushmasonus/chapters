<?php
include 'connection.php';
$con = new Connection('new');
$sql = "select * from chapters";
$stmt = $this->db->query($sql);
$stmt->execute();
print_r($stmt);
$rows = $stmt->fetchAll();
?>

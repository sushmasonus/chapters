<?php
session_start();
include 'admin/connection.php';
$con = new Connection('new');
$sql = "select user.id from user where user.username = ? && user.password = ?;";
$stmt = $con->db->prepare($sql);
$stmt->execute([
	$_POST['username'],
	$_POST['password'],
]);
$user_id = $stmt->fetchColumn();
if (is_numeric($user_id)) {
	$_SESSION['user_id'] = $user_id;
	header('location:home.php');
} else {
	header('location:login.php?error=1');
}

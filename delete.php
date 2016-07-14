<?php
include "admin/connection.php";
$id = $_GET['id'];
    $con = new Connection('new');
    $del = $con->delete($id);
header('location:home.php');

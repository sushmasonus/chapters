<?php
include "admin/connection.php";

$con    =   new Connection('new');
$update =   [
                $_POST['name'],
                $_POST['content'],
                $_POST['id']
            ];
$update = $con->updateChapter($update);
header('location:home.php');
?>

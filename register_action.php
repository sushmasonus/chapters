<?php
include 'connection.php';
$flag = 0;
if ($_POST['firstname'] == "") {
    $flag = 1;
} else if ($_POST['lastname'] == "") {
    $flag = 1;
} else if ($_POST['username'] == "") {
    $flag = 1;
} else if ($_POST['password'] == "") {
    $flag = 1;
}
if ($flag) {
    header('location:register.php?error=1');
} else {
    $con = new Connection('new');
    $array = [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['username'],
            $_POST['password']
        ];
    $insert = $con->insertUser($array);
  header('location:login.php?success=1');

        }



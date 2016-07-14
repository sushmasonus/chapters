<?php
include 'connection.php';
$flag = 0;
if ($_POST['name'] == "")
    $flag = 1;
if ($flag) {
    header('location:add_chapter.php?error=1');
} else {
    $con = new Connection('new');
    $array = [
            $_POST['name'],
            $_POST['content']
        ];
    $insert = $con->insertChapter($array);
}

header('location:/home.php');


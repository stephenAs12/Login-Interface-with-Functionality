<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$levelId = $_SESSION['levelId'];
$levelName = ($_POST['school_level_name']) ? $_POST['school_level_name'] : '';

if ($levelId == '') {
    echo "Something was wrong";
} else {
    if ($levelName != '') {
        $sql = "UPDATE `school_level` SET `level_name`='$levelName' WHERE level_id='$levelId'";
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

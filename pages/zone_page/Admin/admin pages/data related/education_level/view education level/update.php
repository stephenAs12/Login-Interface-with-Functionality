<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$education_levelId = $_SESSION['educationLevelId'];
$education_levelName = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';

if ($education_levelId == '') {
    echo "Something was wrong";
} else {
    if ($education_levelName != '') {
        $sql = "UPDATE `education_level` SET `edu_level_name`='$education_levelName' WHERE lev_id='$education_levelId'";
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

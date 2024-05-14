<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$teacherLevelId = $_SESSION['teacherLevelId'];
$teacherLevelName = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';

if ($teacherLevelId == '') {
    echo "Something was wrong";
} else {
    if ($teacherLevelName != '') {
        $sql = "UPDATE `woreda` SET `woreda_name`='$teacherLevelName' WHERE woreda_id='$teacherLevelId'";
        if (mysqli_query($connect, $sql)) {
            echo true;
        }
    }else{
        echo "Can't empty";
    }
}



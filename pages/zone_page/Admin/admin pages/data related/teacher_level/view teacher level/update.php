<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$teacherLevelId = $_SESSION['teacherLevelId'];
$teacherLevelName = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';
$levelYear = ($_POST['level_year_name']) ? $_POST['level_year_name'] : '';

if ($teacherLevelId == '') {
    echo "Something was wrong";
} else {
    if ($teacherLevelName != '') {
        $sql = "UPDATE `teacher_level` SET `level_name`='$teacherLevelName' WHERE level_id='$teacherLevelId'";
    }
    if ($levelYear != '') {
        $sql = "UPDATE `teacher_level` SET `year`='$levelYear' WHERE level_id='$teacherLevelId'";
    }
    if ($teacherLevelName != '' && $levelYear != '') {
        $sql = "UPDATE `teacher_level` SET `level_name`='$teacherLevelName', `year`='$levelYear' WHERE level_id='$teacherLevelId'";
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

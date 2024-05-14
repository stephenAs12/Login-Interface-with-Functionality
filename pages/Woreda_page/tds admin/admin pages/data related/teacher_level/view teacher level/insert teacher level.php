<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$levelName = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';
$levelYear = ($_POST['level_year_name']) ? $_POST['level_year_name'] : '';

$sql = "INSERT INTO teacher_level(level_name, year) VALUES('$levelName', '$levelYear')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

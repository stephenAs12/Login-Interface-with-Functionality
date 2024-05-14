<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$levelName = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';
$region_id =$_SESSION['user_region_id'];
$zone_id =$_SESSION['user_zone_id'];

$sql = "INSERT INTO woreda(r_id, z_id, woreda_name) VALUES('$region_id', '$zone_id', '$levelName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

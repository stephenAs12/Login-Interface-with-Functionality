<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$associationId = ($_POST['association_name']) ? $_POST['association_name'] : '';
$levelId = ($_POST['school_level_name']) ? $_POST['school_level_name'] : '';
$schoolName = ($_POST['school_name']) ? $_POST['school_name'] : '';
$region         = $_SESSION['user_region_id'];
$zone         = $_SESSION['user_zone_id'];
$woreda         = $_SESSION['user_woreda_id'];

$sql = "INSERT INTO school(r_id, z_id, w_id, a_id, l_id, name) VALUES('$region', '$zone', '$woreda', '$associationId', '$levelId', '$schoolName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

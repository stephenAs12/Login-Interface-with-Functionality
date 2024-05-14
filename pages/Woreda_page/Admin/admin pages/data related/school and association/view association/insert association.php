<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$associationName = ($_POST['association_name']) ? $_POST['association_name'] : '';
$region         = $_SESSION['user_region_id'];
$zone         = $_SESSION['user_zone_id'];
$woreda         = $_SESSION['user_woreda_id'];

$sql = "INSERT INTO association(r_id, z_id, w_id, asso_name) VALUES('$region', '$zone', '$woreda', '$associationName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

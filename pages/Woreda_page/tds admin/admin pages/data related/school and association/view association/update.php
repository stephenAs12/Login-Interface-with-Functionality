<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$associationId = $_SESSION['ass_id'];
$associationName = ($_POST['ass_name_name']) ? $_POST['ass_name_name'] : '';


$sql = "UPDATE `association` SET `asso_name`='$associationName' WHERE asso_id='$associationId'";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

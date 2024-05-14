<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$departmentName = ($_POST['department_name']) ? $_POST['department_name'] : '';

$sql = "INSERT INTO department(dept_name) VALUES('$departmentName')";

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

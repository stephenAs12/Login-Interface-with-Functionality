
<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$user_id         = $_SESSION['u_id'];
$fname       = (htmlspecialchars(stripslashes($_POST['first_name_name']))) ? htmlspecialchars(stripslashes($_POST['first_name_name'])) : '';
$mname       = (htmlspecialchars(stripslashes($_POST['middle_name_name']))) ? htmlspecialchars(stripslashes($_POST['middle_name_name']))  : '';
$lname       = (htmlspecialchars(stripslashes($_POST['last_name_name']))) ? htmlspecialchars(stripslashes($_POST['last_name_name']))  : '';
$phone       = (htmlspecialchars(stripslashes($_POST['user_phone_name']))) ? htmlspecialchars(stripslashes($_POST['user_phone_name']))  : '';
$role_name       = (htmlspecialchars(stripslashes($_POST['role_name']))) ? htmlspecialchars(stripslashes($_POST['role_name']))  : '';





        $sql = "UPDATE `user` SET `fname`='$fname', `mname`='$mname', `lname`='$lname', `phone`='$phone', `role`='$role_name' WHERE id='$user_id'";


if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}


<?php

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$firstName       = (htmlspecialchars(stripslashes($_POST['first_name_name']))) ? htmlspecialchars(stripslashes($_POST['first_name_name'])) : '';
$middleName       = (htmlspecialchars(stripslashes($_POST['middle_name_name']))) ? htmlspecialchars(stripslashes($_POST['middle_name_name']))  : '';
$lastName       = (htmlspecialchars(stripslashes($_POST['last_name_name']))) ? htmlspecialchars(stripslashes($_POST['last_name_name']))  : '';
$woreda         = "Wonberma";
$userPhone       = (htmlspecialchars(stripslashes($_POST['user_phone_name']))) ? htmlspecialchars(stripslashes($_POST['user_phone_name']))  : '';
$userEmail       = (htmlspecialchars(stripslashes($_POST['user_email_name']))) ? htmlspecialchars(stripslashes($_POST['user_email_name']))  : '';
$userPass = (htmlspecialchars(stripslashes($_POST['user_password_name']))) ? htmlspecialchars(stripslashes($_POST['user_password_name']))  : '';
$userPassword = password_hash($userPass, PASSWORD_DEFAULT);

$sql = "INSERT INTO user(fname, mname, lname, woreda, phone, email, password) VALUES ('$firstName','$middleName','$lastName', '$woreda', '$userPhone','$userEmail','$userPassword')";

if (mysqli_query($connect, $sql)) {
   
    
    if (mysqli_affected_rows($connect)) {
        echo true;
    }else{
        echo "Something was wrong";
    }
} else {
    echo "Error"." >> ".mysqli_error($connect);
}

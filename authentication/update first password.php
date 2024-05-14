<?php
session_start();
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
    $email=$_SESSION['user_email'];
    $newPass= $_POST['password'];
    $cpassword=$_POST['cpassword'];
    $newPassword=password_hash($newPass, PASSWORD_DEFAULT);
	
			if ($newPass&&$cpassword) {
				if ($newPass==$cpassword) {
                    $query="UPDATE user SET password='$newPassword', first_login='1' WHERE email='$email'";
                    // echo $email;
                
                    if(mysqli_query($connect, $query)){
                        header('location: change password.php?success=success');
                    }
				}
                else
                {
                    header('location: change password.php? success=password is not the same');
                   
                }	
			}
    // header('location:view_user.php');

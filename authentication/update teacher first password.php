<?php
session_start();
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
    $phone=$_SESSION['teacher_phone'];
    $newPass= $_POST['password'];
    $cpassword=$_POST['cpassword'];
    $newPassword=password_hash($newPass, PASSWORD_DEFAULT);
	
			if ($newPass&&$cpassword) {
				if ($newPass==$cpassword) {
                    $query="UPDATE tds SET password='$newPassword', first_login='1' WHERE phone='$phone'";
                    // echo $email;
                
                    if(mysqli_query($connect, $query)){
                        header('location: teacher change password.php?success=success');
                    }
				}
                else
                {
                    header('location: teacher change password.php? success=password is not the same');
                   
                }	
			}
    // header('location:view_user.php');

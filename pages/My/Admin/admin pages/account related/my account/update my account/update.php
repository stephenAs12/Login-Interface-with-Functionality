<?php


session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) == 'Regional Admin') {
    $uId = $_SESSION['user_id'];
    $uFname = $_SESSION['user_fname'];

    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

    $userPhone       = (htmlspecialchars(stripslashes($_POST['user_phone_name']))) ? htmlspecialchars(stripslashes($_POST['user_phone_name']))  : '';
    $userEmail       = (htmlspecialchars(stripslashes($_POST['user_email_name']))) ? htmlspecialchars(stripslashes($_POST['user_email_name']))  : '';


    if (!empty($uId) && !empty($userEmail)) {
        $sql = "UPDATE users SET uemail='$userEmail' WHERE user_id=$uId";

        if (mysqli_query($connect, $sql)) {
            echo true;
        } else {
            echo mysqli_error($connect);
        }
    }

    if (!empty($uId) && !empty($userPhone)) {
        $sql = "UPDATE users SET uphone='$userPhone' WHERE user_id=$uId";

        if (mysqli_query($connect, $sql)) {
            echo true;
        } else {
            echo mysqli_error($connect);
        }
    }

    if (isset($_POST["submit"])) {
        $title = $uFname;
        $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        $uploads_dir = './../../../../../../images/pp';
        $imageFileType = strtolower(pathinfo($pname, PATHINFO_EXTENSION));
        $path = $uploads_dir . '/' . $pname;
        $sql = "UPDATE users SET uimg='$path' WHERE user_id=$uId";
        if ($_FILES["file"]["size"] <= 1000000) {
            if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
                if (mysqli_query($connect, $sql)) {
                    move_uploaded_file($tname, $path);

                    echo true;
                } else {
                    echo "Unknown Error Occurred";
                }
            } else {
                echo "image must be jpg, jpeg, png";
            }
        } else {
            echo "file size must be less than 5mb";
        }
    }

    if (empty($uId) || empty($userEmail) || empty($userPhone)) {
        echo "Please fill the field you want to update";
    }
} else {
    header("location: ./../../../../../../authentication/login.php");
}

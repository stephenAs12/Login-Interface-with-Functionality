<?php
session_start();
include 'db_conn.php';
if (isset($_POST['oldpassword_name']) && isset($_SESSION['user_email'])) {
    $oldPassword       = ($_POST['oldpassword_name']) ? $_POST['oldpassword_name'] : '';
    $email = $_SESSION['user_email'];
    if (isset($_POST['new_password_name']) || isset($_POST['email_name']) || isset($_POST['phone_name']) || isset($_POST['img_name'])) {
        $newPassword = ($_POST['new_password_name']) ? $_POST['new_password_name'] : '';
        $newEmail = ($_POST['email_name']) ? $_POST['email_name'] : '';
        $newPhone = ($_POST['phone_name']) ? $_POST['phone_name'] : '';
        $newImage = $_FILES['img_name']['name'];
    }
    $stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();
        $user_password = $user['password'];
        if (password_verify($oldPassword, $user_password)) {
            if ($newPassword != '' || $newEmail != '' || $newPhone != '' || $newImage != '') {
                $checkTrue = 0;
                if (!empty($newPassword)) {
                    $NewPassword       = ($_POST['new_password_name']) ? $_POST['new_password_name'] : '';
                    $userPassword = password_hash($NewPassword, PASSWORD_DEFAULT);
                    $updateStmt = $conn->prepare("UPDATE user SET password=? WHERE email=?");
                    try {
                        $updateStmt->execute([$userPassword, $email]);
                        $checkTrue = 1;
                    } catch (Exception $e) {
                        echo "Something was wrong in your new password";
                    }
                }
                if (!empty($newPhone)) {
                    $Phone       = ($_POST['phone_name']) ? $_POST['phone_name'] : '';
                    $updateStmt = $conn->prepare("UPDATE user SET phone=? WHERE email=?");
                    try {
                        $updateStmt->execute([$Phone, $email]);
                        $_SESSION['user_phone'] = $Phone;
                        $checkTrue = 1;
                    } catch (Exception $e) {
                        echo "Something was wrong in your new phone";
                    }
                }
                if (!empty($newEmail)) {
                    $new_email       = ($_POST['email_name']) ? $_POST['email_name'] : '';
                    $updateStmt = $conn->prepare("UPDATE user SET email=? WHERE email=?");
                    try {
                        $updateStmt->execute([$new_email, $email]);
                        $_SESSION['user_email'] = $new_email;
                        $checkTrue = 1;
                    } catch (Exception $e) {
                        echo "Something was wrong in your new email";
                    }
                }
                if (!empty($newImage)) {
                    $user_full_name = $_SESSION['user_full_name'];
                    $img_name = $_FILES["img_name"]["name"];

                    $tname = $_FILES["img_name"]["tmp_name"];
                    $uploads_dir = '../../../../../../../images/tds pp/';
                    $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
                    $ppname = keygen() . "(" . $user_full_name . ")" . "." . $imageFileType;
                    $updateStmt = $conn->prepare("UPDATE user SET img=? WHERE email=?");
                    $checker = false;
                    if ($_FILES["img_name"]["size"] <= 5000000) {
                        if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {

                            try {
                                $updateStmt->execute([$ppname, $email]);
                                $real_path = realpath($_FILES["img_name"]["tmp_name"]);
                                resize_crop_image(158, 158, $real_path, $uploads_dir . $ppname);
                                $_SESSION['user_image'] = $ppname;
                                $checkTrue = 1;
                            } catch (Exception $e) {
                                echo "Something was in your new email";
                            }
                        } else {
                            echo "image must be jpg, jpeg, png";
                        }
                    } else {
                        echo "image size must be less than 5mb";
                    }
                    // &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
                    // $new_email       = ($_POST['email_name']) ? $_POST['email_name'] : '';
                    // $updateStmt = $conn->prepare("UPDATE users SET uemail=? WHERE uemail=?");
                    // try {
                    //     $updateStmt->execute([$new_email, $email]);
                    //     $checkTrue = 1;
                    // } catch (Exception $e) {
                    //     echo "Something was in your new email";
                    // }
                }
                if ($checkTrue == 1) {
                    echo true;
                }
            } else {
                echo "Fill at least one field";
            }
        } else {
            echo "Incorrect old Password";
        }
    }
}
function keygen($length = 20)
{
    $key = '';
    list($usec, $sec) = explode(' ', microtime());
    mt_srand((float) $sec + ((float) $usec * 100000));

    $inputs = array_merge(range('z', 'a'), range(0, 9), range('A', 'Z'));
    for ($i = 0; $i < $length; $i++) {
        $key .= $inputs{
        mt_rand(0, 61)};
    }
    return $key;
}
function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80)
{
    $imgsize = getimagesize($source_file);
    $width = $imgsize[0];
    $height = $imgsize[1];
    $mime = $imgsize['mime'];

    switch ($mime) {
        case 'image/gif':
            $image_create = "imagecreatefromgif";
            $image = "imagegif";
            break;

        case 'image/png':
            $image_create = "imagecreatefrompng";
            $image = "imagepng";
            $quality = 7;
            break;

        case 'image/jpeg':
            $image_create = "imagecreatefromjpeg";
            $image = "imagejpeg";
            $quality = 80;
            break;

        default:
            return false;
            break;
    }

    $dst_img = imagecreatetruecolor($max_width, $max_height);
    $src_img = $image_create($source_file);

    $width_new = $height * $max_width / $max_height;
    $height_new = $width * $max_height / $max_width;
    //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
    if ($width_new > $width) {
        //cut point by height
        $h_point = (($height - $height_new) / 2);
        //copy image
        imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
    } else {
        //cut point by width
        $w_point = (($width - $width_new) / 2);
        imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
    }

    $image($dst_img, $dst_dir, $quality);

    if ($dst_img) imagedestroy($dst_img);
    if ($src_img) imagedestroy($src_img);
}

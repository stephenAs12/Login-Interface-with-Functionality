<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
$uploads_dir = '../../../../../../../../images/tds pp/';

$teacherId = $_SESSION['tds_id'];
$fname = ($_POST['first_name_name']) ? $_POST['first_name_name'] : '';
$mname = ($_POST['middle_name_name']) ? $_POST['middle_name_name'] : '';
$lname = ($_POST['last_name_name']) ? $_POST['last_name_name'] : '';
$user_full_name = $fname . $mname . $lname;
$m_name = ($_POST['m_name']) ? $_POST['m_name'] : '';
$sex = ($_POST['sex_name']) ? $_POST['sex_name'] : '';
$type = ($_POST['type_name']) ? $_POST['type_name'] : '';
$birth_date = ($_POST['birth_day_name']) ? $_POST['birth_day_name'] : '';
$employment_period = ($_POST['emp_period_name']) ? $_POST['emp_period_name'] : '';
$reduced_service = ($_POST['service_name']) ? $_POST['service_name'] : '';
$te_other_service = ($_POST['te_other_name']) ? $_POST['te_other_name'] : '';
$other_service = ($_POST['other_name']) ? $_POST['other_name'] : '';
$edu_level_name = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';
$dept_name = ($_POST['department_name']) ? $_POST['department_name'] : '';
$teaches_name = ($_POST['teaches_name']) ? $_POST['teaches_name'] : '';
$minor_name = ($_POST['minor_name']) ? $_POST['minor_name'] : '';
$three_major_name = ($_POST['three_major_name']) ? $_POST['three_major_name'] : '';
$level_name = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';
$retirement_number = ($_POST['retirement_name']) ? $_POST['retirement_name'] : '';
$name = ($_POST['school_name']) ? $_POST['school_name'] : '';
$asso_name = ($_POST['association_name']) ? $_POST['association_name'] : '';
$warranty = ($_POST['warranty_name']) ? $_POST['warranty_name'] : '';
$salary = ($_POST['salary_name']) ? $_POST['salary_name'] : '';
$shelf = ($_POST['shelf_name']) ? $_POST['shelf_name'] : '';
$kent = ($_POST['kent_name']) ? $_POST['kent_name'] : '';
$phone = ($_POST['phone_name']) ? $_POST['phone_name'] : '';
$newImage = $_FILES['img_name']['name'];
$warranter_name = ($_POST['full_name_name']) ? $_POST['full_name_name'] : '';
$warranter_salary = ($_POST['warranter_salary_name']) ? $_POST['warranter_salary_name'] : '';
$warranter_photo = $_FILES['warranter_img_name']['name'];

if ($birth_date == '') {
    $birth_date = $_SESSION['teacher_birth_date'];
}
if ($employment_period == '') {
    $employment_period = $_SESSION['teacher_employment_period'];
}

if ($teacherId == '') {
    echo "Something was wrong";
} else {
    if (
        $fname == '' && $mname == '' && $lname == '' &&
        $sex == '' && $type == '' && $birth_date == '' &&
        $employment_period == '' && $other_service == '' && $te_other_service == '' && $edu_level_name == '' &&
        $dept_name == '' && $level_name == '' && $retirement_number == '' &&
        $name == '' && $asso_name == '' && $warranty == '' &&
        $salary == '' && $shelf == '' && $kent == '' &&
        $phone == '' && $newImage == '' && $warranter_name == '' &&
        $warranter_salary == '' && $warranter_photo == ''
    ) {
        echo "Please fill at least one field";
    } else {
        if ($newImage=='') {
            $sql = "UPDATE `tds` SET `fname`='$fname', 
                                `mname`='$mname', 
                                `lname`='$lname', 
                                `mother_name`='$m_name', 
                                `sex`='$sex', 
                                `type`='$type', 
                                `birth_date`='$birth_date', 
                                `employment_period`='$employment_period', 
                                `reduced_service`='$reduced_service', 
                                `te_other_service`='$te_other_service', 
                                `other_service`='$other_service', 
                                `education_level`='$edu_level_name', 
                                `department`='$dept_name', 
                                `teaches`='$teaches_name', 
                                `minor`='$minor_name', 
                                `3_major`='$three_major_name', 
                                `teacher_level`='$level_name', 
                                `retirement_number`='$retirement_number', 
                                `school`='$name', 
                                `association`='$asso_name', 
                                `warranty`='$warranty', 
                                `salary`='$salary', 
                                `shelf`='$shelf', 
                                `kent`='$kent', 
                                `phone`='$phone', 
                                `warranter_name`='$warranter_name', 
                                `warranter_salary`='$warranter_salary', 
                                `warranter_photo`='$warranter_photo' 
                                WHERE tds_id='$teacherId'";
        }
        if (!empty($newImage)) {
            $img_name = $_FILES["img_name"]["name"];

    $tname = $_FILES["img_name"]["tmp_name"];
    $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    $ppname = keygen() . "(" . $user_full_name . ")" . "." . $imageFileType;
    $imageSql = "UPDATE `tds` SET `image`='$ppname' WHERE tds_id='$teacherId'";

    if (mysqli_query($connect, $imageSql)) {
        $real_path = realpath($_FILES["img_name"]["tmp_name"]);
        resize_crop_image(158, 158, $real_path, $uploads_dir . $ppname);
        if (!empty($warranterImage)) {
            $wreal_path = realpath($_FILES["warranter_img_name"]["tmp_name"]);
            resize_crop_image(158, 158, $wreal_path, $uploads_dir . $wppname);
        }
        echo true;
    } else {
        echo "Something was wrong" . mysqli_error($connect);
    }
    
        }
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
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
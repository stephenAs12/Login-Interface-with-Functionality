<?php

session_start();


$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
$message = '';
$uploads_dir = '../../../../../../../images/tds pp/';

$firstName       = ($_POST['first_name_name']) ? $_POST['first_name_name'] : '';
$middleName       = ($_POST['middle_name_name']) ? $_POST['middle_name_name'] : '';
$lastName       = ($_POST['last_name_name']) ? $_POST['last_name_name'] : '';
$m_name       = ($_POST['m_name']) ? $_POST['m_name'] : '';
$user_full_name = $firstName . $middleName . $lastName;
$sex       = ($_POST['sex_name']) ? $_POST['sex_name'] : '';
$type       = "ሱፐርቫይዘር";
$birthDate       = ($_POST['birth_day_name']) ? $_POST['birth_day_name'] : '';
$employmentPeriod       = ($_POST['emp_period_name']) ? $_POST['emp_period_name'] : '';
$te_otherService       = ($_POST['te_other_name']) ? $_POST['te_other_name'] : '';
$otherService       = ($_POST['other_name']) ? $_POST['other_name'] : '';
$reduced_service       = ($_POST['reduced_service_name']) ? $_POST['reduced_service_name'] : '';
$educationLevel       = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';
$teacherLevel       = ($_POST['teacher_level_name']) ? $_POST['teacher_level_name'] : '';
$department       = ($_POST['department_name']) ? $_POST['department_name'] : '';
$minor       = ($_POST['minor_name']) ? $_POST['minor_name'] : '';
$three_major       = ($_POST['3_major_name']) ? $_POST['3_major_name'] : '';
$retirementNumber       = ($_POST['retirement_name']) ? $_POST['retirement_name'] : '';
$region       = $_SESSION['user_region_id'];
$zone       = $_SESSION['user_zone_id'];
$woreda       = $_SESSION['user_woreda_id'];
$school       = ($_POST['school_name']) ? $_POST['school_name'] : '';
$school_re = explode(",", $school);
$school = $school_re[0];
$school_level = $school_re[1];
$association       = ($_POST['association_name']) ? $_POST['association_name'] : '';
$warranty       = ($_POST['warranty_name']) ? $_POST['warranty_name'] : '';
$salary       = ($_POST['salary_name']) ? $_POST['salary_name'] : '';
$phone       = ($_POST['phone_name']) ? $_POST['phone_name'] : '';
$shelf       = ($_POST['shelf_name']) ? $_POST['shelf_name'] : '';
$kent       = ($_POST['kent_name']) ? $_POST['kent_name'] : '';
$newImage = $_FILES['img_name']['name'];

$warranty       = ($_POST['warranty_name']) ? $_POST['warranty_name'] : '';
$warranterFullName = ($_POST['full_name_name']) ? $_POST['full_name_name'] : '';
$warranterJop = ($_POST['jop_name']) ? $_POST['jop_name'] : '';
$warranterSalary = ($_POST['warranter_salary_name']) ? $_POST['warranter_salary_name'] : '';
$warranterImage = $_FILES['warranter_img_name']['name'];

$yw       = ($_POST['yw_name']) ? $_POST['yw_name'] : '';
$yw_full       = ($_POST['yw_full_name_name']) ? $_POST['yw_full_name_name'] : '';
$yw_inst       = ($_POST['yw_inst_name_name']) ? $_POST['yw_inst_name_name'] : '';
$yw_re       = ($_POST['yw_re_name_name']) ? $_POST['yw_re_name_name'] : '';
$cr_name       = ($_POST['cr_name']) ? $_POST['cr_name'] : '';
$cr_type_name       = ($_POST['cr_dr_name']) ? $_POST['cr_dr_name'] : '';
$pl_dr       = ($_POST['pl_name']) ? $_POST['pl_name'] : '';
$place_day       = ($_POST['place_day_name']) ? $_POST['place_day_name'] : '';

$registered_by = $_SESSION['user_full_name'];
$teacherPassword = password_hash($birthDate, PASSWORD_DEFAULT);

$ethiopian_c_date = ($_POST['ec_date_name']) ? $_POST['ec_date_name'] : '';

$birthDateExplode = explode("-", $birthDate);
$employmentPeriodExplode = explode("-", $employmentPeriod);
$placeExplode = explode("-", $place_day);
$ethiopian_c_dateExplode = explode("-", $ethiopian_c_date);

$b_date = '';
$b_month = '';
$b_year = '';
$e_date = '';
$e_month = '';
$e_year = '';
$p_date = '';
$p_month = '';
$p_year = '';

if (isset($birthDateExplode[0])) {
    $b_date = $birthDateExplode[0];
}
if (isset($birthDateExplode[1])) {
    $b_month = $birthDateExplode[1];
}
if (isset($birthDateExplode[2])) {
    $b_year = $birthDateExplode[2];
}

if (isset($employmentPeriodExplode[0])) {
    $e_date = $employmentPeriodExplode[0];
}
if (isset($employmentPeriodExplode[1])) {
    $e_month = $employmentPeriodExplode[1];
}
if (isset($employmentPeriodExplode[2])) {
    $e_year = $employmentPeriodExplode[2];
}

if (isset($placeExplode[0])) {
    $p_date = $placeExplode[0];
}
if (isset($placeExplode[1])) {
    $p_month = $placeExplode[1];
}
if (isset($placeExplode[2])) {
    $p_year = $placeExplode[2];
}


if (isset($ethiopian_c_dateExplode[2])) {
    $c_date = $ethiopian_c_dateExplode[2];
}
if (isset($ethiopian_c_dateExplode[1])) {
    $c_month = $ethiopian_c_dateExplode[1];
}
if (isset($ethiopian_c_dateExplode[0])) {
    $c_year = $ethiopian_c_dateExplode[0];
}


function bdate_fun($b_date, $b_month, $b_year, $c_year)
{
    if ($b_date <= 30 && $b_month <= 12 && $b_year >= $c_year - 65 && $b_year <= $c_year - 17) {
        return true;
    } elseif ($b_date <= 6 && $b_month == 13 && $b_year >= $c_year - 65 && $b_year <= $c_year - 17) {
        return true;
    } else {
        return false;
    }
}
function edate_fun($b_year, $e_date, $e_month, $e_year, $ethiopian_c_date)
{
    $formated_edate = $e_year . '-' . $e_month . '-' . $e_date;
    if ($e_date <= 30 && $e_month <= 12) {
        if ($formated_edate <= $ethiopian_c_date && $e_year >= $b_year + 17) {
            return true;
        }
    } elseif ($e_date <= 6 && $e_month == 13) {
        if ($formated_edate <= $ethiopian_c_date && $e_year >= $b_year + 17) {
            return true;
        }
    } else {
        return false;
    }
}
function pdate_fun($p_date, $p_month, $p_year, $c_date, $c_month, $c_year){
    if ($p_year<=$c_year) {
        if ($p_month<$c_month) {
            return true;
        } elseif($p_month==$c_month) {
            if ($p_date<=$c_date) {
                return true;
            } else {
                return false;
            }
            
        }else{
            return false;
        }
        
    } else {
        return false;
    }
    
}


if ($minor == '') {
    $minor = 52;
}

if ($three_major == '') {
    $three_major = 52;
}

if ($reduced_service == "") {
    $reduced_service = "00/00/00";
}

if ($otherService == "") {
    $otherService = "00/00/00";
}
if ($te_otherService == "") {
    $te_otherService = "00/00/00";
}

// if (strlen($service) == 8 && strpos($service, '/')) {
//     $int_service = explode("/", $service);
//     $int_s_year = $int_service[0];
//     $int_s_month = $int_service[1];
//     $int_s_date = $int_service[2];
// }

// $int_otherService = explode("/", $otherService);
// $int_o_year = $int_otherService[0];
// $int_o_month = $int_otherService[1];
// $int_o_date = $int_otherService[2];

// $final_otherService = $int_o_month . '/' . $int_o_date . '/' . $int_o_year;


$wppname='';
if ($warranty != 'አዎ አለው') {
    $warranterFullName =  '';
    $warranterJop =  '';
    $warranterSalary =  '';
    $warranterImage = '';
    $warranter_bool = true;
} else {
    if ($warranterFullName == '' || $warranterJop == '' || $warranterSalary == '' || $warranterImage == '') {
        $warranter_bool = false;
    } else {
        $wtname = $_FILES["warranter_img_name"]["tmp_name"];
        $wimageFileType = strtolower(pathinfo($warranterImage, PATHINFO_EXTENSION));
        $wppname = keygen() . "(" . $user_full_name . " " . $warranterFullName . ")" . "." . $wimageFileType;
        $warranter_bool = true;
    }
}

if ($yw != 'አዎ ሁኗል') {
    $yw_full = '';
    $yw_inst = '';
    $yw_re = '';
    $yw_bool = true;
} else {
    if ($yw_full == '' || $yw_inst == '' || $yw_re == '') {
        $yw_bool = false;
    } else {
        $yw_bool = true;
    }
}
if ($yw != 'አዎ ሁኗል') {
    $yw_full = '';
    $yw_inst = '';
    $yw_re = '';
    $yw_bool = true;
} else {
    if ($yw_full == '' || $yw_inst == '' || $yw_re == '') {
        $yw_bool = false;
    } else {
        $yw_bool = true;
    }
}
if ($cr_name != 'አዎ አለበት') {
    $cr_type_name = '';
    $cr_bool = true;
} else {
    if ($cr_type_name == '') {
        $cr_bool = false;
    } else {
        $cr_bool = true;
    }
}
if ($pl_dr != 'አዎ ተደራጅቷል') {
    $place_day = '';
    $pl_bool = true;
} else {
    if ($place_day == '') {
        $pl_bool = false;
    } else {
        $pl_bool = true;
    }
}
// $final_image       = null;

if (!empty($newImage)) {

    $img_name = $_FILES["img_name"]["name"];

    $tname = $_FILES["img_name"]["tmp_name"];
    $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    $ppname = keygen() . "(" . $user_full_name . ")" . "." . $imageFileType;
    $checker = false;
    if ($_FILES["img_name"]["size"] <= 5000000) {
        if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {

            $sql = "INSERT INTO tds(fname, mname, lname, mother_name, sex, type, birth_date, employment_period, reduced_service, te_other_service, other_service, education_level, department, minor, 3_major, teacher_level, retirement_number, region, zone, woreda, school, school_level, association, warranty, salary, shelf, kent, phone, image, warranter_jop, warranter_name, warranter_salary, warranter_photo, registered_by, yw, yw_full_name, yw_insti, yw_reason, credit, credit_type, place, place_date, password) 
            VALUES('$firstName', '$middleName', '$lastName', '$m_name', '$sex', '$type', '$birthDate', '$employmentPeriod', '$reduced_service', '$te_otherService', '$otherService', '$educationLevel', '$department','$minor', '$three_major', '$teacherLevel', '$retirementNumber', '$region', '$zone', '$woreda', '$school', '$school_level','$association','$warranty', '$salary', '$shelf', '$kent', '$phone', '$ppname', '$warranterJop', '$warranterFullName', '$warranterSalary', '$wppname', '$registered_by', '$yw', '$yw_full', '$yw_inst', '$yw_re', '$cr_name', '$cr_type_name', '$pl_dr', '$place_day', '$teacherPassword')";

            // $pattern1 = "/(0[0-9]|1[011])[- \/.](0[1-9]|[12][0-9]|2[00])[- \/.]()\d\d/";
            $pattern2 = "/(0[0-9]|1[011])[- \/.](0[0-9]|[12][0-9]|2[00])[- \/.]()\d\d/";
            if (strlen($reduced_service) == 8) {
                $int_r_service = explode("/", $reduced_service);
                $int_rs_year = $int_r_service[0];
                $int_rs_month = $int_r_service[1];
                $int_rs_date = $int_r_service[2];

                $reduced_service = $int_rs_month . '/' . $int_rs_date . '/' . $int_rs_year;
            }
            if (strlen($te_otherService) == 8) {
                $int_te_otherService = explode("/", $te_otherService);
                $int_te_year = $int_te_otherService[0];
                $int_te_month = $int_te_otherService[1];
                $int_te_date = $int_te_otherService[2];

                $te_otherService = $int_te_month . '/' . $int_te_date . '/' . $int_te_year;
            }
            if (strlen($otherService) == 8) {
                $int_otherService = explode("/", $otherService);
                $int_o_year = $int_otherService[0];
                $int_o_month = $int_otherService[1];
                $int_o_date = $int_otherService[2];

                $otherService = $int_o_month . '/' . $int_o_date . '/' . $int_o_year;
            }


            if (bdate_fun($b_date, $b_month, $b_year, $c_year) && edate_fun($b_year, $e_date, $e_month, $e_year, $ethiopian_c_date)) {
                if (preg_match($pattern2, $reduced_service) && strlen($reduced_service) == 8) {
                    if (preg_match($pattern2, $te_otherService) && strlen($te_otherService) == 8) {
                        if (preg_match($pattern2, $otherService) && strlen($otherService) == 8) {
                            if ($warranter_bool == true) {
                                if ($yw_bool == true) {
                                    if ($cr_bool == true) {
                                        if ($pl_bool == true) {
                                            if (pdate_fun($p_date, $p_month, $p_year, $c_date, $c_month, $c_year)) {
                                                if (mysqli_query($connect, $sql)) {
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
                                            } else {
                                                echo "እባክዎ ቦታ የተደራጀበትን ዘመን በትክክል ያስገቡ!";
                                            }
                                            
                                        } else {
                                            echo "እባክዎ ቦታ ተደራጅቶ ከሆነ ሙሉ መረጃዉን ያስገቡ!";
                                        }
                                    } else {
                                        echo "እባክዎ ብድር ካለበት ሙሉ መረጃዉን ያስገቡ!";
                                    }
                                } else {
                                    echo "እባክዎ ዋስ ሁኖ ከሆነ ሙሉ መረጃዉን ያስገቡ!";
                                }
                            } else {
                                echo "እባክዎ ቅጥር ሲፈፅም ዋስ ካለው ሙሉ መረጃዉን ያስገቡ!";
                            }
                        } else {
                            echo "Please use this format for other service 👉 yy/mm/dd(00/00/00)";
                        }
                    } else {
                        echo "Please use this format for other service in teaching 👉 yy/mm/dd(00/00/00)";
                    }
                } else {
                    echo "Please use this format for reduced service 👉 yy/mm/dd(00/00/00)";
                }
            } else {
                echo "Please check birth date or employment period";
            }
        } else {
            echo "image must be jpg, jpeg, png";
        }
    } else {
        echo "image size must be less than 5mb";
    }
} else {
    echo "image is required";
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

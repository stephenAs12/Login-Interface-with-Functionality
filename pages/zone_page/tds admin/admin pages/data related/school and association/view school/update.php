<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$schoolId = $_SESSION['schoolId'];
$associationName = ($_POST['association_name']) ? $_POST['association_name'] : '';
$levelName = ($_POST['school_level_name']) ? $_POST['school_level_name'] : '';
$schoolName = ($_POST['school_name']) ? $_POST['school_name'] : '';

if ($schoolId == '') {
    echo "Something was wrong";
}else{
    if ($associationName == '' && $levelName == '' && $schoolName == '') {
        echo "Please fill at least one field";
    }else{
        if ($associationName !='') {
            $sql = "UPDATE `school` SET `a_id`='$associationName' WHERE id='$schoolId'";
        }if($levelName != ''){
            $sql = "UPDATE `school` SET `l_id`='$levelName' WHERE id='$schoolId'";
        }if($schoolName != ''){
            $sql = "UPDATE `school` SET `name`='$schoolName' WHERE id='$schoolId'";
        }if($associationName != '' && $levelName != ''){
            $sql = "UPDATE `school` SET `a_id`='$associationName', `l_id`='$levelName' WHERE id='$schoolId'";
        }if($associationName != '' && $schoolName != ''){
            $sql = "UPDATE `school` SET `a_id`='$associationName', `name`='$schoolName' WHERE id='$schoolId'";
        }if($levelName != '' && $schoolName !=''){
            $sql = "UPDATE `school` SET `l_id`='$levelName', `name`='$schoolName' WHERE id='$schoolId'";
        }if($associationName != '' && $levelName !='' && $schoolName !=''){
            $sql = "UPDATE `school` SET `a_id`='$associationName', `l_id`='$levelName', `name`='$schoolName' WHERE id='$schoolId'";
        }
    }
}

if (mysqli_query($connect, $sql)) {
    echo true;
} else {
    echo mysqli_error($connect);
}

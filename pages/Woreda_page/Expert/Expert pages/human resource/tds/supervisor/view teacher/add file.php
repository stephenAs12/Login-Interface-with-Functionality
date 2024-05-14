
<?php
session_start();

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

if(isset($_POST['folder_name'])){
    $folder_name = $_POST['folder_name'];
}else{
    $folder_name = $_SESSION['folder_name'];
}

$folderName       = $folder_name;
$fileName       = (htmlspecialchars(stripslashes($_POST['file_name_name']))) ? htmlspecialchars(stripslashes($_POST['file_name_name']))  : '';
$description       = (htmlspecialchars(stripslashes($_POST['description_name']))) ? htmlspecialchars(stripslashes($_POST['description_name']))  : '';
$image       = $_FILES["file_name"]["name"];
$tdsId = $_SESSION['tds_id'];
$fname = $_SESSION['teacher_fname'];
$mname = $_SESSION['teacher_mname'];
$lname = $_SESSION['teacher_lname'];


$sql = "INSERT INTO file(folder, tds, file_name, description, file_path) VALUES ('$folderName', '$tdsId', '$fileName','$description', '$image')";


$pname = randGene().keygen() . "-" . $fname . "-" . $mname . "-" . $lname . "-" . "id" . $tdsId . "-" . $folderName . "-" . $_FILES["file_name"]["name"];

    $tname = $_FILES["file_name"]["tmp_name"];

    $uploads_dir = '../../../../../../../../file/';

    $imageFileType = strtolower(pathinfo($pname, PATHINFO_EXTENSION));
    $sql = "INSERT INTO file(folder, tds, file_name, description, file_path) VALUES ('$folderName', '$tdsId', '$fileName','$description', '$pname')";

    if ($_FILES["file_name"]["size"] <= 10000000000) {
        if ($imageFileType == "pdf" || $imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
            if (mysqli_query($connect, $sql)) {
                move_uploaded_file($tname, $uploads_dir . '/' . $pname);
                echo true;
            } else {
                echo "Unknown Error Occurred";
            }
        } else {
            echo "file must be pdf, jpg, jpeg, png";
        }
    } else {
        echo "file size must be less than 5mb";
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

function randGene($length = 10)
{
    $last =-1 ;
    $code = '';
    for ($i=0; $i <$length ; $i++) { 
        do {
            $next_digit = mt_rand(0,9);
        } while ($next_digit == $last);
        $last = $next_digit;
        $code.=$next_digit;
    }
    return $code;
}
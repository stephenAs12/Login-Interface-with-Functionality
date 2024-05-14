

<?php
$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'tds v1.0.1');
$id = $_GET['id'];
$file_name = $_GET['file_name'];
$file_path = "../../../../../../file/" . $file_name;

if (file_exists($file_path)) {
    unlink($file_path);
    $query = "DELETE FROM resource WHERE id=$id";
    mysqli_query($connect, $query);

    header('location:view resources.php');
}else{
    echo "File does not exist";
}


?>

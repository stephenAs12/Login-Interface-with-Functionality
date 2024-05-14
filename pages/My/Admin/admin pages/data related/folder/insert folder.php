
<?php

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$folderName       = (htmlspecialchars(stripslashes($_POST['folder_name']))) ? htmlspecialchars(stripslashes($_POST['folder_name'])) : '';

$sql = "INSERT INTO folder(folder_name) VALUES ('$folderName')";

if (mysqli_query($connect, $sql)) {
   
    
    if (mysqli_affected_rows($connect)) {
        echo true;
    }else{
        echo "Something was wrong";
    }
} else {
    echo "Error"." >> ".mysqli_error($connect);
}

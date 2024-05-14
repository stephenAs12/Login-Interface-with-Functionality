<?php 
    
    $connect = mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

    $levelname = ($_POST['level_name']) ? $_POST['level_name'] : '';
    
    $sql = "INSERT INTO education_level(level_name) VALUES('$levelname')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }

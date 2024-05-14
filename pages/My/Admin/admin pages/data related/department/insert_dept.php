<?php 
    
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

    $department = ($_POST['department']) ? $_POST['department'] : '';
    
    $sql = "INSERT INTO department(dept_name) VALUES('$department')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }

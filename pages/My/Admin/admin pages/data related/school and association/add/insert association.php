<?php 
    
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

    $associationName = ($_POST['association_name']) ? $_POST['association_name'] : '';
    
    $sql = "INSERT INTO association(asso_name) VALUES('$associationName')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }

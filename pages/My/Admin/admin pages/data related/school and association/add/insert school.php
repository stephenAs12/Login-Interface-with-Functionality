<?php 
    
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

    $schoolName       = ($_POST['school_name_name']) ? $_POST['school_name_name'] : '';
    $schoolLevel      = ($_POST['school_level_name']) ? $_POST['school_level_name'] : '';
    $schoolAssociation = ($_POST['association_selection_name']) ? $_POST['association_selection_name'] : '';
    
    $sql = "INSERT INTO school(name, level, association) VALUES('$schoolName', '$schoolLevel', '$schoolAssociation')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } 
    else {
         echo mysqli_error($connect);
    }

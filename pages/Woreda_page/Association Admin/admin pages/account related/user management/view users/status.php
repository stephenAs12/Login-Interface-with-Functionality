<?php
    $connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');
    $id=$_GET['id'];
    $status=$_GET['status'];

    $query="UPDATE user SET status=$status WHERE id=$id";

    mysqli_query($connect, $query);
    header('location:view_user.php');

?>
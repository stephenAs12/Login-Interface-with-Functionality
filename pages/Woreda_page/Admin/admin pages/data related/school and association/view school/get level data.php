
		<?php


$conn = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$school_level_result = mysqli_query($conn, "SELECT * FROM school_level");



?>


		<?php





$conn = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$education_level_result = mysqli_query($conn, "SELECT * FROM education_level");



?>
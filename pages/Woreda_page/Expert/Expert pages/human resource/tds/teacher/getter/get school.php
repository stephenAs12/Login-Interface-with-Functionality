
		<?php





$conn = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$associationId =  $_POST['asso_val'];
$school_result = mysqli_query($conn, "SELECT * FROM school
INNER JOIN school_level ON school.l_id=school_level.level_id WHERE a_id =$associationId");
echo "<option value='' selected hidden>select school *</option>";
while ($school_row = mysqli_fetch_array($school_result)) {
    echo "<option value='$school_row[id],$school_row[l_id]'>$school_row[name] $school_row[level_name]</option>";
}

echo "</select>";



?>

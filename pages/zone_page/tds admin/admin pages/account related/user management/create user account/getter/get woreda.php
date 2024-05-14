
		<?php



        $zone_id = $_SESSION['user_zone_id'];

        $conn = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $woreda_result = mysqli_query($conn, "SELECT * FROM woreda WHERE z_id=$zone_id");



        ?>

		<?php


		$conn = mysqli_connect("localhost", "root", "@Stephen12#xampp", "fms");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        $association_result = mysqli_query($conn, "SELECT * FROM association");
		


		?>
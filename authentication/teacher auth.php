<?php
session_start();
include 'db_conn.php';

if (isset($_POST['phone']) && isset($_POST['password'])) {

	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$ec_date = $_POST['ec_date_name'];

	if (empty($phone)) {
		header("Location: teacher login.php?error=Phone is required");
	} else if (empty($password)) {
		header("Location: teacher login.php?error=Password is required&phone=$phone");
	} else {
		$stmt = $conn->prepare("SELECT tds.tds_id, tds.fname, tds.mname, tds.lname, tds.image, tds.type, tds.region, tds.zone, tds.woreda, tds.phone, tds.password, tds.first_login, region.region_name, zone.zone_name, woreda.woreda_name FROM tds INNER JOIN region ON tds.region=region.region_id INNER JOIN zone ON tds.zone=zone.zone_id INNER JOIN woreda ON tds.woreda=woreda.woreda_id WHERE phone=?");
		$stmt->execute([$phone]);
		if ($stmt->rowCount() === 1) {
			$teacher = $stmt->fetch();
			$teacher_id = $teacher['tds_id'];
			$teacher_phone = $teacher['phone'];
			$teacher_password = $teacher['password'];
			$teacher_fname = $teacher['fname'];
			$teacher_mname = $teacher['mname'];
			$teacher_type = $teacher['type'];
			$teacher_region = $teacher['region_name'];
			$teacher_region_id = $teacher['region'];
			$teacher_zone = $teacher['zone_name'];
			$teacher_zone_id = $teacher['zone'];
			$teacher_woreda = $teacher['woreda_name'];
			$teacher_woreda_id = $teacher['woreda'];
			$teacher_full_name = $teacher['fname'] . ' ' . $teacher['mname'] . ' ' . $teacher['lname'];
			$teacher_image = $teacher['image'];
			$teacher_first_login = $teacher['first_login'];
			if ($phone === $teacher_phone) {
				if (password_verify($password, $teacher_password)) {
					// if ($user_status == "1") {
						$_SESSION['teacher_id'] = $teacher_id;
						$_SESSION['teacher_fname'] = $teacher_fname;
						$_SESSION['teacher_mname'] = $teacher_mname;
						$_SESSION['teacher_phone'] = $teacher_phone;
						$_SESSION['user_full_name'] = $user_full_name;
						$_SESSION['teacher_type'] = $teacher_type;
						$_SESSION['teacher_region'] = $teacher_region;
						$_SESSION['teacher_region_id'] = $teacher_region_id;
						$_SESSION['teacher_zone'] = $teacher_zone;
						$_SESSION['teacher_zone_id'] = $teacher_zone_id;
						$_SESSION['teacher_woreda'] = $teacher_woreda;
						$_SESSION['teacher_woreda_id'] = $teacher_woreda_id;
						$_SESSION['teacher_phone'] = $teacher_phone;
						$_SESSION['teacher_image'] = $teacher_image;
						$_SESSION['teacher_first_login'] = $teacher_first_login;
						$_SESSION['last_acted_on'] = time();
						$_SESSION['current_ec_date'] = $ec_date;
						// $_SESSION['current_ec_date'] = "2015-13-04";
						if ($teacher_first_login == "1") {
							if ($teacher_type != "") {
								header("Location: ../pages/TDS_page/view_teacher_folder.php");
							}
						} 
						else {
							header("Location: teacher change password.php");
						}
					// } else {
					// 	header("Location: teacher login.php?error=Your account has been temporarily deactivated. Please contact your administrator.&phone=$phone");
					// }
				} else {
					header("Location: teacher login.php?error=Incorect User name or password&phone=$phone");
				}
			} else {
				header("Location: teacher login.php?error=Incorect User name or password&phone=$phone");
			}
		} else {
			header("Location: teacher login.php?error=Incorect User name or password&phone=$phone");
		}
	}
}

<?php
session_start();
include 'db_conn.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$ec_date = $_POST['ec_date_name'];

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	} else if (empty($password)) {
		header("Location: login.php?error=Password is required&email=$email");
	} else {
		$stmt = $conn->prepare("SELECT user.id, user.fname, user.mname, user.lname, user.img, user.role, user.region, user.zone, user.woreda, user.phone, user.email, user.password, user.first_login, user.status, region.region_name, zone.zone_name, woreda.woreda_name FROM user INNER JOIN region ON user.region=region.region_id INNER JOIN zone ON user.zone=zone.zone_id INNER JOIN woreda ON user.woreda=woreda.woreda_id WHERE email=?");
		$stmt->execute([$email]);
		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();
			$user_id = $user['id'];
			$user_email = $user['email'];
			$user_password = $user['password'];
			$user_fname = $user['fname'];
			$user_mname = $user['mname'];
			$user_role = $user['role'];
			$user_status = $user['status'];
			$user_region = $user['region_name'];
			$user_region_id = $user['region'];
			$user_zone = $user['zone_name'];
			$user_zone_id = $user['zone'];
			$user_woreda = $user['woreda_name'];
			$user_woreda_id = $user['woreda'];
			$user_full_name = $user['fname'] . ' ' . $user['mname'] . ' ' . $user['lname'];
			$user_phone = $user['phone'];
			$user_image = $user['img'];
			$user_first_login = $user['first_login'];
			if ($email === $user_email) {
				if (password_verify($password, $user_password)) {
					if ($user_status == "1") {
						$_SESSION['user_id'] = $user_id;
						$_SESSION['user_fname'] = $user_fname;
						$_SESSION['user_mname'] = $user_mname;
						$_SESSION['user_email'] = $user_email;
						$_SESSION['user_full_name'] = $user_full_name;
						$_SESSION['user_role'] = $user_role;
						$_SESSION['user_status'] = $user_status;
						$_SESSION['user_region'] = $user_region;
						$_SESSION['user_region_id'] = $user_region_id;
						$_SESSION['user_zone'] = $user_zone;
						$_SESSION['user_zone_id'] = $user_zone_id;
						$_SESSION['user_woreda'] = $user_woreda;
						$_SESSION['user_woreda_id'] = $user_woreda_id;
						$_SESSION['user_phone'] = $user_phone;
						$_SESSION['user_image'] = $user_image;
						$_SESSION['user_first_login'] = $user_first_login;
						$_SESSION['last_acted_on'] = time();
						$_SESSION['current_ec_date'] = $ec_date;
						// $_SESSION['current_ec_date'] = "2015-13-04";
						if ($user_first_login == "1") {
							if ($user_role == "ዞን መርሱ ሀላፊ") {
								header("Location: ../pages/zone_page/tds admin/admin index.php");
							}elseif ($user_role == "ዞን መምሪያ ሀላፊ") {
								header("Location: ../pages/zone_page/Admin/admin index.php");
							}elseif ($user_role == "ዞን መምህራን ማህበር ሀላፊ") {
								header("Location: ../pages/zone_page/Association Admin/admin index.php");
							}elseif ($user_role == "ዞን መርሱ ባለሙያ") {
								header("Location: ../pages/zone_page/Expert/admin index.php");
							}elseif($user_role == "ወረዳ መርሱ ሀላፊ") {
								header("Location: ../pages/Woreda_page/tds admin/admin index.php");
							}elseif ($user_role == "ወረዳ ት/ፅ/ቤት ሀላፊ") {
								header("Location: ../pages/Woreda_page/Admin/admin index.php");
							}elseif ($user_role == "ወረዳ መምህራን ማህበር ሀላፊ") {
								header("Location: ../pages/Woreda_page/Association Admin/admin index.php");
							}elseif ($user_role == "ወረዳ መርሱ ባለሙያ") {
								header("Location: ../pages/Woreda_page/Expert/expert index.php");
							}
						} else {
							header("Location: change password.php");
						}
					} else {
						header("Location: login.php?error=Your account has been temporarily deactivated. Please contact your administrator.&email=$email");
					}
				} else {
					header("Location: login.php?error=Incorect User name or password&email=$email");
				}
			} else {
				header("Location: login.php?error=Incorect User name or password&email=$email");
			}
		} else {
			header("Location: login.php?error=Incorect User name or password&email=$email");
		}
	}
}

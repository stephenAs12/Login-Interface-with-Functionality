<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['user_role'])) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Secure Login System PHP</title>
		<link rel="stylesheet" href="./../vendors/bootstrap/dist/css/bootstrap.min.css">
	</head>

	<body>
		<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
			<form class="p-5 rounded shadow" action="teacher auth.php" method="post" style="width: 30rem">
				<h1 class="text-center pb-5 display-4">TEACHER LOGIN</h1>

				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?= htmlspecialchars($_GET['error']) ?>
					</div>
				<?php } ?>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Phone Number
					</label>
					<input type="number" name="phone" value="<?php if (isset($_GET['phone'])) echo (htmlspecialchars($_GET['phone'])) ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password
					</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1">
				</div>
				<div class="form-group col-md-12">
					<div class="input-group">
						<input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">LOGIN

				</button>
				<hr>
				<p><a type="submit" href="request_forgot_password.php" class="text-right display-15"><i><u>forgot password?</u></i></a></p>
			</form>
		</div>

		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../assets/table/js/jquery-3.5.1.js"></script>
		<script src="../assets/day/js/jquery.calendars.js"></script>
		<script src="../assets/day/js/jquery.calendars.ethiopian.js"></script>

		<script>
			var todayIn_jd = $.calendars.instance().today().toJD();
			var jd = parseFloat(todayIn_jd, 10);

			var date = $.calendars.instance('ethiopian').fromJD(jd);
			document.getElementById('ec_date_id').value = date;
		</script>
	</body>

	</html>

<?php
} else {

	if ($user_role == "Regional Admin") {
		header("Location: ../pages/Region/Regional admin/admin index.php");
	} elseif ($user_role == "zone Director") {
		header("Location: ../pages/Zone/ZoneTds/Dashboard.php");
	} elseif ($user_role == "Zone Admin") {
		header("Location: ../pages/Zone/zone_admin/zonehome.php");
	} elseif ($user_role == "Zone TDS expert") {
		header("Location: ../pages/Zone/ZoneTds/ZoneTdsDashboard.php");
	} elseif ($user_role == "Woreda Admin") {
		header("Location: ../pages/Woreda/Woreda Admin/woreda admin index.php");
	} elseif ($user_role == "Woreda TDS expert") {
		header("Location: ../pages/Woreda/Woreda Expert/woreda TDS expert index.php");
	} elseif ($user_first_login == "0") {
		header("Location: change password.php");
	} else {
		session_destroy();
		header("Location: login.php");
	}

	//    header("Location: index.php");
}
?>
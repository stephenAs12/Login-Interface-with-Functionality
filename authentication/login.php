<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['user_role'])) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>

		<link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
		<link rel="manifest" href="../images/favicon/site.webmanifest">

		<link rel="stylesheet" type="text/css" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link rel="stylesheet" type="text/css" href="../vendors/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="../assets/css/sty.css">

		<style>
			.toast {
				position: fixed;
				top: 10px;
				right: 10px;
			}

			#dev {
				font-size: 14px;
				position: fixed;
				bottom: 10px;
				left: 10px;
			}
			#dev a{
				color: white;
			}
		</style>
	</head>

	<body>
		<div class="container">

			<div class="screen">

				<div class="screen__content">

					<img src="../images/zp.svg" alt="zemen platte" srcset="" class="zp">

					<?php if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger" role="alert">
							<?= htmlspecialchars($_GET['error']) ?>
						</div>
					<?php } ?>

					<form class="login" action="auth.php" method="post">
						<div class="login__field">
							<i class="login__icon fa fa-envelope" id="envelop"></i>
							<input type="email" name="email" id="email" value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>" id="exampleInputEmail1" aria-describedby="emailHelp" class="login__input" placeholder="Email" oninput="mainHandler()">
						</div>
						<div class="login__field">
							<i class="login__icon fa fa-key" id="key"></i>
							<input type="password" class="login__input" name="password" id="exampleInputPassword1" placeholder="Password" oninput="mainHandler()">
						</div>
						<div class="form-group col-md-12">
							<div class="input-group">
								<input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
							</div>
						</div>
						<button class="button login__submit" id="frg_btn">
							<span class="button__text">Log In Now</span>
							<i class="button__icon fa fa-sign-in"></i>
						</button>
					</form>
					<div class="social-login">
						<h3 class="fa fa-hand-o-down"></h3>
						<div class="social-icons">
							<a href="request_forgot_password.php" class="social-login__icon"><i><u>forgot password</u></i></a>
						</div>
					</div>
				</div>
				<div class="screen__background">
					<!-- <span class="screen__background__shape screen__background__shape4"></span> -->
					<span class="screen__background__shape screen__background__shape3"></span>
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>
			</div>

			<!-- <div id="toastNotice" class="toast">
					<div class="toast-header">
						<strong class="mr-auto">Bootstrap</strong>
						<small>11 mins ago</small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
							<span>&times;</span>
						</button>
					</div>
					<div class="toast-body">
						Hello, world! This is a toast message.
					</div>
				</div> -->

			<div id="toastNotice" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bi bi-exclamation-octagon" style="color: red;"></i>
					<strong class="me-auto"></strong>
					<small>check it</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body" id="toast-body">
					Hello, world! This is a toast message.
				</div>
			</div>


		</div>
		<div>
			<h5 id="dev">Designer and Developer :- <a href="http://www.estifanos.art.et" target="_blank" rel="noopener noreferrer">Estifanos Aschale</a></h5>
		</div>


		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../assets/table/js/jquery-3.5.1.js"></script>
		<script src="../assets/day/js/jquery.calendars.js"></script>
		<script src="../assets/day/js/jquery.calendars.ethiopian.js"></script>
		<script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

		<script>
			var todayIn_jd = $.calendars.instance().today().toJD();
			var jd = parseFloat(todayIn_jd, 10);

			var date = $.calendars.instance('ethiopian').fromJD(jd);
			document.getElementById('ec_date_id').value = date;

			document.getElementById("frg_btn").disabled = true;
			document.getElementById("frg_btn").style.opacity = "0.5";
			document.getElementById("frg_btn").style.cursor = "not-allowed";

			let email = null;
			let password = null;

			function checkEmail() {
				const input = document.getElementById("email");
				const inputValue = input.value;
				const emailPattern =
					/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
				const isValid = emailPattern.test(inputValue);



				if (isValid) {
					console.log("email true");
					document.getElementById("envelop").style.color = "#068530";
					document.getElementById("email").style.borderColor = "#068530";
					email = true;
				} else {
					console.log("email false");
					document.getElementById("envelop").style.color = "red";
					document.getElementById("email").style.borderColor = "red";
					email = false;
				}

			}

			function checkPassword() {

				const input = document.getElementById("exampleInputPassword1");
				const inputValue = input.value;
				var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
				const isValid = strongRegex.test(inputValue);

				if (isValid) {
					console.log("password true");
					document.getElementById("key").style.color = "#068530";
					document.getElementById("exampleInputPassword1").style.borderColor = "#068530";
					password = true;
				} else {
					console.log("password false");
					document.getElementById("key").style.color = "red";
					document.getElementById("exampleInputPassword1").style.borderColor = "red";
					password = false;
				}

			}

			function mainHandler() {
				checkEmail();
				checkPassword();
				if (email == true && password == true) {
					console.log("both true");
					document.getElementById("frg_btn").style.cursor = "pointer";
					document.getElementById("frg_btn").disabled = false;
					document.getElementById("frg_btn").style.opacity = "1";
				} else {
					var myAlert = document.getElementById('toastNotice'); //select id of toast
					var bsAlert = new bootstrap.Toast(myAlert); //inizialize it
					document.getElementById("toastNotice").style.borderColor = "red";
					document.getElementById("toast-body").innerHTML = "Use Correct Email Format and Password Length at Least 8 Character That Contain ( Capital Letter, Small Letter, Special Character and Number )";
					bsAlert.show(); //show it
					document.getElementById("frg_btn").style.cursor = "not-allowed";
					document.getElementById("frg_btn").disabled = true;
					document.getElementById("frg_btn").style.opacity = "0.5";
				}
			}
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
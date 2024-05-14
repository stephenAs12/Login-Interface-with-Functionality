<?php

session_start();

if (isset($_SESSION['user_email']) && $_SESSION['user_first_login'] == "0") {

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>change first password</title>
		<link rel="stylesheet" type="text/css" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../vendors/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="../assets/css/sty.css">
	</head>

	<body>

		<div class="container">

			<div class="screen">

				<div class="screen__content">
					<?php if (isset($_GET['success'])) { ?>
						<div class="alert alert-success" role="alert">
							<?= htmlspecialchars($_GET['success']);
							if ($_GET['success'] == 'success') {
								echo '<a href="logout.php">login</a>';
							}
							?>
						</div>
					<?php } ?>
					<form class="login" action="auth.php" method="post">

						<div class="login__field">
							<i class="login__icon fa fa-envelope"></i>
							<input type="email" name="email" value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>" id="exampleInputEmail1" aria-describedby="emailHelp" class="login__input" placeholder="Email">
						</div>
						<div class="login__field">
							<i class="login__icon fa fa-key"></i>
							<input type="password" class="login__input" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group col-md-12">
							<div class="input-group">
								<input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
							</div>
						</div>
						<button class="button login__submit">
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
		</div>












		<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
			<form class="p-5 rounded shadow" action="update first password.php" method="post" style="width: 30rem">
				<h5 class="text-center pb-5 display-4">Change Password</h5>
				<?php if (isset($_GET['success'])) { ?>
					<div class="alert alert-success" role="alert">
						<?= htmlspecialchars($_GET['success']);
						if ($_GET['success'] == 'success') {
							echo '<a href="logout.php">login</a>';
						}
						?>
					</div>
				<?php } ?>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Email address
					</label>
					<input type="email" name="email" value="<?php echo $_SESSION['user_email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">New Password
					</label>

				</div>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1">

				<div class="mb-3">

					<label for="exampleInputPassword1" class="form-label">Confirm Password
					</label>
					<input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
				</div>
				<?php
				echo '<a href="update first password.php?userEmail=' . $_SESSION['user_email'] . '"><button class="btn btn-success btn-sm">Update</button></a>';
				?>
			</form>
		</div>
	</body>

	</html>
<?php
} else {
}

?>
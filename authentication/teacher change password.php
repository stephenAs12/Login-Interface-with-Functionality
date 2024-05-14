<?php

session_start();

if (isset($_SESSION['teacher_id']) && isset($_SESSION['teacher_phone']) && $_SESSION['teacher_type'] != '' && isset($_SESSION['teacher_first_login']) && $_SESSION['teacher_first_login'] == '0') {

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="./../vendors/bootstrap/dist/css/bootstrap.min.css">
	</head>

	<body>
		<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
			<form class="p-5 rounded shadow" action="update teacher first password.php" method="post" style="width: 30rem">
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
					<label for="exampleInputEmail1" class="form-label">Phone Number
					</label>
					<input type="email" name="email" value="<?php echo $_SESSION['teacher_phone']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
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
				echo '<a href="update teacher first password.php?userEmail=' . $_SESSION['teacher_phone'] . '"><button class="btn btn-success btn-sm">Update</button></a>';
				?>
			</form>
		</div>
	</body>

	</html>
<?php
} else {
}

?>
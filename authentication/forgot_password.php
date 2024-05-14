<?php




include("../assets/database/db_connect.php");
if (!isset($_GET["code"])) {
    header("Location: forgot_password.php?error=Can't find page");
    exit("Can't find page");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM forgot_password WHERE code='$code'");
if (mysqli_num_rows($getEmailQuery) == 0) {
    header("Location: login.php?error=Can't find the page using this mail, Use the latest one");
    exit("Can't find page");
}

if (isset($_POST["password"])) {
    $pw = $_POST["password"];
    $pw = password_hash($pw, PASSWORD_DEFAULT);

    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row["email"];

    $query = mysqli_query($con, "UPDATE user SET password='$pw' WHERE email='$email'");

    if ($query) {
        $query = mysqli_query($con, "DELETE FROM forgot_password WHERE email='$email'");
        header("Location: login.php?success=Password Changed");
        exit("Password Changed");
    } else {
        header("Location: forgot_password.php?error=Something was wrong");
        exit("Something was wrong");
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">

    <link rel="stylesheet" type="text/css" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendors/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/sty.css">
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
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?= htmlspecialchars($_GET['success']) ?>
                    </div>
                <?php } ?>
                <form class="login" method="post">
                    <h5 class="text-center pb-5 display-8">NEW PASSWORD</h5>
                    <div class="login__field">
                        <i class="login__icon fa fa-unlock"></i>
                        <input type="password" name="password" aria-describedby="emailHelp" class="login__input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
                    </div>

                    <button class="button login__submit">
                        <span class="button__text">Reset Password</span>
                        <i class="button__icon fa fa-sign-in"></i>
                    </button>
                </form>
                <div class="social-login">
                    <h3 class="fa fa-hand-o-down"></h3>
                    <div class="social-icons">
                        <a href="login.php" class="social-login__icon"><i><u>Back to Login</u></i></a>
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
</body>

</html>
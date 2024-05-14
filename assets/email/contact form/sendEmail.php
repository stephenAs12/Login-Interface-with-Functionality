<?php
    use PHPMailer\PHPMailer\PHPMailer;
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = "TDS | Admin Panel";  // Name of your website or yours
        $to = "ruhamanat@gmail.com";  // mail of reciever
        $subject = "Confirm your account";
        $body = "<h1>Confirm your account</h1>
        <p>For the first login, use this email address as the username and password.</p>
        <p><emp>Email/Username :- </emp><b>Email address</b></p>
        <p><emp>Email/Username :- </emp><b>Password</b></p>";
        $from = "estifanosaschale12@gmail.com";  // you mail
        $password = "stephen12zxcvbnm";  // your mail password
        $fname = $_POST['name'];
        $email = $_POST['email'];
        // $subject = $_POST['subject'];
        // $body = $_POST['body'];
        require_once "PHPMailer/PHPMailer.php"; 
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587; //587
        $mail->SMTPSecure = "tls"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $body;
        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>



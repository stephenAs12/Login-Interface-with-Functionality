<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/email/contact form/PHPMailer/Exception.php';
require '../assets/email/contact form/PHPMailer/PHPMailer.php';
require '../assets/email/contact form/PHPMailer/SMTP.php';
require '../assets/database/db_connect.php';

if (isset($_POST["email"])) {

    $emailTo = $_POST["email"];

    $getEmailQuery = mysqli_query($con, "SELECT email FROM user WHERE email='$emailTo'");
    if (mysqli_num_rows($getEmailQuery) == 1) {
        $code = uniqid(true);


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'zemen.bus.ethiopia20@gmail.com';                     //SMTP username
            // $mail->Password   = 'zlzaistampuuytzq';                               //SMTP password
            $mail->Password   = 'tpez zhzc jvtu pjyq';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('zemen.bus.ethiopia20@gmail.com', 'Zemen Bus IMS');
            $mail->addAddress($emailTo);
            $mail->addReplyTo('no-reply@gmail.com', 'No reply');

            //Content
            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/forgot_password.php?code=$code";
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Your password reset link";
            $mail->Body    = "
            
            <!DOCTYPE html>
    
            <html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
            <head>
            <title></title>
            <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
            <meta content='width=device-width, initial-scale=1.0' name='viewport'/>
            <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
            <!--[if !mso]><!-->
            <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'/>
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
            <!--<![endif]-->
            <style>
                    * {
                        box-sizing: border-box;
                    }
    
                    body {
                        margin: 0;
                        padding: 0;
                    }
    
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: inherit !important;
                    }
    
                    #MessageViewBody a {
                        color: inherit;
                        text-decoration: none;
                    }
    
                    p {
                        line-height: inherit
                    }
    
                    .desktop_hide,
                    .desktop_hide table {
                        mso-hide: all;
                        display: none;
                        max-height: 0px;
                        overflow: hidden;
                    }
    
                    .button {
                        background-color: #068530;
                        /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        cursor:pointer;
                    }
    
                    #bt{
                        background-color: white;
                        background-image: url(https://ik.imagekit.io/tn9cexahs8/ResetPassword_BG.png?updatedAt=1713882437363);
                    }
    
                    @media (max-width:670px) {
    
                        .desktop_hide table.icons-inner,
                        .social_block.desktop_hide .social-table {
                            display: inline-block !important;
                        }
    
                        .icons-inner {
                            text-align: center;
                        }
    
                        .icons-inner td {
                            margin: 0 auto;
                        }
    
                        .image_block img.big,
                        .row-content {
                            width: 100% !important;
                        }
    
                        .mobile_hide {
                            display: none;
                        }
    
                        .stack .column {
                            width: 100%;
                            display: block;
                        }
    
                        .mobile_hide {
                            min-height: 0;
                            max-height: 0;
                            max-width: 0;
                            overflow: hidden;
                            font-size: 0px;
                        }
    
                        .desktop_hide,
                        .desktop_hide table {
                            display: table !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <body style='background-color: #000000; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
            <table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3e6f8;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;' width='650'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='image_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:15px;padding-top:15px;width:100%;padding-right:0px;padding-left:0px;'>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3e6f8;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table id='bt' align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-position: center top; background-repeat: no-repeat; color: #000000; width: 650px;' width='650'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 45px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='20' cellspacing='0' class='divider_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment'>
            <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='5' cellspacing='0' class='image_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment' style='line-height:10px'><img alt='Reset your password?' class='big' src='https://ik.imagekit.io/tn9cexahs8/zemen%20final%20(1).png?updatedAt=1713883883307' style='display: block; height: auto; border: 0; width: 400px; max-width: 100%;' title='Reset your password?' width='358'/></div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='heading_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='padding-top:35px;text-align:center;width:100%;'>
            <h1 style='margin: 0; color: #068530; direction: ltr; font-family: 'Cabin', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 28px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;'><strong>Reset your password?</strong></h1>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-left:45px;padding-right:45px;padding-top:10px;'>
            <div style='font-family: Arial, sans-serif'>
            <div class='' style='font-size: 12px; font-family: 'Cabin', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;'>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 27px;'><span style='font-size:18px;color:#068530;'>We received a request to reset your password.</span></p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 27px;'><span style='font-size:18px;color:#068530;'>If you didn't make this request, simply ignore this email.</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='20' cellspacing='0' class='divider_block block-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment'>
            <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='80%'>
            <tr>
            <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 1px solid #E1B4FC;'><span> </span></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-6' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:45px;padding-right:45px;padding-top:10px;'>
            <div style='font-family: Arial, sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #8412c0; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='color:#068530;'>If you did make this request just click the button below:</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='10' cellspacing='0' class='button_block block-7' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment'>
            <a href='$url' ><button class='button'>RESET MY PASSWORD</button></a>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-8' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:45px;padding-right:45px;padding-top:10px;'>
            <div style='font-family: Arial, sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #8412c0; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='color:#068530;'>If you didn't request to change your brand password, you don't have to do anything. So that's easy.</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-9' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:20px;padding-left:10px;padding-right:10px;padding-top:10px;'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #8412c0; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='color:#068530;'>Zemen Bus Ethiopia</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3e6f8;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;' width='650'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='5' cellspacing='0' class='divider_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment'>
            <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #8412c0; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;'>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='color:#068530;'><span style='font-size:11px;'>Inventory Management System for Zemen Bus Ethiopia</span></span></p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 14.399999999999999px;'> </p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 13.2px;'><span style='font-size:11px;'><span style='color:#068530;'>ADDIS ABABA, ETHIOPIA/  zemen.bus.ethiopia20@gmail.com/ +2519 612 02020</span><a href='http://www.zemenbusethiopia.com' style='color: #068530;'></a></span></p>
            <p style='margin: 0; mso-line-height-alt: 14.399999999999999px;'> </p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='10' cellspacing='0' class='social_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div class='alignment' style='text-align:center;'>
            <table border='0' cellpadding='0' cellspacing='0' class='social-table' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;' width='144px'>
            <tr>
            <td style='padding:0 2px 0 2px;'><a href='https://www.facebook.com/zemenbusethiopia' target='_blank'><img alt='Facebook' height='32' src='https://img.icons8.com/color/48/facebook-new.png' style='display: block; height: auto; border: 0;' title='facebook' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://t.me/zeemen' target='_blank'><img alt='Telegram' height='32' src='https://img.icons8.com/color/48/telegram-app--v1.png' style='display: block; height: auto; border: 0;' title='Telegram' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://www.tiktok.com/@zemen_bus' target='_blank'><img alt='TikTok' height='32' src='https://img.icons8.com/color/48/tiktok--v1.png' style='display: block; height: auto; border: 0;' title='TikTok' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://chat.whatsapp.com/DSZXrmAWiC5Crl5X34nxIh' target='_blank'><img alt='WhatsApp' height='32' src='https://img.icons8.com/color/48/whatsapp--v1.png' style='display: block; height: auto; border: 0;' title='WhatsApp' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://www.instagram.com/zemen_bus_ethiopia/' target='_blank'><img alt='Instagram' height='32' src='https://img.icons8.com/fluency/48/instagram-new.png' style='display: block; height: auto; border: 0;' title='Instagram' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://twitter.com/ZemenBus' target='_blank'><img alt='Twitter' height='32' src='https://img.icons8.com/color/48/twitter--v1.png' style='display: block; height: auto; border: 0;' title='Twitter' width='32'/></a></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;' width='650'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='icons_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
            <table cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='alignment' style='vertical-align: middle; text-align: center;'>
            <!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
            <!--[if !vml]><!-->
            <table cellpadding='0' cellspacing='0' class='icons-inner' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;'>
            <!--<![endif]-->
            <tr>
            <td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='www.estifanos.art.et' style='text-decoration: none;' target='_blank'><img align='center' alt='Designed with BEE' class='icon' height='32' src='https://ik.imagekit.io/tn9cexahs8/esti%20small.png?updatedAt=1713940489083' style='display: block; height: auto; margin: 0 auto; border: 0;' width='34'/></a></td>
            <td style='font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='www.estifanos.art.et' style='color: #9d9d9d; text-decoration: none;' target='_blank'>Designer & Developer :- ESTIFANOS ASCHALE</a></td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table><!-- End -->
            </body>
            </html>
            
            ";

            $mail->AltBody = "This is your password <a href='$url'>reset link</a>";

            $mail->send();
            // echo 'Forgot password link has been sent to your email';
            $delete_ifExist = mysqli_query($con, "DELETE FROM forgot_password WHERE email='$emailTo'");
            $query = mysqli_query($con, "INSERT INTO forgot_password(code, email) VALUES('$code', '$emailTo')");
            if (!$query) {
                exit("Error");
            }
            header("Location: request_forgot_password.php?success=Check Your email");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location: request_forgot_password.php?error=Something was wrong");
        }
        exit();
    } else {
        header("Location: request_forgot_password.php?error=No one has ever signed up on this email.");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>

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
                    <h5 class="text-center pb-5 display-8">FORGOT PASSWORD</h5>
                    <div class="login__field">
                        <i class="login__icon fa fa-envelope"></i>
                        <input type="email" name="email" value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>" class="login__input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input type="text" id="ec_date_id" name="ec_date_name" class="form-control" minlength="8" maxlength="10" value="" required readonly hidden>
                        </div>
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Forgot</span>
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
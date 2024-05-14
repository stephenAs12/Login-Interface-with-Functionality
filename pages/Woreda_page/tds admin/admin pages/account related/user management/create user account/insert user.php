
<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../../../../../assets/email/contact form/PHPMailer/Exception.php';
require '../../../../../../../assets/email/contact form/PHPMailer/PHPMailer.php';
require '../../../../../../../assets/email/contact form/PHPMailer/SMTP.php';

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

$connect =  mysqli_connect('localhost', 'root', '@Stephen12#xampp', 'fms');

$firstName       = (htmlspecialchars(stripslashes($_POST['first_name_name']))) ? htmlspecialchars(stripslashes($_POST['first_name_name'])) : '';
$middleName       = (htmlspecialchars(stripslashes($_POST['middle_name_name']))) ? htmlspecialchars(stripslashes($_POST['middle_name_name']))  : '';
$lastName       = (htmlspecialchars(stripslashes($_POST['last_name_name']))) ? htmlspecialchars(stripslashes($_POST['last_name_name']))  : '';
$region         = $_SESSION['user_region_id'];
$zone         = $_SESSION['user_zone_id'];
$woreda         = $_SESSION['user_woreda_id'];
$userImage      = 'default.png';
$userPhone       = (htmlspecialchars(stripslashes($_POST['user_phone_name']))) ? htmlspecialchars(stripslashes($_POST['user_phone_name']))  : '';
$userRole       = (htmlspecialchars(stripslashes($_POST['role_name']))) ? htmlspecialchars(stripslashes($_POST['role_name']))  : '';
$userEmail       = (htmlspecialchars(stripslashes($_POST['user_email_name']))) ? htmlspecialchars(stripslashes($_POST['user_email_name']))  : '';
$userPass = password_generate(12);
$userPassword = password_hash($userPass, PASSWORD_DEFAULT);


$sql = "INSERT INTO user(fname, mname, lname, img, role, region, zone, woreda, phone, email, password) VALUES ('$firstName','$middleName','$lastName', '$userImage', '$userRole', '$region', '$zone', '$woreda', '$userPhone','$userEmail','$userPassword')";


$mail = new PHPMailer(true);
$validBefore = false;



            if (mysqli_query($connect, $sql)) {
                $validBefore = true;
            }else{
                $validBefore = false;
            }
        





    if ($validBefore) {
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'anrsebtds@gmail.com';                     //SMTP username
            $mail->Password   = 'uwctziobeyypwvma';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('anrsebtds@gmail.com', 'TDS');
            $mail->addAddress($userEmail);
            $mail->addReplyTo('no-reply@gmail.com', 'No reply');
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Confirm Your Account";
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
                        background-color: #8412c0;
                        /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                    }
    
                    #bt{
                        background-color: white;
                        background-image: url(https://dl.dropboxusercontent.com/s/yxmoeex2tdedsn9/ResetPassword_BG_2.png?dl=0);
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
            <div align='center' class='alignment' style='line-height:10px'><img alt='your logo' src='https://dl.dropboxusercontent.com/s/js59xtvczxflmyf/amhara.png?dl=0' style='display: block; height: auto; border: 0; width: 100px; max-width: 100%;' title='your logo' width='163'/></div>
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
            <div align='center' class='alignment' style='line-height:10px'><img alt='Confirm Your Account?' class='big' src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/2971/lock5.png' style='display: block; height: auto; border: 0; width: 200px; max-width: 100%;' title='Confirm Your Account?' width='358'/></div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='heading_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='padding-top:35px;text-align:center;width:100%;'>
            <h1 style='margin: 0; color: #8412c0; direction: ltr; font-family: 'Cabin', Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 28px; font-weight: 400; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;'><strong>Hello $firstName Please Confirm Your Account?</strong></h1>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-left:45px;padding-right:45px;padding-top:10px;'>
            <div style='font-family: Arial, sans-serif'>
            <div class='' style='font-size: 12px; font-family: 'Cabin', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #393d47; line-height: 1.5;'>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 27px;'><span style='font-size:18px;color:#aa67cf;'>We received a request to create your account from your administrator.</span></p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 27px;'><span style='font-size:18px;color:#aa67cf;'>After signing in, you will be required to change this password.</span></p>
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
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='color:#8a3b8f;'>Try to log in by copying the OTP below.:</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='10' cellspacing='0' class='button_block block-7' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad'>
            <div align='center' class='alignment'>
            <div class='button'><p>$userPass</p></div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-8' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;'>
            <div style='font-family: Arial, sans-serif'>
            <div class='' style='font-size: 12px; font-family: 'Cabin', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #393d47; line-height: 1.2;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:10px;color:#aa67cf;'><span style=''>Contact the administrator, </span><span style=''> if you need assistance.</span></span></p>
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
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='color:#8a3b8f;'>ANRS Education Bureau</span></p>
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
            <p style='margin: 0; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='color:#8a3b8f;'><span style='font-size:11px;'>Digital transfer system for teachers, directors, vice directors and supervisors in</span></span></p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 13.2px;'><span style='color:#8a3b8f;'><span style='font-size:11px;'>Amhara National Regional State Education Bureau. </span></span></p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 14.399999999999999px;'> </p>
            <p style='margin: 0; text-align: center; mso-line-height-alt: 13.2px;'><span style='font-size:11px;'><span style='color:#8a3b8f;'>BAHIRDAR, ETHIOPIA,PO BOX 764 /  anrsebtds@gmail.com/ 058 220 1300, 058 220 4856, 058 220 1666</span><a href='http://www.example.com' style='color: #8412c0;'></a></span></p>
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
            <td style='padding:0 2px 0 2px;'><a href='http://www.anrseb.gov.et/' target='_blank'><img alt='Web Site' height='32' src='https://img.icons8.com/ios-glyphs/30/000000/domain.png' style='display: block; height: auto; border: 0;' title='Web Site' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='facebookhttps://www.facebook.com/Amhara-Education-Bureau' target='_blank'><img alt='Facebook' height='32' src='https://img.icons8.com/fluency/48/000000/facebook-circled.png' style='display: block; height: auto; border: 0;' title='facebook' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https:://t.me/anrse' target='_blank'><img alt='Telegram' height='32' src='https://img.icons8.com/color/48/000000/telegram-app--v1.png' style='display: block; height: auto; border: 0;' title='Telegram' width='32'/></a></td>
            <td style='padding:0 2px 0 2px;'><a href='https://www.youtube.com/channel/UCARNQWN5bm5z2JmKsC_Cn8w' target='_blank'><img alt='YouTube' height='32' src='https://img.icons8.com/color/48/000000/youtube-play.png' style='display: block; height: auto; border: 0;' title='YouTube' width='32'/></a></td>
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
            <td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='https://www.designedwithbee.com/' style='text-decoration: none;' target='_blank'><img align='center' alt='Designed with BEE' class='icon' height='32' src='https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/53601_510656/Signature/bee.png' style='display: block; height: auto; margin: 0 auto; border: 0;' width='34'/></a></td>
            <td style='font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='https://www.designedwithbee.com/' style='color: #9d9d9d; text-decoration: none;' target='_blank'>Up</a></td>
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
    
            $mail->AltBody = "This is your OTP '$userPass'";
    
            if ($mail->send()) {
                echo true;
            }else{
                $delete_ifExist = mysqli_query($connect, "DELETE FROM user WHERE email='$userEmail'");
                echo "Email could not be sent.";
            }
    
            
        } catch (Exception $e) {
            $delete_ifExist = mysqli_query($connect, "DELETE FROM user WHERE email='$userEmail'");
            echo "Email could not be sent. Mailer Error";
        }
    } else {
        echo mysqli_error($connect);
    }
    
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandbox31cc97e6c2ff4c2d9e890f68d3136f7b.mailgun.org';   // SMTP username
$mail->Password = '3ce5448d4a2e29007bb54fc8dab5d9cf-c50a0e68-b656d2af';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'postmaster@sandbox31cc97e6c2ff4c2d9e890f68d3136f7b.mailgun.org';
$mail->FromName = 'Mailer';
$mail->addAddress('tastymaklaa@gmail.com');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

 ?>

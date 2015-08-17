<?php
date_default_timezone_set('Etc/UTC');
require 'components/PHPMailer/PHPMailerAutoload.php';
require_once "env.php";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $ENV["MYMAIL"];
$mail->Password = $ENV["MYMAIL_PASSWORD"];
$mail->setFrom($ENV["MYMAIL"]);
$mail->AddAddress("egyedg90@gmail.com");
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML(file_get_contents('template_parts/email_templates/contact_email.html'));

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
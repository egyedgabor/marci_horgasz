<?php
date_default_timezone_set('Etc/UTC');
require 'components/PHPMailer/PHPMailerAutoload.php';
require_once "env.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

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
$mail->AddAddress("hejja.marton@gmail.com");
$mail->Subject = 'Uzeneted Erkezett';

$body = file_get_contents('template_parts/email_templates/contact_email.html');
$body = eregi_replace("[\]",'',$body);

//setup vars to replace
$vars = array('{name}','{email}','{subject}','{message}');
$values = array($name,$email,$subject,$message);
//replace vars
$body = str_replace($vars,$values,$body);

//add the html tot the body
$mail->MsgHTML($body);

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
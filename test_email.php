<?php
  require_once "components/PHPMailer/class.phpmailer.php";
  require_once "components/PHPMailer/class.smtp.php";
  require_once "env.php";

  $mail = new PHPMailer();
  $body = file_get_contents('template_parts/email_templates/contact_email.html');
  $body = eregi_replace("[\]",'',$body);

  $mail->IsSMTP();                             // telling the class to use SMTP
  $mail->SMTPDebug  = 2;                       //  1 = errors and messages, 2 = messages only
  $mail->SMTPAuth   = true;                    // enable SMTP authentication
  $mail->SMTPSecure = "tls";                   // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";        // sets GMAIL as the SMTP server
  $mail->Port       = 587;                     // set the SMTP port for the GMAIL server
  $mail->Username   = $ENV["MYMAIL"];          // GMAIL username
  $mail->Password   = $ENV["MYMAIL_PASSWORD"]; // GMAIL password
  $mail->Subject    = "Proba email";
  $mail->MsgHTML($body);
  $mail->AddAddress("egyedg90@gmail.com", "Egyed Gábor");

  if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "Message sent!";
  }
?>
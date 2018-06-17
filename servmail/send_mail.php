<?php >
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from = "contact@servmill.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Mailer = "smtp";
$mail->Host= "ssl://email-smtp.eu-west-1.amazonaws.com"; // Amazon SES
$mail->Port = 465;  // SMTP Port
$mail->Username = "AKIAIE7KF75GGEFANA4A"; // SMTP  Username
$mail->Password = "AoeZ4Nv4x11d4qJyhc5gnGhQ/VwvlF1waAIlEInCWsQ0";  // SMTP Password
$mail->SetFrom($from, 'From Servmill');
$mail->AddReplyTo($from,'www.servmill.com');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
if(!$mail->Send())
return false;
else
return true;
}
?>

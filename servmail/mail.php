<?php
require 'send_mail.php';
$to = "prao28@gmail.com";
$subject = "Mail Subject";
$body = "Hi<br/>Test Mail<br/>Amazon SES"; // HTML  tags
Send_Mail($to,$subject,$body);
?>

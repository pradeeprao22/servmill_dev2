<?php
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
define('SENDER', 'contact@servmill.com');
// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
define('RECIPIENT', 'prao28@gmail.com');
// Replace smtp_username with your Amazon SES SMTP user name.
define('USERNAME','AKIAIE7KF75GGEFANA4A');

// Replace smtp_password with your Amazon SES SMTP password.
define('PASSWORD','AoeZ4Nv4x11d4qJyhc5gnGhQ/VwvlF1waAIlEInCWsQ0');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
define('HOST', 'email-smtp.eu-west-1.amazonaws.com');

 // The port you will connect to on the Amazon SES SMTP endpoint.
define('PORT', '465');

// Other message information
define('SUBJECT','Amazon SES test (SMTP interface accessed using PHP)');
define('BODY','This email was sent through the Amazon SES SMTP interface by using PHP.');

require_once 'pear/share/pear/Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT);


$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);

 // Create an SMTP client.
$mail = Mail::factory('smtp', $smtpParams);

// Send the email.
$result = $mail->send(RECIPIENT, $headers, BODY);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  echo("Email sent!"."\n");
}
?>

<?php
$email='prao28@gmail.com';
$message='<!DOCTYPE html PUBLIC "//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Servmill Joining Invitation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
  <table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
   <tr>
     <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
    <img src="images/h1.gif" alt="Creating Email Magic" width="300" height="230" style="display: block;" />
   </td>
   </tr>
   <tr>
     <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
     <tr>
      <td>
       Row 1
      </td>
     </tr>
     <tr>
      <td>
       Row 2
      </td>
     </tr>
     <tr>
      <td>
        <table border="1" cellpadding="0" cellspacing="0" width="100%">
     <tr>
    <td width="260" valign="top">
     <table border="1" cellpadding="0" cellspacing="0" width="100%">
      <tr>

<td style="padding: 25px 0 0 0;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttit$
       </td>
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
   <tr>
    <td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
      <table border="1" cellpadding="0" cellspacing="0" width="100%">
   <tr>
     <td width="75%">
  &reg; Someone, somewhere 2013<br/>
  Unsubscribe to this newsletter instantly
</td>
   <td align="right">
<table border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td>
   <a href="http://www.twitter.com/">
    <img src="images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
   </a>
  </td>
  <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
  <td>
   <a href="http://www.twitter.com/">
    <img src="images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
   </a>
  </td>
 </tr>
</table>
</td>
  </tr>
 </table>
   </td>
  </tr>
 </table>
</body>
</html>';

//add headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: Pradeep Rao<prao28@gmail.com>' . "\r\n";
$headers .= 'From: Servmill<contact@servmill.com>' . "\r\n";

mail($email, "Servmill invitation", $message, $headers);

echo'<div class="alert alert-success" role="alert">Account created <strong>Successfully</strong>
please conform your email address and login.</div>';

?>

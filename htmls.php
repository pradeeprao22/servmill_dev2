<?php
function headhtml() { echo'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="google-site-verification" content="leONo0wjY3RQ1LPHXEpJT6blkHLjtVtzQ4FD1GDMfCc" />
<meta name="description" content="Servmill purpose is to help service providers and
business like homecare, healthcare, software, hardware services by creating an appropriate platform. Our mission is to building a
platform which provides fast and easy online services to customers with a user friendly online system and a faster way to advertise and
communicate with its customers with regards of services. We are currently working on a system that can accommodate services 24/7.">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if IE 6]-->
<link rel="stylesheet" type="text/css" href="iecss.css" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="screen">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/boxOver.js"></script>
<script type="text/javascript" src="js/windowopen.js"></script>
<script type="text/javascript" src="administrator/js/jquery-1.4.2.min.js" ></script>
<script src="https://malsup.github.io/jquery.form.js"></script>

<!-- Margo CSS Styles  -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link href="facebox1.2/src/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="facebox1.2/src/facebox.js" type="text/javascript"></script>

<script type="text/javascript">
	jQuery(document).ready(function($){
	$(" a[rel*=facebox]" ).facebox({
	loadingImage : "facebox1.2/src/loading.gif",
	closeImage   : "facebox1.2/src/closelabel.png"
		})
	})
</script>

<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">
				$(document).ready(function(){
				$("#contacts-form").validate();
			  });
	</script>

	<script language="JavaScript">
			function isNumberKey(evt)
			{
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
			}
	</script>
<style type="text/css">
 .error {
	color: red;
	font: 10px arial;
	padding: 3px;.
        }
</style>

<script type="text/javascript">
			function checkPass(){
			  //Store the password field objects into variables ...
			  var pass1 = document.getElementById("pass1");
			  var pass2 = document.getElementById("pass2");

			  //Store the Confimation Message Object ...
			  var messages = document.getElementById("confirmMessage");

			  //Set the colors we will be using ...
			  var goodColor = "#66cc66";
			  var badColor = "#ff6666";

			  //Compare the values in the password field
			  //and the confirmation field
			  if(pass1.value == pass2.value){

				//The passwords match.
				//Set the color to the good color and inform
				//the user that they have entered the correct password
				if(pass1.value == "") {
					messages.innerHTML = "Password must not be blank !"
					contacts-form.pass1.focus();
				}
				else if(pass1.value.length < 6){
					messages.innerHTML = "Password must contain at least six characters !"
					contacts-form.pass1.focus();
				return false;}
				else{
					pass2.style.backgroundColor = goodColor;
					messages.style.color = goodColor;
					messages.innerHTML = "Passwords Match !"
				}
			  }else{
				//The passwords do not match.
				//Set the color to the bad color and
				//notify the user.
				pass2.style.backgroundColor = badColor;
				messages.style.color = badColor;
				messages.innerHTML = "Passwords Do Not Match !"
			  }
			}
</script>';
}

function foothtml(){
echo '<div class="col-md-2"></br></br>
<div class="center_footer">Servmill&nbsp;&copy;&nbsp;2015-2017</br>
 <a href="#">about</a>&nbsp;
 <a href="security">privacy</a>&nbsp;
 <a href="https://www.servmill.com/activesoon">blog</a>
  </div>
 </body>
</html>';
}

function footerservmill(){
  echo '<div class="copyright navbar-fixed-bottom">
    <div class="container">
    <div class="col-md-6">
    <p>Servmill&nbsp;&copy;&nbsp;2015 - 2017</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a>Made in India</a></li>
        <li><a href="contact.php">About</a></li>
        <li><a href="https://www.servmill.com/security">Privacy</a></li>
        <li><a href="https://www.servmill.com/jobs">Careers</a></li>
        <li><a href="https://www.servmill.com/activesoon">Blog</a></li>
        <li><a href="https://www.servmill.com/activesoon">Development</a></li>
        <li><a href="https://www.servmill.com/activesoon">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>';
}
?>

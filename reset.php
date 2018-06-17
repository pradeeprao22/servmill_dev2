<?php include_once("servtemp/analyticstracking.php") ?>
<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	headhtml();
?>

<!--navigation-->
<?php include 'servtemp/navigation.php'; ?>

<div class="crumb_navigation"> Navigation: <a href="home">home</a>/ <a href="https://www.servmill.com/categories" >categories</a>/ <b><span>forgot password</span></b></div>

<!-- end of left content -->
<div class="col-md-6">
	<div class="container">
	<?php

	error_reporting(0);

	$email=$_POST['email'];

	if($_POST['submit']=='Send')
	{
	mysql_connect('localhost','root','myrootservpub@123') or die(mysql_error);

	mysql_select_db('servmill');

	$q="select * from member where email='$email'";

	$r=mysql_query($q) or die(error);

	if(mysql_num_rows($r)) {

	$q="SELECT memberid, activationcode FROM member WHERE email = '$email'";

	$r=mysql_query($q);

	$row=mysql_fetch_assoc($r);

	$id=$row['memberid'];

	$code=$row['activationcode'];

	$message="Your Servmill password re-set link is: https://servmill.com/cp.php?id=$id&code=$code
	          please click on this link and re-set your password.

	          Servmill Team
	          contact@servmill.com
	          ";

	mail($email, "Servmill Password Reset", $message, "From: donotreply@servmill.com");
	echo'
<div class="alert alert-success" role="alert"><buttonclass="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>Password reset email has been sent<strong>Successfully!</strong>.</div>';
	}
	else{
	echo "<div class='alert alert-danger' role='alert'>
	  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
	  <span class='sr-only'>Error:</span>
	  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	  <strong>Warning!</strong> No user exist with this email address please check and try again...</div>";
	 }
	}
	?>

	</br>
	 <div class="row">
	 <div class="col-md-6">
          <div class="panel">
          <div class="panel-body">
	 <form action="forgot.php" data-toggle="validator" method="post" role="form">
	 <div class="form-group">
	   <label for="email">Enter Your Registered Email:</label>
	   <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
	  <span class="help-block">To reset your password, enter the email address you use to sign in to Servmill.</span>
	 </div>
	    <button type="submit" name="submit" value="Send" class="btn btn-info btn-primary">continue</button>
	 </form>
	</div>
	</div>
	</div>
     </div>
   </div>
</div>
<!-- end of center content -->
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--Include compiled plugins(below)-->
<?php footerservmill(); ?>

<?php ob_start(); ?>
<?php
	session_start();
	require("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
?>
<title>Login or Register | Servmill</title>
</head>
<body style="background-image:url('servmilllogin.jpg');background-size:cover;" >
<?php require 'servtemp/navigation.php'; ?>
<?php include_once("servtemp/analyticstracking.php") ?>
<br>
<br>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
<br>
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
					     <hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="post" role="form" style="display: block;">
									<?php
									if(isset($_POST['login'])){
									if(isset($_POST['user'])) {
									if(isset($_POST['pass'])){
									  $username = $_POST['user'];
									  $pass = $_POST['pass'];
										$query = mysql_query("SELECT * FROM member WHERE userid = '$username' AND  password = '$pass'") or die (mysql_error());
									                            $user = mysql_fetch_array($query);
									                            $memberid = $user['memberid'];
																							$query = mysql_query("SELECT * FROM member WHERE userid = '$username' AND  password = '$pass'") or die (mysql_error());
									                            if($user['verification'] == 'yes'){
									                                $_SESSION['ID'] = $user['memberid'];
									                                $_SESSION['logged'] = $user['memberid'];
									                                $_SESSION['user'] = $username;
									                                header('Location: myaccount.php');
									                                }
									elseif($user['verification'] == 'no'){
											echo "<div class='alert alert-warning' role='alert'>
														<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
														<span class='sr-only'>Error:</span>
														<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
														<strong>Warning!</strong>Your email address has not verified. Please verify your email.</div>";
														}
									else
									{
									echo "<div class='alert alert-danger' role='alert'>
									          <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
									          <span class='sr-only'>Error:</span>
									          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
									          <strong>Warning!</strong> please check username or password details</div>";
									/*      header("location: errorlogin.php"); */
									}
									}
									else
									{
									echo "<div class='alert alert-warning' role='alert'>Please check your userid.</div>";
									/*      header("location: errorlogin.php"); */
									}
									}
									else
									{
									echo "<div class='alert alert-danger' role='alert'>
									          <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
									          <span class='sr-only'>Error:</span>
									          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
									          <strong>Warning!</strong> No user exist with this email address please check and try again</div>";
									/*      header("location: errorlogin.php"); */
									}
									}
									?>
									<div class="form-group">
										<input type="text" name="user" id="username" tabindex="1" class="form-control" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login" value="login" id="login-submit" tabindex="4" class="form-control btn btn-login btn-raised btn-info" value="Log In">
											</div>
										</div>
									</div>
							<div class="form-group">
							   <div class="row">
							      <div class="col-lg-12">
								 <div class="text-center">
								<a href="https://www.servmill.com/resetpassword" tabindex="5" class="forgot-password">Forgot Password?</a>
										</div>
									     </div>
									</div>
								    </div>
								</form>

								<form id="register-form" action="#" method="post" role="form" style="display: none;">
<?php			                                                                    if (isset($_POST['next2'])){
												$confirmcode= rand();
												$activationcode= rand();
												$fname = $_POST['fname'];
												$lname = $_POST['lname'];
												$email = $_POST['email1'];
												$userid =$_POST['userid'];
												$password =$_POST['pass1'];

												$q = "SELECT * FROM member WHERE email ='$email'";
												$dbc = mysqli_connect('', 'root' , 'myrootservpub@123', 'servmill') OR die('Some Error Occured Because : '.mysqli_connect_error());
												$r=mysqli_query($dbc, $q) or die(mysqli_error());

												if ($row = mysqli_num_rows($r)){
												echo '<div class="alert alert-danger" role="alert">Email address already <strong>Exists.</strong>
												Please choose a different email or reset your password.
												</div>';
											}
												else
												{
												mysql_query("INSERT INTO member(lastname,firstname,userid,password,email, verification, memberimg, confirmcode, activationcode )
												VALUES ('$lname','$fname','$userid','$password','$email','no','servmilluser.png','$confirmcode','$activationcode')");
		                   $message="Confirm your Email
				   Click the link below to verify your account
				   https://www.servmill.com/checkmail.php?id=$activationcode&code=$confirmcode

				   Thankyou
				   for more details email us:
				   contact@servmill.com";

				   mail($email, "Email Address Confirmation Servmill", $message, "From: donotreply@servmill.com");
		                   echo'<div class="alert alert-success" role="alert">Account created <strong>Successfully</strong>
				   please conform your email address and login.</div>';
									}
								}
								?>
								<div class="form-group">
									<input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="Firstname"  required>
								</div>
								<div class="form-group">
									<input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Lastname" required>
								</div>
								<div class="form-group">
									<input type="text" name="userid" id="userid" tabindex="1" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="email" name="email1" id="email1" data-error="This email address is invalid" tabindex="1" class="form-control" placeholder="Email Address" required>
								</div>
								<div class="form-group">
									<input type="password" name="pass1" id="pass1" onKeyUp="checkPass(); return false;" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<input class="form-control"  name="pass2" id="pass2"onkeyup="checkPass(); return false;" placeholder="Confirm password" type="password" tabindex="2" required>
                                                                <span id="confirmMessage" class="confirmMessage"></span>
								</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="next2" id="register-submit" tabindex="4" class="form-control btn btn-register btn-raised btn-info" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php footerservmill(); ?>
<script type="text/javascript" >
  $(function() {
      $('#login-form-link').click(function(e) {
  		$("#login-form").delay(100).fadeIn(100);
   		$("#register-form").fadeOut(100);
  		$('#register-form-link').removeClass('active');
  		$(this).addClass('active');
  		e.preventDefault();
  	});
  	$('#register-form-link').click(function(e) {
  		$("#register-form").delay(100).fadeIn(100);
   		$("#login-form").fadeOut(100);
  		$('#login-form-link').removeClass('active');
  		$(this).addClass('active');
  		e.preventDefault();
  	});
  });
</script>

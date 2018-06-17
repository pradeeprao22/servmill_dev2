<?php
	session_start();
	$_SESSION['logged'] == 'notactive';
	require("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
  $id = $_GET['id'];
?>
<?php require 'servtemp/navigation.php'; ?>
<div class="crumb_navigation">Navigation:<a href="home.php">Home</a> / <span class="current">Account activation</span></div><br/>

<div class="col-md-4">
  <?php logform(); ?>
</div>
<!-- end of left content -->
<?php
if(isset($_POST['submit'])){
	$query = mysql_query("SELECT * FROM member WHERE memberid = '$id'") or die (mysql_error());
	$row = mysql_fetch_array($query);
  $email=$row['email'];
	$activationcode=$row['activationcode'];
	$confirmcode=$row['confirmcode'];
	$message="
	Confirm your Email
	Click the link below to verify your account
	http://servmill.com/checkmail.php?id=$activationcode&code=$confirmcode
	Thank you
	for more details email us:
	contact@servmill.com";
	mail($email, "Email Address Confirmation Servmill", $message, "From: donotreply@servmill.in");
}
?>

<div class="col-md-6 panel">
  <div class="title">Account Activation</div>
    <div class="prod_box_big">
      <div class="center_prod_box_big">
				<div class="welc"><center>Welcome</center></div>
				 <div class="welcsub"><center>
<p>Your account is not yet completely activated. You are required to complete this steps in order to participate in service activities on this site.</p></center>
        </div>
			<div class='logreg'>
				<div class="loginb">
					<div class="center_prod_box">
				  <center><a class="btn" name="submit">Activate my account</a></center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel">
					  <div class="panel-title"> <a>Activate later</a> </div>
					  <div class="product_img"><a href='myaccount.php'>Proceed to my account</a></div>
					</div>
				</div>
			</div>
    </div>
  </div>
</div>
<!-- end of center content -->
<?php foothtml(); ?>

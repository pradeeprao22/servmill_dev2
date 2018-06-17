<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	headhtml();
?>
<?php require 'servtemp/navigation.php'; ?>
<div class="crumb_navigation">Navigation:
	<span class="current">Home</span>/ <a href="servicecateg.php" >Categories</a>/ <a href="contact.php">About</a></div>
</br>
<div class="container">

<?php
$id=$_GET['id'];
$code=$_GET['code'];

$query = mysql_query("SELECT * FROM member WHERE activationcode ='$id'");
$fhst = mysql_fetch_array($query);
$db_code = $fhst['confirmcode'];

if($code == $db_code){
	mysql_query("UPDATE `member` SET `verification` = 'yes' WHERE `member`.`confirmcode` = $code");
	echo '<div class="alert alert-success" role="alert">Account created <strong>Successfully</strong>
	you may login now.</div>';
 } else {
	echo "Sorry some Error occured can't send any email please try again!!";
 }
?>
</div>
<?php foothtml(); ?>
<!-- jQuery (For Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- All compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- end of center content -->
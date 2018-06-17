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

<?php
	$id=$_GET['id'];

	$code=$_GET['code'];

if(isset($_POST['submitted']) == 1){

		$query = mysql_query("SELECT * FROM member WHERE memberid ='$id'");
		$fhst = mysql_fetch_array($query);
		$db_code = $fhst['activationcode'];

if( $code == $db_code ){
		  mysql_query("UPDATE member SET password = SHA1('$_POST[password]') WHERE memberid ='$id'");
		  echo'<div class="alert alert-success" role="alert">User Updated<strong>Successfully!!</strong>
			you may now login.</div>';
			}
	else {
		echo "Some Error Occurred Please Try Again!!";
		}
	 }
?>

<div class="container">
	<form action="cp.php?id=<?php echo "$id"; ?>&code=<?php echo "$code"; ?>" data-toggle="validator" method="post" role="form">
	   <div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" data-minlength="6" name="password" id="password" placeholder="Password" autocomplete="off" required>
		 </div>
	   <div class="form-group">
					<label for="passwordv">Verify Password:</label>
					<input class="form-control" type="password" data-minlength="6"  name="passwordv" id="passwordv" data-match="#password" data-match-error="Whoops, password don't match" placeholder="Type Password Again" autocomplete="off" required>
					<div class="help-block with-errors"></div>
		 </div>
	  <button type="submit" class="btn btn-default">Change Password</button>
		<input type="hidden" name="submitted" value="1">
	</form>
</div>
<?php foothtml(); ?>

<!-- jQuery (For Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- All compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- end of center content -->
<script src="http://servmill.in/config/validator.min.js"></script>

<?php ob_start(); ?>
<?php
  session_start();
  if(!isset($_SESSION['ID'])) {
  	header('Location: https://www.servmill.com/logged');
  }
	require("functions.php");
	require("htmls.php");
	headhtml();
  $userid = $_GET['name'];
  $query = mysql_query("SELECT * FROM member WHERE memberid='$userid'") or die (mysql_error());
  $row = mysql_fetch_array($query);
  $profileid = $row['memberid'];
?>

<?php include 'servtemp/navigation.php'; ?>

<div class="crumb_navigation"> Navigation: <span class="current">home</span>/ <a href="https://www.servmill.com/categories" >Categories</a>/ <a href="https://www.servmill.com/myaccount.php">Account</a></div>

</br>
<div class="container">
 <div class="row">
  <div class="col-md-4">
   <div class="panel">
    <div class="panel-body">
     <div class="thumbs">
      <div id="showmsg">
	<span class="blue">
           <a href="#">
            Service given:
            <?php
			$servmillnum = mysql_query("SELECT * FROM services WHERE (memberid='$userid')") or die(mysql_error());
			$counter = 0;
			WHILE($stat = mysql_fetch_array($servmillnum)){
							$counter++;
						  }
						echo"$counter";
						?>
						</a>

          <br/>
<a href="https://www.servmill.com/sendmessage.php?name=<?php echo $userid ?>">Send message</a>
    </span>
   </div>
  </div>
 </div>
</div>

<!-- Follow system -->
<div class="panel">
<div class="panel-body">
<?php
$loggid = $_SESSION['logged'];
$query = mysql_query("SELECT * FROM member WHERE userid = '$loggid'") or die (mysql_error());
$row = mysql_fetch_array($query);
$username = $row['userid'];

if($userid !== $username ){
  $check = mysql_query("SELECT id FROM millfollow WHERE userlogged='$loggid' AND userprofile='$profileid'");

if(mysql_num_rows($check) == 1) {
echo "<a class='btn' href='https://www.servmill.com/followasction.php?action=unfollow&profileid=$profileid'>Unfollow</a>";
}

else  {
echo "<a class='btn' href='https://www.servmill.com/followasction.php?action=follow&profileid=$profileid'>Follow</a>";
    }
}
?>
Followers:<?php
$checkfollowers = mysql_query("SELECT id FROM millfollow WHERE userprofile='$profileid'");
echo mysql_num_rows($checkfollowers);
?>&nbsp;
Followings:
<?php
$checkfollowing = mysql_query("SELECT id FROM millfollow WHERE userlogged='$profileid'");
echo mysql_num_rows($checkfollowing);
?>
</div>
</div>
<div class="panel">
 <div class="panel-body">
  <?php
		$query = mysql_query("SELECT * FROM member WHERE memberid='$userid'") or die (mysql_error());
		$row = mysql_fetch_array($query);
		$username = $row['userid'];
		$selleracc = $row['email'];
		$servicelocation = $row['address'];
                if (!$row)
			{
				die("<b>Provider Didnt shared his profile..</b>");
				echo $userid;
			}
?>
<?php if($row['memberimg']=='null'){
$row['memberimage']='servmilluser.png';
}
?>
<?php echo "<center><img class='media-object' src='https://www.servmill.com/administrator/images/upload/".$row['memberimg']."' 
width='200' height='200' alt='servmilluser' border='0' /></center>"; ?>
 </div>
</div>
      <div class="panel">
	<div class="panel-body">
             <div class="specifications">
				Name: <span class="blue"><?php echo "".$row['firstname']." ".$row['lastname']."";?></span><br />
				Contact no: <span class="blue"><?php echo $row['contactno'];?></span><br />
				Address: <span class="blue"><?php echo $row['address'];?></span><br/>
				Gender: <span class="blue"><?php echo $row['gender'];?></span><br/>
				Email Address: <span class="blue"><?php echo $row['email'];?></span><br/>
          </div>
       </div>
    </div>
</div>
  <div class="col-lg-8">
     <?php userhist(); ?>
   </div>
  </div>
 </div>
<?php footerservmill(); ?>
<!--end of main content-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php ob_end_flush(); ?>

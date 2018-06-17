<?php include_once("servtemp/analyticstracking.php") ?>
<?php ob_start(); ?>
<?php
  session_start();
  if(!isset($_SESSION['ID'])) {
  	header('Location: logged');
  }
	require("functions.php");
	require("htmls.php");
	headhtml();
  $userid = $_GET['name'];
  $loggid = $_SESSION['logged'];
?>
<!-- nivagation-->
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
            Service given:<?php
			   $servmillnum = mysql_query("SELECT * FROM services WHERE (memberid = '$userid' AND status = 1)") or die(mysql_error());
			   $counter = 0;
			      WHILE($stat = mysql_fetch_array($servmillnum)){
							$counter++;
						  }
						echo"$counter";
						 ?>
						</a>
						<br/>
    <a href="sendmessage.php?name=<?php echo $userid ?>">Send message</a>
   </span>
  </div>
 </div>
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
				die("Error: Provider Data not found..");
				echo $userid;
			}
  ?>
  <?php echo "<center><a href='https://www.servmill.com/account/".$row['memberid']."'><img class='media-object' src='https://www.servmill.com/administrator/images/upload/".$row['memberimg']."' width='169' height='155' alt='servmilluser' border='0' /></a></center>"; ?>
 </div>
</div>

  <div class="">
    <div class="">
      <div class="panel">
	<div class="panel-body">
          <div class="specifications">
				Name: <span class="blue"><?php echo "".$row['firstname']." ".$row['lastname']."";?></span><br/>
				Contact no: <span class="blue"><?php echo $row['contactno'];?></span><br/>
				Address: <span class="blue"><?php echo $row['address'];?></span><br/>
				Gender: <span class="blue"><?php echo $row['gender'];?></span><br/>
				Email Address: <span class="blue"><?php echo $row['email'];?></span><br/>
          </div>
         </div>
        </div>
      </div>
   </div>
</div>
<div class="col-lg-8 panel">
    <h6>Send Message</h6>

    <?php

if(isset($_POST['submitted']) ==1 ){

$dbc = mysqli_connect('', 'root' , '', 'servmill') OR die('Some Error Occured Because : '.mysqli_connect_error());

$q = "INSERT INTO  msgnotifs (toid, fromid, msgnotif, datecreated) VALUES ('$userid','$loggid','$_POST[msgnotif]',CURRENT_TIMESTAMP)";
$r = mysqli_query($dbc, $q);

if($r){

  echo'<div class="alert alert-success" role="alert">Your message has been sent <strong>Successfully!</strong> service provider will
  contact you soon</div>';
      } else {

        echo'<p>Your not added:'.mysqli_error($dbc);
    	  echo'<p>'.$q.'</p>';
    	    }
    		}
    ?>
    <form id="GadgetForm" data-toggle="validator" method="post" role="form">
        <div class="form-group">
            <label class="control-label">Your message</label>
 <textarea name="msgnotif" cols="60" rows="2" class="form-control" required></textarea>
        </div>
       <button type="submit" class="btn btn-default">Send Message</button>
       <input type="hidden" name="submitted" value="1" />
     </form>
    </div>
   </div>
 </div>
<?php footerservmill(); ?>
<!--end of main content-->
<?php ob_end_flush(); ?>

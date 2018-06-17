<?php ob_start(); ?>

<?php
  session_start();
  if(!isset($_SESSION['ID'])) {
        header('Location: login.php');
  }
  require("functions.php");
  require("htmls.php");
  headhtml();
  $userid = $_SESSION['ID'];
  $id= $_GET['id'];
?>
<style>
.refresh
  {		  color: green;
		  font-size: 12px;
		  height: 300px;
		  overflow: auto;
		  width: 550px;
		  padding: 10px;
		  background-color: #FFFFFF;
	}
</style>

<!--navigation-->
<?php include 'servtemp/navigation.php'; ?>

<!-- <?php include_once("") ?> -->

<div class="crumb_navigation">Navigation:<a href="myaccount.php">account</a> / <span class="current">messages</span></div>

<br/>

<div class="col-md-4">
<?php

  require 'connection.php';

  $query = "SELECT DISTINCT toid, fromid FROM msgnotifs WHERE fromid='$userid' OR toid='$userid' ORDER BY datecreated";

  if (($query=='0')) {

    echo "<div class='panel'><div class='panel-body'>You have not received any messages yet.</div></div>";

  }

  $qr = $conn->prepare($query);

  $qr->execute();

  $fetc = $qr->fetchAll();

  foreach ($fetc as $row):

  $msgto = $row['toid'];

  $msg= $row['fromid'];

  $qc = mysql_query("SELECT * FROM msgnotifs WHERE toid='$msgto' OR toid='$msg' ORDER BY msgnotifsid DESC");

  $fhs = mysql_fetch_array($qc);

  $msgg = $fhs['msgnotif'];

  if(($row['fromid'] == "$userid")){

    $q = mysql_query("SELECT * FROM member WHERE memberid='$msgto'");

    $fhst = mysql_fetch_array($q);

    $memberid = $fhst['memberid'];

    $username = $fhst['userid'];

    }else{

    $qr = mysql_query("SELECT * FROM member WHERE memberid='$msg'");

    $fst = mysql_fetch_array($qr);

    $memberid = $fst['memberid'];

    $username = $fst['userid'];

   }
?>

  <div class="panel">
    <div class="panel-body list-group">
      <a href="msgnotifications.php?id=<?php echo $memberid; ?>" class="list-group-item active">
        <h4 class="list-group-item-heading"><?php echo $username; ?></h4>
      <p class="list-group-item-text">Latest Message <b><?php echo $msgg; ?></b></p>
      </a>
    </div>
  </div>

<?php endforeach; ?>

</div>
<!--chatbox-->
<div class="col-md-6">
  <div class="chat-panel panel panel-default">
    <?php
		$query = mysql_query("SELECT * FROM `member` where memberid='$id'") or die (mysql_error());
		while($row = mysql_fetch_array($query)){
		echo "<div class='panel-heading'>".$row['firstname']."&nbsp".$row['lastname']." <i class='fa fa-comments fa-fw' alt='messages'></i></div>";
		}
    ?>
<div class="panel-body">
 <ul class="chat">
  <div class="alpha">

    <?php
    $query = mysql_query("SELECT * FROM `member` where memberid='$userid'") or die (mysql_error());
    while($row = mysql_fetch_array($query)){
         echo "<input name='fromid' type='hidden' id='fromid' value='".$row['memberid']."'/>";
    }
    ?>

    <?php
    $q = mysql_query("SELECT * FROM `member` where memberid='$id'") or die (mysql_error());
    while($r = mysql_fetch_array($q)){
         echo "<input name='toid' type='hidden' id='toid' value='".$r['memberid']."'/>";
    }
    ?>
  <div class="refresh">
  </div>
  <br/>
   <form name="newMessage" class="newMessage" action="" onsubmit="return false">
     <textarea class="form-control" name="msgnotif" cols="60" rows="2" id="servmsg">Enter your message here</textarea>
	  <input name="submit" type="submit" class="btn" value="Send" id="servmillbtn"/>
     </form>
    </div>
   </ul>
  </div>
 </div>
</div>
<!-- End of main content servmill -->
<script src="js/sendchat.js" type="text/javascript"></script>
 <div class="col-md-2">
  <div class="panel">
   <div class="panel-body">
    <div class="thumbs">
      <span class="blue">
       <a href="#" >Messages Recived(<?php
      require 'connection.php';
      $q = "SELECT * FROM member where memberid='$userid'";
      $qr = $conn->prepare($q);
      $qr->execute();
      $fetc = $qr->fetchAll();
      foreach ($fetc as $row):
      $username = $row['memberid'];
      endforeach;
      $msgnum = mysql_query("SELECT * FROM msgnotifs WHERE (toid='$username' AND status = 0)") or die(mysql_error());
      $counter = 0;
      WHILE($stat = mysql_fetch_array($msgnum)){
            $counter++;
          }
      echo "$counter";
      ?>)
      </a>
      </span>
    </div>
    <div class="thumbs">
      <div id='shownotif'><a href="notifications.php">Notifications(0)</a></div>
    </div>
     <div class="specifications">
       <div class='hidemsg'>
         <div class="thumbs">
            Message:<span class="blue"><p align='justify'></p></span>
            Last: <span class="blue"></span>
          <div class="thumbs">
            <form>
            <input  placeholder="Send message"/>
            <span class="blue"><p align='right'><a class="btn" href="#">Send reply</a></p></span>
           </form>
          </div>
        </div>
      </div>
   </div>
  </div>
 </div>
</div>
<?php foothtml(); ?>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.hidemsg').hide();
		jQuery('#showmsg').click(function() {
			jQuery('.hidemsg').toggle('fade');
			jQuery('.hidenotif').hide('fade');
		});
		jQuery('.hidenotif').hide();
		jQuery('#shownotif').click( function() {
			jQuery('.hidenotif').toggle('fade');
			jQuery('.hidemsg').hide('fade');
		});
	});
</script>
<script type="text/javascript">
$.ajaxSetup ({
	cache: false	//use for i.e browser to clean cache
});
$(setInterval(function(){
$('.refresh').load('view.php?id=<?php echo $id; ?>');  //this means that the items loaded by msgnotification.php will be prompted into the class refresh
$('.refresh').attr({ scrollTop: $('.refresh').attr('scrollHeight') })  //if the messages overflowed this line tells the textarea to focus the latest message
}, 1000));
</script>
<?php ob_end_flush(); ?>

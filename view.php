<?php
session_start();
require 'connection.php';

$id=$_GET['id'];
$qry = "SELECT * FROM member where memberid='$id'";
$qrc = $conn->prepare($qry);
$qrc->execute();
$fetch = $qrc->fetchAll();
foreach ($fetch as $r):
$selectuser = $r['userid'];
endforeach;

$userid = $_SESSION['ID'];
$q = "SELECT * FROM member where memberid='$userid'";
$qr = $conn->prepare($q);
$qr->execute();
$fetc = $qr->fetchAll();
foreach ($fetc as $row):
$username = $row['userid'];
endforeach;

/* msg query */
$sql = "SELECT * FROM msgnotifs where fromid='$userid' AND toid='$id' OR fromid='$id' AND toid='$userid' ORDER BY datecreated";
$qry = $conn->prepare($sql);
$qry->execute();
$fetch = $qry->fetchAll();
foreach ($fetch as $row):

$time = date("Y-m-d",strtotime($row['datecreated']));
$now = date("Y-m-d");

if(($row['fromid'] == "$userid")){
  $user ='<strong style="color:green;">You</strong>';
  }

if(($row['fromid']=="$id")){
   $user='<strong style="color:green;"> '.$selectuser.'</strong>';
 }

if ($time == $now){
 $hourAndMinutes = date("h:i A", strtotime($row['datecreated']));
  }

else{
 $hourAndMinutes = date("Y-m-d", strtotime($row['datecreated']));
   }

echo'<li class="left clearfix">
	   <p>'.$user.'<em>
	    <i class="fa fa-clock-o fa-fw"></i></em>'.$hourAndMinutes.'<br>
	     <span class="chat-img pull-left"></span>'.$row['msgnotif'].'
	</p>
     </li>';
endforeach;
?>

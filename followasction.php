<?php
ob_start();
session_start();
include 'functions.php';

$action = $_GET['action'];
$u_id = $_GET['profileid'];
$loggid = $_SESSION['logged'];

$query = mysql_query("SELECT * FROM member WHERE memberid = '$u_id'") or die (mysql_error());

$row = mysql_fetch_array($query);
$username = $row['userid'];

if ( $action == 'follow') {
  mysql_query("INSERT INTO millfollow VALUES('','$loggid','$u_id',CURRENT_TIMESTAMP)");
}

if( $action == 'unfollow' ){

mysql_query("DELETE FROM millfollow WHERE userlogged='$loggid' AND userprofile='$u_id'");
}
header('location: profile.php?name='.$u_id);
?>

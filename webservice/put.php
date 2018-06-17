<?php

// Include confi.php
include_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == "PUT"){

 $memberid = isset($_SERVER['HTTP_MEMBERID']) ? mysql_real_escape_string($_SERVER['HTTP_MEMBERID']) : "";
 $address = isset($_SERVER['HTTP_ADDRESS']) ? mysql_real_escape_string($_SERVER['HTTP_ADDRESS']) : "";
 $contactno = isset($_SERVER['HTTP_CONTACTNO']) ? mysql_real_escape_string($_SERVER['HTTP_CONTACTNO']) : "";
 $street = isset($_SERVER['HTTP_STREET']) ? mysql_real_escape_string($_SERVER['HTTP_STREET']) : "";
 $username = isset($_SERVER['HTTP_USERNAME']) ? mysql_real_escape_string($_SERVER['HTTP_USERNAME']) : "";

 // Add your validations
 if(!empty($memberid)){

 $qur = mysql_query("UPDATE  `servmill`.`member` SET `address`='$address', `contactno`='$contactno', `street`='$street', `userid`='$username' WHERE  `member`.`memberid` ='$memberid';");

 if($qur){

 $json = array("status" => 1, "msg" => "Details updated");

 }else{

 $json = array("status" => 1, "msg" => "Error updating status");

 }

 }else{

 $json = array("status" => 0, "msg" => "User ID not define");

 }

}else{

 $json = array("status" => 0, "msg" => "User ID not define");

 }
 @mysql_close($conn);

 /* Output header */

 header('Content-type: application/json');

 echo json_encode($json);

 ?>



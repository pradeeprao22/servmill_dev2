<?php
// Include confi.php
include_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == "PUT"){

 $memberid = isset($_SERVER['HTTP_MEMBERID']) ? mysql_real_escape_string($_SERVER['HTTP_MEMBERID']) : "";
 $password = isset($_SERVER['HTTP_PASSWORD']) ? mysql_real_escape_string($_SERVER['HTTP_PASSWORD']) : "";
 $newpassword = isset($_SERVER['HTTP_NEWPASSWORD']) ? mysql_real_escape_string($_SERVER['HTTP_NEWPASSWORD']) : "";

 // Add your validations
 if(!empty($memberid)){

 $qur = mysql_query("UPDATE `servmill`.`member` SET `password`='$newpassword' WHERE `member`.`memberid` ='$memberid' AND `member`.`password` ='$password';");

 if($qur){

 $json = array("status" => 1, "msg" => "Password updated succesfully");

 }else{

 $json = array("status" => 1, "msg" => "Error updating password");

 }

 }else{

 $json = array("status" => 0, "msg" => "User id not define");

 }

}else{

 $json = array("status" => 0, "msg" => "User id not define");

 }
 @mysql_close($conn);

 /* Output header */

 header('Content-type: application/json');

 echo json_encode($json);

 ?>

<?php
// Include confi.php
include_once('connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){

// Get data
 $userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";
 $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
 $contactno = isset($_POST['contactno']) ? mysql_real_escape_string($_POST['contactno']) : "";
 $password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : "";
 $verification = isset($_POST['verification']) ? mysql_real_escape_string($_POST['verification']) : "";

 // Insert data into data base
 $sql = "INSERT INTO `servmill`.`member` (`memberid`, `userid`, `email`,`contactno`, `password`, `verification`) VALUES (NULL, '$userid', '$email','$contactno', '$password', '$verification');";
 $qur = mysql_query($sql);
 if($qur){
 $json = array("status" => 1, "msg" => "Done User added!");
 }else{
 $json = array("status" => 0, "msg" => "Error adding user!");
 }
}else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}
@mysql_close($conn);

/* Output header */
 header('Content-type: application/json');
 echo json_encode($json);
 ?>

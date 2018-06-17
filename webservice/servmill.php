<?php
// Include confi.php
$conn = mysql_connect("localhost", "root", "myrootservpub@123");
mysql_select_db('servmill', $conn);

if($_SERVER['REQUEST_METHOD'] == "POST"){

// Get data
 $servicename = isset($_POST['servicename']) ? mysql_real_escape_string($_POST['servicename']) : "";
 $servicedescription = isset($_POST['servicedescription']) ? mysql_real_escape_string($_POST['servicedescription']) : "";
 $serviceimage = isset($_POST['serviceimage']) ? mysql_real_escape_string($_POST['serviceimage']) : "";
 $categoryid = isset($_POST['categoryid']) ? mysql_real_escape_string($_POST['categoryid']) : "";
 $location = isset($_POST['location']) ? mysql_real_escape_string($_POST['location']) : "";

 // Insert data into data base
 $sql = "INSERT INTO `servmill`.`services` (`servicename`, `servicedescription`, `serviceimage`, `categoryid`, `location`)
 VALUES ('$servicename', '$servicedescription', '$serviceimage', '$categoryid', '$location');";
 $qur = mysql_query($sql);
 if($qur){
 $json = array("status" => 1, "msg" => "Service posted succesfully!");
 }else{
 $json = array("status" => 0, "msg" => "Error!");
}
}else{
 $json = array("status" => 0, "msg" => "Request method not accepted");
}
@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);
?>

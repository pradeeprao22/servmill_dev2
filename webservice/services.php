<?php
 // Include confi.php
 include_once('connect.php');

 $uid = isset($_GET['uid']) ? mysql_real_escape_string($_GET['uid']) :  "";

 if(empty($uid)){

 $qur = mysql_query("select servicename, servicedescription, serviceimage, dateposted from `services`");

 $result =array();

 while($r = mysql_fetch_array($qur)){
 extract($r);
 $result[] = array("servicename" => $servicename, "servicedescription" => $servicedescription, "serviceimage" => $serviceimage, "dateposted"=> $dateposted);
 }
 $json = array("categories" => $result);

 }else{
 $json = array("status" => 1, "msg" => "Cannot fetch");
 }

 @mysql_close($conn);

 /* Output header */
 header('Content-type: application/json');
 echo json_encode($json);
?>


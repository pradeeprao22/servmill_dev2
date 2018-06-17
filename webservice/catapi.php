<?php
 // Include confi.php
 include_once('connect.php');

 $uid = isset($_GET['uid']) ? mysql_real_escape_string($_GET['uid']) :  "";

 if(empty($uid)){

 $qur = mysql_query("select categoryid, categoryname, catimage, categorydes from `servicecategories`");

 $result =array();

 while($r = mysql_fetch_array($qur)){
 extract($r);
 $result[] = array("categoryid" => $categoryid, "categoryname" => $categoryname, "catimage" => $catimage, "categorydes"=> $categorydes);
 }
 $json = array("status" => 0, "info" => $result);

 }else{
 $json = array("status" => 1, "msg" => "Cannot fetch");
 }

 @mysql_close($conn);

 /* Output header */
 header('Content-type: application/json');
 echo json_encode($json);

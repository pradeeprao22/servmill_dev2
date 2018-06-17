<?php
session_start();
require_once 'connection.php';
$username = $_POST['username'];
$message = $_POST['message'];
$recipient = $_POST['recipient'];
$sql = "INSERT INTO msgnotifs (fromid, msgnotif, datecreated, toid) VALUES (:a,:b,CURRENT_TIMESTAMP,:d)";
$qry = $conn->prepare($sql);
$qry->execute(array(':a'=>$username,':b'=>$message,':d'=>$recipient));

?>

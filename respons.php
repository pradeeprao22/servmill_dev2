<?php
session_start();
	 if (!isset($_SESSION['ID'])){
			 header('Location: logged');
			 die();
	 }
$memberid = (int)$_SESSION['ID'];
$db = new mysqli('', 'root', 'myrootservpub@123', 'servmill');
if(isset($_GET['type'], $_GET['id'])){
	$type = $_GET['type'];
	$id = (int)$_GET['id'];
	switch ($type) {
	 case 'service':
			$db->query("
          INSERT INTO service_repo (memberid, serviceid)
					SELECT {$memberid}, {$id}
					FROM services
					WHERE EXISTS (
						SELECT serviceid
						FROM services
						WHERE serviceid = {$id})
					  AND NOT EXISTS (
						SELECT id
						FROM service_repo
						WHERE memberid = {$memberid}
						AND serviceid = {$id})
					LIMIT 1
				");
			break;
	}
}
header("Location: https://www.servmill.com/myhome");
?>

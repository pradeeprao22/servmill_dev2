<?php
	require("../db.php");
	$bidid = $_POST['id'];
	mysql_query("UPDATE servicereport SET status = 1 WHERE bidid = '$bidid'") or die (mysql_error());
?>
<?php $bidnum = mysql_query("SELECT * FROM servicereport LEFT JOIN member ON member.memberid = servicereport.bidder LEFT JOIN services ON services.serviceid = servicereport.serviceid WHERE servicereport.status = 0")
or die(mysql_error());
			$count = 0;
			WHILE($stat = mysql_fetch_array($bidnum)){
				$count++;
			}
			echo $count;
?>

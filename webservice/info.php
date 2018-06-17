<?php
	// Include confi.php
	include_once('connect.php');
	$memberid = isset($_GET['memberid']) ? mysql_real_escape_string($_GET['memberid']) :  "";

	if(!empty($memberid)){
		$qur = mysql_query("select userid, email, contactno, verification from `member` where memberid='$memberid'");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			extract($r);
			$result[] = array("userid" => $userid, "email" => $email, 'verification' => $verification, 'contactno' => $contactno);
		}
		$json = array("status" => 1, "info" => $result);
	}else{
		$json = array("status" => 0, "msg" => "User ID not define");
	}
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
?>

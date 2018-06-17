<?php
$id = $_GET['id'];
$link = mysql_connect("localhost", "root", "");
mysql_select_db("servmill", $link);
$db_username = 'root';
$db_password = '';
$db_name = 'servmill';
$db_host = 'localhost';

$item_per_page = 5;
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}; //include config file
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit();
}
//get current starting point of records
$position = (($page_number-1) * $item_per_page);
//fetch records using page position and item per page.
$results = $mysqli->prepare("SELECT serviceid, servicename, servicedescription, serviceimage, dateposted, sellername, servicehits FROM services where categoryid='$id' ORDER BY serviceid DESC LIMIT ?, ?");
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$results->bind_param("dd", $position, $item_per_page);
$results->execute(); //Execute prepared Query
$results->bind_result($serviceid, $servicename, $servicedescription, $serviceimage, $dateposted, $sellername, $servicehits); //bind variables to prepared statement
//output results from database
while($results->fetch()){ //fetch values
$result = mysql_query("SELECT * FROM service_repo WHERE serviceid='$serviceid'", $link);
$recomends = mysql_num_rows($result);
echo"<div class='row panel'>
      <div class='col-sm-3'>
    		    <br><img href='https://www.servmill.com/showdetails/$serviceid' src='https://www.servmill.com/administrator/images/servmill/$serviceimage' width='75' height='75' class='img-rounded'>
    		      <div class='review-block-name'><a href='https://www.servmill.com/account/$memberid' class='price'>$sellername</a></div>
    			 <div class='review-block-date'>$dateposted<br><font color='green'><b>$recomends</b> users recommends</font></div>
    			  </div>
    			   <span class='label label-info pull-right'>
    			    <span title='viewed'>$servicehits&nbsp;<b class='glyphicon glyphicon-eye-open'></b></span>
    				</span>
    			  <div class='col-sm-9'>
    			     <div class='review-block-title'><a href='https://www.servmill.com/showdetails/$serviceid'>$servicename</a></div>
    	     <div class='review-block-description'>$servicedescription</div>
	    <span class='btn bottom'><a  href='https://www.servmill.com/respons.php?type=service&id=$serviceid' title='I recommend this service'>
           <i class='glyphicon glyphicon-chevron-up'></i></a></span>
    	  </div>
    	</div>";
}
?>

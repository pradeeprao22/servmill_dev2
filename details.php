<?php include_once("servtemp/analyticstracking.php") ?>
<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	require("timekuni.php");
	headhtml();
	$duedate = "2016-10-11 00:00:00";
	$id = $_GET['id'];
?>
<title><?php $query = mysql_query("SELECT servicename FROM services WHERE serviceid = '$id'") or die (mysql_error());
$row = mysql_fetch_array($query);
?><?php echo $row['servicename'];  ?> | Servmill</title>
</head>
<body>
<!--<div id="main_container">

   <div class="top_bar">

     </div>

</div>-->
<?php
mysql_query("UPDATE services SET servicehits=servicehits + 1 WHERE serviceid='$id'");
$sql = mysql_query("SELECT * FROM services WHERE serviceid='$id'");
while ($row = mysql_fetch_array($sql)) {
	$hits = $row["servicehits"];
	$name = $row["servicename"];
};
?>
<?php require 'servtemp/navigation.php'; ?>
<div class="crumb_navigation">Navigation:
<a href="https://www.servmill.com/categories">Categories</a>/ <a href="http://www.servmill.com/myhome">Services</a>/ <span class="current">Details</a>
</span>
<div id="wrap">
<div class="col-md-4">
<h6>Service categories</h6>
<!--<?php categories(); ?>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('click','.loadmore',function () {
	$(this).text('Loading...');
		var ele = $(this).parent('a');
				$.ajax({
			url: 'https://www.servmill.com/load.php',
			type: 'POST',
			data: {
			page:$(this).data('page'),
						},
			success: function(response){
					 if(response){
						 ele.hide();
								$(".news_list").append(response);
							}
				}
	 });
});
</script>

<ul class="news_list">
<?php
  $resultsPerPage=5;
  $query=mysql_query("SELECT * FROM `servicecategories`ORDER BY `servicecategories`.`categoryid` ASC LIMIT 0 , $resultsPerPage");
	if($query === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
  while($data=mysql_fetch_array($query)){
  echo   "<div class='panel'>
	   <a href ='https://www.servmill.com/services/".$data['categoryid']."'><center>".$data['categoryname']."</center></a>
	  </div>";
  }
?>
<center><a class="loadbutton"><button class="loadmore" data-page="2">Load More</button></a></center>
</ul>

<?php logform(); ?>
</div>
<?php
	$query = mysql_query("SELECT * FROM services WHERE serviceid = '$id'") or die (mysql_error());
	$row = mysql_fetch_array($query);
?>
    <div class="col-md-6">
<h6>Details</h6>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- servmillad3 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7178310554904241"
     data-ad-slot="2978409613"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<div class="panel col-sm-12">
        <div class="center_prod_box_big">
<a title='header=[Click to contact] body=[&nbsp;] fade=[on]'>
<br>
<img src='https://www.servmill.com/administrator/images/servmill/<?php echo $row['serviceimage'];?>' width='200' height='200' alt='' border='0' /></a>
				   <span class="label label-info pull-right">
             <span title="viewed"><?php echo "$hits"; ?>&nbsp;<b class="glyphicon glyphicon-eye-open"></b></span>
           </span>

			<div class='bid'><a href="#">More details</a></div>
			<div class='details'><a href="#">Service details</a></div>

			<script type='text/javascript'>
			jQuery(document).ready( function() {
				jQuery('.bid_box').hide();
				jQuery('.details').hide();
				jQuery('.details').click( function() {
					jQuery('.proddet').toggle('fade');
					jQuery('.bid').toggle('fade');
					jQuery('.bid_box').hide()
					jQuery('.details').hide();
				});

				jQuery('.bid').click( function() {
					jQuery('.details').toggle('fade');
					jQuery('.bid_box').toggle('fade');
					jQuery('.bid').hide();
					jQuery('.proddet').hide();
				});
			});
			</script>

			<div class="details_big_box">
				<div class='proddet'>
					<div class="panel-title"><?php echo $row['servicename'];?></div>
					<div class="specificationss">
						<br/>
						Service description: <span class="blue"><?php echo $row['servicedescription']; ?></span><br />

						Date: <span class="blue"><?php echo $row['dateposted'];?></span><br />

						Service ID: <span class="blue"><?php echo '0998'.$row['serviceid'].'';?></span><br />

						Available location:
						<span class="blue">
						<?php echo $row['location'];?>
					  </span>
						<br />
						Service category:
						<span class="blue">
						<?php
							$categid = $row['categoryid'];
							$categ = mysql_query("SELECT * FROM servicecategories WHERE categoryid = '$categid'")or die(mysql_error());
							$catega = mysql_fetch_array($categ);
							echo $catega['categoryname'];
						?>
						</span>
						<br/>
					</div>
				</div>

			<div class='bid_box'>
      <?php
							$id = $_GET['id'];
							$_SESSION['prodid'] = $id;
							$query = mysql_query("SELECT * FROM services WHERE serviceid = '$id'") or die (mysql_error());
							$row = mysql_fetch_array($query);
							$prodid = $row['serviceid'];
							$prodsbid = $row['startingcost'];
							$seller = $row['sellername'];

							//for displaying highest cost and no of service commenters
							$query2 = mysql_query("SELECT * FROM servicereport WHERE serviceid = '$prodid'") or die (mysql_error());
							$noofbidders = MYSQL_NUMROWS($query2);
							$highbid = $prodsbid;
							while($highonthis = mysql_fetch_array($query2)){
								$checkthis = $highonthis['bidamount'];
								if($checkthis > $highbid){
									$highbid = $checkthis;
								}
							}

							$highestbidder = mysql_query("SELECT * FROM servicereport WHERE bidamount = '$highbid'")or die(mysql_error());
							$highestbiddera = mysql_fetch_array($highestbidder);
							$hibidder = $highestbiddera['bidder'];

							if($_SESSION['logged']=='notactive'||$_SESSION['logged']=='guest'){
								echo"<span class='blue'><p>Please login to access this service. Or Register</p></span>";
							}else{

							echo"</span>
								<br />

								&nbsp&nbsp Responses: <span class='blue'>";?><?php echo $noofbidders;?><?php echo"</span><br /><br />

								&nbsp&nbsp Recent comment: <span class='blue'>";?><?php echo $highbid;?><?php echo"</span><br /><br />

								&nbsp&nbsp Service provider: <span class='blue'>";?>
								<?php

								$name = mysql_query("SELECT * FROM services WHERE serviceid = '$id'")or die(mysql_error());

								$namea = mysql_fetch_array($name);

								echo $namea['sellername'];

								?>
						<?php
							echo'</span>
								<br/>
		<form method = "post" action="https://www.servmill.com/comment.php?id='.$prodid.'" id="logins-form" class="logins-form">
									 <div class="form-controle" >
										<input type = "hidden" value="'.$highbid.'" name="high">&nbsp&nbsp
										<label>Your comment:</label>
										<input type="text" name="bidamount" required>
								    <input class="btn btn-info" type="submit" value="Comment" name="submit">
										</div>
									</form>
								 &nbsp <span class="blue">';
		            echo "&nbsp <span class='blue'><a rel='facebox' href='https://www.servmill.com/servicelog.php?id=".$prodid."'>Recent comments</a></span>&nbsp";
							}
				   ?>
           </div>
	 </div>
       </div>
     </div>
   </div>
 </div>
</div>
<?php foothtml(); ?>

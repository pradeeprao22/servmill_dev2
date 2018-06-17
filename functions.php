<?php ob_start() ?>
<?php include 'css.php'; ?>
<?php require 'db.php';

//shows user history---
function userhist(){
		$userid = $_GET['name'];
		$q = mysql_query("SELECT * FROM services WHERE member ='$userid'");
		$fh = mysql_fetch_array($q);
		$catsid = $fh['categoryid'];

		$r = mysql_query("SELECT * FROM servicecategories WHERE categoryid ='$catsid'");
		$fhs = mysql_fetch_array($r);
		$catsname = $fhs['categoryname'];

                $quser = mysql_query("SELECT * FROM services WHERE memberid='$userid'") or die (mysql_error());
		echo "<h6>Service history</h6>";
		while($row = mysql_fetch_array($quser)){
       echo "<div class='well'>
       <div class='media'>
       <a class='pull-left' href='https://www.servmill.com/showdetails/".$row['serviceid']."'>
       <img class='media-object' src='https://www.servmill.com/administrator/images/servmill/".$row['serviceimage']."' width='100' height='100'/>
  		</a>

  		<div class='media-body'>
    	  <h4 class='media-heading'>".$row['servicename']."</h4>
          <p class='text-right'>$catsname</p>
          <p>".$row['servicedescription']."</p>
        <ul class='list-inline list-unstyled'>
  		<li>
				<span><i class='glyphicon glyphicon-calendar'></i>".$row['dateposted']."</span></li>
           <!-- <li>|</li>
         <span><i class='glyphicon glyphicon-comment'></i>0 Comments</span>
            <li>|</li>
			 <li>
		   <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
        	    <span class='glyphicon glyphicon-star-empty'></span>
		</li> -->
	  </ul>
     </div>
    </div>
   </div>";
	}
}

//user history
function hist(){
	        $hstid = $_SESSION['logged'];
		$query = mysql_query("SELECT * FROM member WHERE memberid='$hstid'");
		$fhst = mysql_fetch_array($query);
		$userid = $fhst['userid'];

		$q = mysql_query("SELECT * FROM services WHERE sellername='$userid'");
		$fh = mysql_fetch_array($q);
		$catsid = $fh['categoryid'];

		$r = mysql_query("SELECT * FROM servicecategories WHERE categoryid ='$catsid'");
		$fhs = mysql_fetch_array($r);
		$catsname = $fhs['categoryname'];

		$quser = mysql_query("SELECT * FROM services WHERE sellername='$userid'") or die (mysql_error());
		echo "<h6>Service history</h6>";
		while($row = mysql_fetch_array($quser)){
	    echo "<div class='well'>
            <div class='media'>
      	    <a class='pull-left' href='https://www.servmill.com/showdetails/".$row['serviceid']."'>
            <img class='media-object' src='https://www.servmill.com/administrator/images/servmill/".$row['serviceimage']."' width='100' height='100'/>
  		  </a>
  		<div class='media-body'>
      <h4 class='media-heading'>".$row['servicename']."</h4>
      <p class='text-right'>$catsname</p>
      <p>".$row['servicedescription']."</p>
          <ul class='list-inline list-unstyled'>
  			  <li><span><i class='glyphicon glyphicon-calendar'></i>".$row['dateposted']."</span></li>
            <!--<li>|</li>
            <span><i class='glyphicon glyphicon-comment'></i>-</span>
            <li>|</li>
    		<li>
	            <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star'></span>
                    <span class='glyphicon glyphicon-star-empty'></span>
			  </li>
            <li>|</li>
			  <li>
              <span><i class='fa fa-facebook-square'></i></span>
              <span><i class='fa fa-twitter-square'></i></span>
              <span><i class='fa fa-google-plus-square'></i></span>
            </li>-->
          </ul>
       </div>
    </div>
</div>";
 }
}

//shows the categiorie id to list--------
function cats(){
		$query = mysql_query("SELECT * FROM `servicecategories`") or die (mysql_error());
		echo "<option >Select Service Category</option>";
		while($row = mysql_fetch_array($query)){
				echo "<option value='".$row['categoryid']."'>".$row['categoryname']."</option>";
		}
}

//shows the add to watchlist option--------
//function index page
function watsnew(){
$query = mysql_query("SELECT * FROM services ORDER BY serviceid DESC LIMIT 0,3") or die (mysql_error());

	while($row = mysql_fetch_array($query)){

	$catsid = $row['categoryid'];

			$s = mysql_query("SELECT * FROM servicecategories WHERE categoryid ='$catsid'");

			$fh = mysql_fetch_array($s);

			$cats = $fh['categoryname'];

		echo"<div class='wrapper col-md-4'>

		       <div class='card radius shadowDepth1'>

			 <div class='card__image border-tlr-radius'>

	<div class='item img-thumbnail'><a href='https://www.servmill.com/showdetails/".$row['serviceid']."/".$row['servicename']."'>
        <img  src='https://www.servmill.com/administrator/images/servmill/noimage.png' style='width: 400px; height: 200px' alt='image' class='border-tlr-radius'></a>
        		 </div>

		       </div>

					<div class='card__content card__padding'>

					  <div class='card__meta'>

				<a href='https://www.servmill.com/services/".$row['categoryid']."'>$cats</a>

						 <time></time>

						</div>

						<article class='card__article'>

		<h3><a href='https://www.servmill.com/showdetails/".$row['serviceid']."/".$row['servicename']."'>".$row['servicename']."</a></h3>

						<p>".$row['servicedescription']."</p>

						</article>

						</div>

					<div class='card__action'>

						<div class='card__author'>

		<img src='https://www.servmill.com/administrator/images/upload/servmilluser.png' width='25px' height='25px' alt='user'>
							<div class='card__author-content'>
		By <a href='https://www.servmill.com/account/".$row['memberid']."'>".$row['sellername']."</a>
							</div>

						</div>

					</div>

				</div>

			</div>";

		}

	}

//shows categories--------
function categories(){
$query = mysql_query("SELECT * FROM `servicecategories` limit 0,20") or die (mysql_error());
while($row = mysql_fetch_array($query)){
                  echo "<div class='panel'>
			<a  href ='https://www.servmill.com/showservice/".$row['categoryid']."'> ".$row['categoryname']." </a>
			</div>";
		}
}

//shows categories list-----
function categorylist(){
$query = mysql_query("SELECT * FROM servicecategories") or die (mysql_error());
while($row = mysql_fetch_array($query))
		  {
			  echo "<div class='panel'>";
				echo "<div class='panel-title'>
                                <a href='https://www.servmill.com/showservice/".$row['categoryid']."'>".$row['categoryname']."</a>
                                </div>";
				echo "<div class='thumbnail'>
        <a href='showservice.php?id=".$row['categoryid']."'>
	      <img src='https://www.servmill.com/administrator/images/category/".$row['catimage']."' width='94' height='92' alt='".$row['categoryname']."servmill'/></a></div>";
				echo "<div class='prod_price'><span class='price'>".$row['categorydes']."</span></div>";
			  echo "</div>";
		 }
	 }

//shows latest services-----
function latest(){
		$query = mysql_query("SELECT * FROM services WHERE status = 0 ORDER BY serviceid DESC LIMIT 0,5") or die (mysql_error());
		while($row = mysql_fetch_array($query))
		{
			$prodid = $row['serviceid'];
			$prodsbid = $row['startingbid'];
			//for displaying highest ammount and no of commenters
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
			$name = mysql_query("SELECT * FROM member WHERE memberid = '$hibidder'")or die(mysql_error());
			$namea = mysql_fetch_array($name);
			$highname = $namea['userid'];
			echo "<div class='panel'>";
			echo "<div class='media'>";
			echo "<a href='https://www.servmill.com/showdetails/".$row['serviceid']."/".$row['servicename']."'>".$row['servicename']."</a>";
			echo "<span class='label label-info pull-right'>
                        <span title='viewed'>".$row['servicehits']."&nbsp;<b class='glyphicon glyphicon-eye-open'></b></span></span>";
			echo "<div class='image-thumbnail-container'><a href='details?id=".$row['serviceid']."'>
			<img class='media-object' src='https://www.servmill.com/administrator/images/products/".$row['serviceimage']."' width='250' height='300' alt='' border='5' /></a></div>";
			echo "<div class='prod_price'>
				<label>Service cost</label>
				<span class='price'>".$row['startingbid']."</span><br/>
				<label>Posted by</label><span class='price'><a href='#'>".$row['sellername']."</a></span>";
			echo "</div>";
			echo "<div class='title'><a href='https://www.servmill.com/showdetails/".$row['serviceid']."/".$row['showservice']."' class='prod_details' title='header=[Click for service details] body=[&nbsp;] fade=[on]'>Get details now</a> </div>";
			echo "</div>";
			echo "</div>";
		}
	}

 //shows products on a category-----
	function showprod(){
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM services WHERE categoryid = '$id' AND status = 1") or die (mysql_error());
		$res = mysql_numrows($query);
		if($res == 0){
			echo "<div class='panel'>";
			echo "<div class='panel-title'>no available service in this category currently</div>";
			echo "<img href='#' src='https://www.servmill.com/administrator/images/servmill/nocateg.png' width='100' height='100' alt='categories' border='0' />";
			echo "<div><a href='#' class='prod_details'>Post service in this categorie</a></div>";
			echo "</div>";
		}else{
		while($row = mysql_fetch_array($query))
		{
			$prodid = $row['serviceid'];
			$prodsbid = $row['startingcost'];
			//for displaying highest bid and no of bidders
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
			$name = mysql_query("SELECT * FROM member WHERE memberid = '$hibidder'")or die(mysql_error());
			$namea = mysql_fetch_array($name);
			$highname = $namea['userid'];
			echo "<div class='panel'>";
			echo "<div class='center_prod_box'>";
			echo "<div class='product-title'><a href='details?id=".$row['serviceid']."'>".$row['servicename']."</a></div>";
			echo " <span class='label label-info pull-right'>
                        <span title='viewed'>".$row['servicehits']."&nbsp;<b class='glyphicon glyphicon-eye-open'></b></span>
                 </span>";
			echo "<div class='product_img'><a href='details?id=".$row['serviceid']."'><img src='administrator/images/products/".$row['serviceimage']."' width='94' height='92' alt='' border='0' /></a></div>";
			echo "<div class='service_price'><span>Service cost</span><span class='price'>".$row['startingcost']."</span><br />
				   <span>Posted by:</span><span class='price'>".$row['sellername']."</span></div>";
			echo "</div>";
			echo "<div class='prod_details_tab'><a href='details?id=".$row['serviceid']."' class='prod_details' title='header=[Click for service details] body=[&nbsp;] fade=[on]'>Get details now</a> </div>";
			echo "</div>";
		}
	}
}

//shows the services on watch--------
 function onwatch(){
		$who_u = $_SESSION['logged'];
		$query1 = mysql_query("SELECT * FROM watchlist WHERE memberid = '$who_u'");
		while($row1 = mysql_fetch_array($query1)){
		$service = $row1['serviceid'];
		$query = mysql_query("SELECT * FROM services WHERE serviceid = '$service'");
		while($row = mysql_fetch_array($query)){
				echo "<div class='panel'>";
				echo "<div class='product-title'><a href='details?id=".$row['serviceid']."'>".$row['servicename']."</a></div>";
				echo "<div class='product_img'><a href='details?id=".$row['serviceid']."'><img src='administrator/images/servmill/".$row['serviceimage']."' width='94' height='92' alt='' border='0' /></a></div>";
				echo "<div class='prod_price'><span class='reduce'>".$row['regularprice']."$</span> <span class='price'>".$row['startingbid']."$</span></div>";
				echo "<div class='prod_details_tab'><a href='details.html' class='prod_details' title='header=[Click for service details] body=[&nbsp;] fade=[on]'>Details</a> </div>";
				echo "</div>";
			}
		 }
	 }

//Shows the account details on navbar------
function account(){

	if ($_SESSION['logged'] == 'guest'){

      echo '<li><a class="menu-item" href="login" >Login</a></li>';

} else{

	$hisid = $_SESSION['logged'];

	$query = mysql_query("SELECT * FROM member WHERE memberid = '$hisid' ");

	While($rows = mysql_fetch_array($query)){

	echo'<li><a class="menu-item" href="https://www.servmill.com/logout.php">Logout</a></li>

	     <li><a  class="menu-item" href="https://www.servmill.com/myaccount.php"> <strong>'.$rows['userid'].'</strong> </a></li>';

	  }

	}

}


//side bar of login-------------------
function logform(){
	if ($_SESSION['logged'] == 'guest'){
	echo '<div class="panel panel-default">
			  <div class="panel-heading">Welcome</div><div class="panel-body">
						<strong>&nbsp;User:</strong>Guest<br/>
						<ul></ul>
			 </div> </div>';
	}elseif($_SESSION['logged'] == 'notactive'){
		$hisid = $_SESSION['logged'];
		$query = mysql_query("SELECT * FROM member WHERE memberid = '$hisid' ");
		While($rows = mysql_fetch_array($query)){
			echo '<div class="title">Welcome</div>
					  <div class="border_box">
							<strong>&nbsp;Username:</strong> '.$rows['userid'].'<br/>
							<strong>&nbsp;Account status:</strong>Not Active<br /><br/>
							<strong>&nbsp;Service location:</strong>Not Available<br/>
							<strong>&nbsp;Your messages:</strong> Not Available<br/>
							<ul></ul>
						</form>
				    </div>';
					}
	}else{
		$hisid = $_SESSION['logged'];
		$query = mysql_query("SELECT * FROM member WHERE memberid = '$hisid'");
		While($rows = mysql_fetch_array($query)){
			echo '<div class="panel panel-default">
			        <div class="panel-heading">Welcome&nbsp;'.$rows['userid'].'</div>
					<div class="panel-body">
							<h5>&nbsp;Account status:</h5>&nbsp;Active<br/>
							<h5>&nbsp;Service post count:</h5>&nbsp;0<br/>
							<strong>&nbsp;Service location:</strong>&nbsp;Not Available<br/>
						</form>
				  		</div>
					</div>';
			}
		}
	}
 ?>
<?php ob_flush() ?>

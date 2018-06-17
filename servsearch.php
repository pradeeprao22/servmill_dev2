<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	$query = mysql_query("SELECT * FROM services WHERE status = 0") or die (mysql_error());
	while($row = mysql_fetch_array($query))
	{
		$datenow = date("Y-m-d");
		$duedate = $row['duedate'];
		$prodid = $row['serviceid'];
		if($datenow >= $duedate){
			mysql_query("UPDATE services SET status = 1 WHERE serviceid = '$prodid'") or die (mysql_error());
		}
	}
	headhtml();
?>
<?php require 'servtemp/navigation.php'; ?>
<style>
	ol, ul {
    margin-top: 22px;
    margin-bottom: 10px;
}
</style>

<div id="wrap">
<!-- end of left content -->
<div class="col-md-10">
<?php
$button = $_GET ['submit'];
$search = $_GET ['search'];
if(!$button)
echo "you didn't submit any keyword";
else {

if(strlen($search)<=1)
echo "Search term too short";
else{
mysql_connect("localhost","root","myrootservpub@123");
mysql_select_db("servmill");
$search_exploded = explode (" ", $search);
}foreach($search_exploded as $search_each)
{
$construct ="SELECT * FROM services where servicedescription LIKE '%$search_each%' OR categoryid LIKE '%$search_each%' OR servicename LIKE '%$search_each' OR sellername LIKE '%$search_each' OR sellerpayaccount LIKE '%$search_each'";
$run = mysql_query($construct);
}if($run === FALSE) {
    die(mysql_error());
    }
$foundnum = mysql_num_rows($run);

if ($foundnum==0)
echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1.
Try more general words. for example: If you want to search 'Web development services'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
meaning <b>$search</b>";
else
{
echo "<hgroup class='servmill'>
		<h6>Search Results</h6>
		<h5 class='lead'><strong class='text-danger'> $foundnum </strong> results were found for the search of <strong class='text-danger'> $search </strong></h5>
      </hgroup>";
}
while ($row = mysql_fetch_array($run,MYSQL_ASSOC)) {
 $catsid= $row['categoryid'];
 $r = mysql_query("SELECT * FROM servicecategories WHERE categoryid ='$catsid'");
 $fhs = mysql_fetch_array($r);
 $catsname = $fhs['categoryname'];

?>
    <section class="col-xs-12 col-sm-6 col-md-12 panel">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
<br>
<a href="https://www.servmill.com/showdetails/<?php echo $row['serviceid'] ?>" title="servmill" class="thumbnail">
<img src="https://www.servmill.com/administrator/images/servmill/<?php echo $row['serviceimage'];?>" alt="servmill" /></a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-mail"></i> <span><?php echo $row['sellerpayaccount']; ?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php echo $row['dateposted']; ?></span></li>
					<a href="https://www.servmill.com/account/<?php echo $row['sellername'] ?>/<?php echo $row['memberid'] ?>">
					<li><i class="glyphicon glyphicon-user"></i> <span><?php echo $row['sellername']; ?></span></li>
					</a>
					<li><i class="glyphicons glyphicons-menu-hamburger"></i> <span><?php echo $catsname; ?></span></li>
				</ul>
			</div>
<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
	<h3><a href="https://www.servmill.com/showdetails/<?php echo $row['serviceid'] ?>" title="title"><?php echo $row['servicename']; ?></a></h3>
	<p><?php echo $row['servicedescription']; ?></p>
              <div class="row">
                  <span class="btn">
<a href="#" title="Contact now"><i class="glyphicon glyphicon-envelope"></i></a></span>
<span class="btn">
<a href="https://www.servmill.com/showdetails/<?php echo $row['serviceid']; ?>" title="More details"><i class="glyphicon glyphicon-fullscreen">
</i></a></span>
                  <span><a href="#" title="Location"><i class="glyphicon glyphicon-map-marker"></i></a><?php echo $row['location']; ?></span>
              </div>
			    </div>
		</article>
	</section>
<?php
}
}
mysql_close();
?>
</div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
    <?php foothtml(); ?>
<?php include_once("servtemp/analyticstracking.php") ?>
</div>

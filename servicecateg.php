<?php include_once("servtemp/analyticstracking.php") ?>
<?php
	session_start();
	require("htmls.php");
        require("functions.php");
        headhtml();
?>
<title>Our Categories | Servmill</title>
</head>
<body>
  <!--<div id="main_container">

	<div class="top_bar">

	 </div>

   </div>-->
<?php require 'servtemp/navigation.php'; ?>
<br>
<div id="wrap">
<div class="crumb_navigation"> Navigation: <a href="home.php">home</a>/<span class="current"><b>categories</b></span>
</div>

<div class="col-md-4">
<h6>Member info</h6>
<?php logform(); ?>
</div>
 <!-- End of right content -->
<div class="col-md-6">
	<h6>Categories</h6>
<?php
# db configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'servmill');

$limit = 5; #item per page
# db connect
$link = mysql_connect (DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
$db = mysql_select_db (DB_NAME, $link);

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
# sql query
$sql = "SELECT * FROM servicecategories";
# find out query stat point
$start = ($page * $limit) - $limit;
# query for page navigation
if( mysql_num_rows(mysql_query($sql)) > ($page * $limit) ){
  $next = ++$page;
}
$query = mysql_query( $sql . " LIMIT {$start}, {$limit}");
if (mysql_num_rows($query) < 1) {
  header('HTTP/1.0 404 Not Found');
  echo 'Page not found!';
  exit();
}
?>
<div class="wrap">
 <!-- loop row data -->
 <?php while ($row = mysql_fetch_array($query)): ?>
  <div class="ite" id="ite-<?php echo $row['categoryid'] ?>">
	<div class="panel">
	 <div class="panel-title"><a href="https://www.servmill.com/services/<?php echo $row['categoryid'] ?>"><?php echo $row['categoryname'] ?></a></div>
	  <div class="thumbnail">
	    <a href="https://www.servmill.com/services/<?php echo $row['categoryid'] ?>">
	  <img src="https://www.servmill.com/images/cat/<?php echo $row['catimage'] ?>" width="94" height="92" alt="<?php echo $row['categoryname'] ?>"/>
	</a>
	  </div>
		<div class="prod_price">
		<span class="price"><?php echo $row['categorydes'] ?></span>
	 </div>
	</div>
</div>
<?php endwhile ?>
  <!--page navigation-->
  <?php if (isset($next)): ?>
  <div class="navg">
    <a class="btn btn-raised btn-info next" href="https://www.servmill.com/servicecateg.php?p=<?php echo $next?>">Next</a>
  </div>
  <?php endif?>
 </div>
</div>
<!-- end of center content -->

<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="plugines/jquery.ias.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Infinite Ajax Scroll configuration
    jQuery.ias({
      container : '.wrap', // main container where data goes to append
      item: '.ite', // single items
      pagination: '.navg', // page navigation
      next: '.next', // next page selector
      loader: '<img src="#"/>', // loading gif
      triggerPageThreshold: 50 // show load more if scroll more than this
    });
  });
</script>
<div class="float-right"><?php foothtml(); ?></div>
</div>

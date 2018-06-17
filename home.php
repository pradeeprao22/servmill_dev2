<?php
	session_start();
        if(!isset($_SESSION['ID'])) {
         $_SESSION['logged'] = 'guest';
        }
        require("functions.php");
	$query = mysql_query("SELECT * FROM services WHERE status = 0") or die (mysql_error());
	while($row = mysql_fetch_array($query)){
		$datenow = date("Y-m-d");
		$duedate = $row['duedate'];
		$millid = $row['serviceid'];
		if($datenow >= $duedate){
		mysql_query("UPDATE services SET status = 1 WHERE serviceid = '$millid'") or die (mysql_error());
		}
	}
        require("htmls.php");
        headhtml();
?>
<title>Homecare, Healthcare, Hardware, Software Services | Servmill</title>
 </head>
   <body>
	<!--<div id="main_container">
		<div class="top_bar">
	   </div>
	</div>-->
<!--navigation-->
<?php include 'servtemp/navigation.php'; ?>
<!--google analytics-->
<?php include_once("servtemp/analyticstracking.php") ?>
<br>
<div class="crumb_navigation"> Navigation: <span class="current">home</span>/ <a href="https://www.servmill.com/categories">categories</a></div>

<!--Servmill loding-->
<div class="loader"></div>

<div class="col-md-4">
<h6>Service categories</h6>
<ul class="news_list">
<?php
  $resultsPerPage=5;
  $query=mysql_query("SELECT * FROM `servicecategories`ORDER BY `servicecategories`.`categoryid` ASC LIMIT 0 , $resultsPerPage");
	if($query === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
  while($data=mysql_fetch_array($query)){
  echo   "<div class='panel'>
	<a href ='https://www.servmill.com/services/".$data['categoryid']."'><center> ".$data['categoryname']."</center></a>
				</div>";
  }
?>
<center><a class="loadbutton"><button class="loadmore" data-page="2">Load More</button></a></center>
</ul>
<?php logform(); ?>
</div>
<!-- end of left box-->

<div class="col-md-6">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">

$(window).load(function() {

	$(".loader").fadeOut("slow");
  //i 

})

</script>
<script type="text/javascript"></script>
<script>

var track_page = 1; //track user scroll as page number, right now page number is 1

var loading  = false; //prevents multiple loads
load_contents(track_page); //initial content load
$(window).scroll(function() { //detect page scroll
    if(window.scrollY + window.innerHeight >= $(document).height()) { //if user scrolled to bottom of the page
        track_page++; //page number increment
        load_contents(track_page); //load content
    }
});

//Ajax load function
function load_contents(track_page){
    if(loading == false){
        loading = true;  //set loading flag on
        $('.loading-info').show(); //show loading animation
        loading = false; //set loading flag off once the content is loaded
        $.post( 'servicepost.php', {'page': track_page}, function(data){
            if(data.trim().length == 0){
                //notify user if nothing to load
                $('.loading-info').html("No More Posts!");
                return;
            }
            $('.loading-info').hide(); //hide loading animation once data is received
            $("#results").append(data); //append data into #results element
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
        })
    }
}
</script>

<h6>Services</h6>
    <div id="results"><!-- servicepost appear here --></div>
    <div class="loading-info"><center><img src="loading.gif"/></center></div>
</div>

<!-- end of center content -->
<?php foothtml(); ?>

<!--Include compiled plugins(below)-->
<script type="text/javascript">
   $(document).on('click','.loadmore',function () {
   $(this).text('Loading...');
                var ele = $(this).parent('a');
                        $.ajax({
                        url: 'load.php',
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

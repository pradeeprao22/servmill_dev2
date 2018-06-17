<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	headhtml();
        $id = $_GET['id'];
?>

<title><?php $query = mysql_query("SELECT categoryname FROM servicecategories WHERE categoryid ='$id'") or die (mysql_error());

$row = mysql_fetch_array($query);

?><?php echo $row['categoryname']; ?> | Servmill</title>

</head>

<body>

<!--
<div id="main_container">

<div class="top_bar">

</div>

</div>-->

<?php require 'servtemp/navigation.php'; ?>
<br>
<div class="crumb_navigation"> Navigation: <a href="https://www.servmill.com/myhome">home</span>/ <a href="https://www.servmill.com/categories" >categories</a>/
<span class="current">services</span>
</div>
<div class="col-md-4">
<h6>Service categories</h6>
<!--<?php categories(); ?>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
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
		<a href ='https://www.servmill.com/services/".$data['categoryid']."'> <center>".$data['categoryname']."</center></a>
	  </div>";
  }
?>
<center><a class="loadbutton"><button class="loadmore" data-page="2">Load More</button></a></center>
</ul>
<?php logform(); ?>
</div>
<!-- end of left content -->

<div class="col-md-6">
<h6> Category<b> > </b>
	  <?php
	  $catq = mysql_query("SELECT * FROM servicecategories WHERE categoryid = $id")or die(mysql_error());
	  $cata = mysql_fetch_array($catq);
	  echo $cata['categoryname'];
	  ?>
</h6>
 <div id="results"><!-- Servmill servicepost appear here --></div>
    <div class="loading-info"><center><img src="https://www.servmill.com/loading.gif"/></center></div>
 </div>
 <!--End of center content-->

<?php foothtml(); ?>
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">

var track_page = 1; //track user scroll as page number, right now page number is 1

var loading  = false; //prevents multiple loads

load_contents(track_page); //initial content load

$(window).scroll(function() { //detect page scroll

    if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled to bottom of the page

        track_page++; //page number increment

        load_contents(track_page); //load content

    }

});


//loading service post function

function load_contents(track_page){

    if(loading == false){

        loading = true;  //set loading flag on

        $('.loading-info').show(); //show loading animation

        $.post( 'https://www.servmill.com/servicepostid.php?id=<?php echo "$id"; ?>', {'page': track_page}, function(data){

            loading = false; //set loading flag off once the content is loaded

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

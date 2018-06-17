<?php include_once("servtemp/analyticstracking.php") ?>
<?php
	require("functions.php");
	require("htmls.php");
	session_start();
	if (isset($_POST['next1'])){
		$_SESSION['firstname']=$_POST['lname'];
		$_SESSION['lastname']=$_POST['fname'];
		$_SESSION['gender']=$_POST['gender'];
		$_SESSION['street']=$_POST['street'];
		$_SESSION['address']=$_POST['address'];
		$_SESSION['contactno']=$_POST['contactno'];
		$_SESSION['day']=$_POST['day'];
		$_SESSION['month']=$_POST['month'];
		$_SESSION['year']=$_POST['year'];
		$_SESSION['city2']=$_POST['city2'];
		$_SESSION['cityLng']=$_POST['cityLng'];
		$_SESSION['cityLat']=$_POST['cityLat'];
	}
	headhtml();
?>
<?php require 'servtemp/navigation.php'; ?>
<div id="wrap">
    <div class="crumb_navigation"> Navigation: <a href="home.php">Home</a> /<a href="login.php">Register Step 1</a> /<span class="current">Step 2</span> /</div>
    <div class="col-md-4">
<h6>Service categories</h6>
<!--<?php categories(); ?>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

<ul class="news_list">
<?php
  $resultsPerPage=10;
  $query=mysql_query("SELECT * FROM `servicecategories`ORDER BY `servicecategories`.`categoryid` ASC LIMIT 0 , $resultsPerPage");
	if($query === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
  while($data=mysql_fetch_array($query)){
  echo   "<div class='panel'>
				<a href ='showservice.php?id=".$data['categoryid']."'> ".$data['categoryname']." </a>
				</div>";
  }
?>
<a class="loadbutton"><button class="loadmore" data-page="2">Load More</button></a>
</ul>

<?php logform(); ?>
</div>
    <!-- End of categories content -->
    
    <div class=" col-md-6">
        <h6>Register > Second Step</h6>
      <div class="panel">
       <div class="center_prod_box_big">
         <div class="contact_form">
           <div id="form_row1">
            <form action="login.php" method="post" name="contacts-form" id="contacts-form">
            	<strong>Email:</strong>
              	<input type="text" name="email1" id="email1" class="required email"/></br></br>
              	<strong>Desired Username:</strong>
              	<input type="text" name="loginid" id = "loginid" class="required"/></br></br>
              	<strong>Desired Password:</strong>
              	<input type="password" name="pass1" id="pass1" class="required" onKeyUp="checkPass(); return false;"/></br></br>
              	<strong>Confirm Password:</strong>
            	  <input type="password" name="pass2" id="pass2"onkeyup="checkPass(); return false;"/><span id="confirmMessage" class="confirmMessage"></span></br></br>
                <strong>Security Question:</strong>
                <select name="secques">
                	<option>Pick a Security Question</option>
                	<option>Am I Gorgeous?</option>
                	<option>I'm Awesome, Am I?</option>
                	<option>Name of my Pet?</option>
               	</select></br></br>
            	<strong>Secret Answer:</strong>
            <input type="text" name="secans" value="Your Secret Answer:" onFocus="if(this.value=='Your Secret Answer:') this.value='';" onBlur="if(this.value=='') this.value='Your Secret Answer:';" class="required"/>
            <input type="submit" name="next2" value="Proceed"/>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end of center content -->
  <!-- end of right content -->
</div>
  <!-- end of main content -->
<?php foothtml(); ?>

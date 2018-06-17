<?php

        session_start();
        if(!isset($_SESSION['ID'])) {
         $_SESSION['logged'] = 'guest';
        }
        require("functions.php");
        require("htmls.php");
        headhtml();
?>
<link rel="canonical" href="#" />
<title>Servmill give and get services all around the globe for free</title>
</head>
<body>
<?php include 'servtemp/navigation.php';?>
<section class="intro-header"  style="background-image:url('https://www.servmill.com/servmill.png')">
 <div class="row"><br><br>
  <center>
   <h2 style= "color: #3a4152;" class="pull-center">Find professionals around you</h2>
    <p style= "color: #3a4152;" class="pull-center"><b>with Servmill&reg;</b></p></center>
     <br>
    <div class="container-fluid">
		    <div class="row">
		        <div class="col-xs-6 col-xs-offset-3">
     <div id="custom-search-input">
       <form action='servsearch.php' method='GET' >
	<div class="input-group col-md-12">
          <input type='text' class='form-control input-lg' name='search' placeholder='Search homecare, hardware, healthcare and software professionals' autocomplete='off'  required/>

					                    <span class='input-group-btn'>

					                        <button class='btn btn-info btn-lg' placeholder='Search keywords,Service type,Provider Name ,location,' name='submit' value='Search' type='submit'>

					                            <i class='glyphicon glyphicon-search'></i>

					                     </button>
		          </span>
			</div>
		      </form>
		     </div>
		    </div>
		  </div>
		</div>
  </div><br><br><br><br><br><br>
</section>

<div class="container">
<center><h5><b>Our Services</b></h5></center>
<br>

<section id="feature" class="section-padding wow fadeIn delay-05s">

		<div class="row">

			<div class="col-md-3 col-sm-6 col-xs-12">

			  <div class="wrap-item text-center panel">

					<div class="item-img">

						<br>

						<a href="#" ><img src="https://www.servmill.com/ourservices/hard.png"></a>

					</div>

					<h3 class="pad-bt15">Hardware</h3>

					<p>Find hardware service professionals for computer parts such as monitor, hard disk drive, graphic card, sound card, motherboard, and so on.</p>

                                   <br>
			  </div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="wrap-item text-center panel">
					<div class="item-img">
						<br>
						<a href="#"><img src="https://www.servmill.com/ourservices/h.png"></a>
					</div>
					<h3 class="pad-bt15">Homecare</h3>

     <p>Homecare includes cleaning, carpanting, decoration, plumbing, electric works etc. Now find proffessional for your home at servmill.</p>

<br>

				</div>

			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">

				<div class="wrap-item text-center panel">

					<div class="item-img">

						<br>

						<a href="#"><img src="https://www.servmill.com/ourservices/m.png"></a>

					</div>

					<h3 class="pad-bt15">Healthcare</h3>

					<p>Now find professional doctors, yoga trainer, power trainer, cardio trainer etc and connect with them through our service platform.</p>

<br>

				</div>

			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">

				<div class="wrap-item text-center panel">

					<div class="item-img">

						<br>

						<a href="#"><img src="https://www.servmill.com/ourservices/s.png"></a>

					</div>

					<h3 class="pad-bt15">Software</h3>

					<p>Find best developers for your project and get your software work done at right time. Post your project now and find best suited proffesional.</p>
<br>
	     </div>
	   </div>
	</div>
</section>
<br>
<center><h5><b>Recent Posts</b></h5> </center>
<?php watsnew(); ?>
<center><a class="btn" href="https://www.servmill.com/myhome">Load more</a></center>
</div>
 <!--start social profiles (https://developers.google.com/structured-data/customize/social-profiles)-->
 <script type="application/ld+json">
 {
 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Servmill",
 "url" : "https://www.servmill.com/",
 "logo" : "https://www.servmill.com/logo.png",
 "sameAs" : [
 "https://www.facebook.com/servmill",
 "https://www.twitter.com/servmill",
 "https://plus.google.com/+servmill/",
 "https://www.linkedin.com/company/servmill",
 "https://www.pinterest.com/servmill"
 ]
 }
 </script>
 <!-- end social profiles -->
<?php footerservmill();?>
<?php include_once("servtemp/analyticstracking.php") ?>
</body>

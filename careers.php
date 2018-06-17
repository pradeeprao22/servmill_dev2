<?php
	session_start();
	require("htmls.php");
	require("functions.php");
	headhtml();
?>
<title>Jobs | Servmill</title>
<?php require 'servtemp/navigation.php'; ?>
<br>
<div class="page-banner" style="padding:40px 0; background: url(https://fundacionlaboraldelmetal.files.wordpress.com/2014/09/personas.jpg) center #f9f9f9;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Careers</h2>
				<h6>Join Our Team</h6>
			</div>
		</div>
	</div>
</div>
<style>
.post
{
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 0 0 1px #CCC;
}

.post .content
{
    padding: 15px;
}
.post .author
{
    font-size: 11px;
    color: #737373;
    padding: 25px 30px 20px;
}
.post .post-img-content
{
    height: 196px;
    position: relative;
}
.post .post-img-content img
{
    position: absolute;
}
.post .post-title
{
    display: table-cell;
    vertical-align: bottom;
    z-index: 2;
    position: relative;
}
.post .post-title b
{
    background-color: rgba(51, 51, 51, 0.58);
    display: inline-block;
    margin-bottom: 5px;
    color: #FFF;
    padding: 10px 15px;
    margin-top: 5px;
}

</style>
<!-- Start Content -->
<div id="content">
	<div class="container">
		<div class="page-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<!-- Classic Heading -->
					<center><h4 class="classic-title"><span>Welcome To Servmill</span></h4></center>
					<!-- Some Text -->
					<p><a title="Simple Tooltip" href="#" class="itl-tooltip" data-placement="top">Servmill&reg;</a> rocks the world
            of services and we’re always on the lookout for people. Like our vibe? Then come and join one of India's hottest startups.
            You’ll work with a talented team, based in the heart of Hyderabad, to bring a culture of giving and getting service to a new generation.
            Check if there’s a vacancy for you here!</p>
				</div>
        <br><br>
			</div>

		<div class="row">
			<!-- End of Advisors -->
			<!-- Classic Heading -->
			<center><h4 class="classic-title"><span>Our Vacancies</span></h4></center>
       <br>
			 <div class="container">
			    <div class="row">
			        <div class="col-sm-4 col-md-4">
			            <div class="post">
			                <div class="post-img-content">
			                    <img src="https://d13yacurqjgara.cloudfront.net/users/63407/screenshots/1518625/charminar_dribbble.png" class="img-responsive" />
			                    <span class="post-title"><b>Mobile Developer</b><br />
			                        <b>Hyderabad, India </b></span>
			                </div>
			                <div class="content">
			                    <div class="author">
			                        <time datetime="2014-01-20">January 20th, 2014</time>
			                    </div>
			                    <div>
							• Strong experience developing native apps on Android.<br>
							• Demonstrable experience publishing apps to the Google Play Store.<br>
							• Strong English written and verbal communication skills.<br>
							• Love for mobile games is a big plus.<br>
							• Experience with iOS or other programming languages appreciated.<br>
							• Provide screen shots of existing apps that you worked on including links to those apps.
			                    </div>
			                    <div>
			                        <a href="mailto:vacancies@servmill.com" class="btn btn-warning btn-sm">APPLY</a>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-sm-4 col-md-4">
			            <div class="post">
			                <div class="post-img-content">
			                    <img src="https://d13yacurqjgara.cloudfront.net/users/63407/screenshots/1518625/charminar_dribbble.png" class="img-responsive" />
			                    <span class="post-title"><b>Graphic Designer (Internship)</b><br/>
			                        <b>Hyderabad, India</b></span>
			                </div>
			                <div class="content">
			                    <div class="author">
			                        <time datetime="2014-01-20">January 20th, 2014</time>
			                    </div>
			                    <div>
Someone who is eager to learn, detail-oriented and well organised.<br>
Proficiency in Photoshop, Illustrator and/or Sketch.<br>
An understanding of animation and/or video software (like Adobe After-effects) is a plus.<br>
Passionate about graphic design with a keen eye for typography, colors and shapes.<br>
A true team player with good communication skills.<br>
Comfortable in an English speaking working environment.<br>
Open to constructive feedback
			                    </div>
			                    <div>
			                        <a href="mailto:vacancies@servmill.com" class="btn btn-primary btn-sm">APPLY</a>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="col-sm-4 col-md-4">
			            <div class="post">
			                <div class="post-img-content">
			                    <img src="https://d13yacurqjgara.cloudfront.net/users/63407/screenshots/1518625/charminar_dribbble.png" class="img-responsive" />
			                    <span class="post-title"><b>Senior Backend Developer</b><br />
			                        <b>Hyderabad, India</b></span>
			                </div>
			                <div class="content">
			                    <div class="author">
			                        <time datetime="2014-01-20">January 20th, 2014</time>
			                    </div>
			                    <div>
8+ years of Java (backend) Development<br>
Working knowledge of the Spring Framework<br>
Experience with Scrum<br>
Experience with DevOps tools and procedures<br>
Experience with building scalable (clustered) systems<br>
Self-starting<br>
Experience with puppet, messaging systems and Elasticsearch is a pre<br>
Knowledge of reactive, actor based systems is a pre<br>
			                    </div>
			                    <div>
			                        <a href="mailto:vacancies@servmill.com" class="btn btn-success btn-sm">APPLY</a>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<!-- End Team Members -->
			<!-- Divider -->
			<!-- Start Clients Carousel -->
	 </div>
  </div>
 </div>
</div>
<!-- end it -->
<script type="text/javascript" src="js/js/js/script.js"></script>
<?php include_once("servtemp/analyticstracking.php") ?>
<?php footerservmill(); ?>


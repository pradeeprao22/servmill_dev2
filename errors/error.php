<?php
	session_start();

	require("../htmls.php");

	require("../functions.php");

	headhtml();

header("HTTP/1.0 404 Not Found");

?>
<title>404 Page not found | Servmill</title>
<?php require '../servtemp/navigation.php'; ?>

<div class="page-banner" style="padding:40px 0; background: url(https://www.servmill.com/images/404.jpg) center #f9f9f9;">

	<div class="container">

		<div class="row">

			<center><h1>404</h1></center>

		</div>

	</div>

</div>

<!-- Start Content -->

<div id="content">

	<div class="container">

		<div class="page-content">

			<div class="row">

				<center>

					<p>OOPS,  SORRY WE CAN'T FIND THAT PAGE</p>

					<p>Either something went wrong or the page doesn't exist anymore.</p>

					  <a class="btn btn-raised btn-info" href="https://www.servmill.com/myhome">Home</a>

				</center>

        <br><br>

			</div>

		</div>

	</div>

</div>

<!-- Divider -->

<!-- end it -->

<div class="copyright navbar-fixed-bottom">

  <div class="container">

    <div class="col-md-6">

      <p>Servmill © 2015 - 2017</p>

    </div>

    <div class="col-md-6">

      <ul class="bottom_ul">

        <li><a href="https://www.servmill.com/about">About</a></li>

        <li><a href="https://www.servmill.com/activesoon">Developers</a></li>

        <li><a href="https://www.servmill.com/activesoon">Blog</a></li>

        <li><a href="https://www.servmill.com/activesoon">Contact us</a></li>

      </ul>

    </div>

  </div>

</div>

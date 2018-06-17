<div id="header">
<header class="navbar navbar-static-top top-bar" id="top" role="banner">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand web-logo" href="#" style="padding: 6px"><img src="images/1.png"></a>
</div>

<nav id="bs-navbar" class="collapse navbar-collapse bs-navbar-collapse"  role="navigation">
<ul class="nav navbar-nav pull-right">
<li><a class="menu-item nav1" href="home.php">Services</a></li>

<li><a class="menu-item nav2" href="servicecateg.php">Categories</a></li>

<?php

if ($_SESSION['logged'] != 'guest'){

echo '<li><a href="logout.php" class="menu-item nav3">Logout</a></li>

      <li><a href="myaccount.php" class="menu-item nav3">View Account</a></li>

      <li><a class="menu-item nav4" href="#">Account</a></li>';

	}else{

		echo '<li><a href="login.php" class="menu-item nav4">Login</a></li>';

	}

  ?>
<script type='text/javascript'>

	jQuery(document).ready( function() {

		jQuery('.nav3').hide();

		jQuery('.nav4').click( function() {

			jQuery('.nav3').toggle('fade');

		});

	});

</script>
</ul>
</nav>
</div>
</header>
</div>
<br>
<br>

<?php
	session_start();
	require("htmls.php");
	headhtml();
	require("functions.php");
	$_SESSION['logged']= 'guest';
?>
<title>coming soon | Servmill</title>
</head>
<body>
	<!--<div id="main_container">
		<div class="top_bar">
		</div>
	</div>-->
<?php include 'servtemp/navigation.php'; ?>
<br>
<br>
<br>
<br>
<center><div class="panel" ><img src="http://www.servmill.com/images/comingsoon.png"/></div></center>
</body>
<br>
<br>
<br>
<br>
<?php footerservmill(); ?>

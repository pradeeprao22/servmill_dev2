<?php
function headhtml(){ echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Servmill - Administrator 2.0</title>

	<link type="text/css" href="./style.css" rel="stylesheet" />

	<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>

	<script type="text/javascript" src="./js/cufon-yui.js"></script>

	<script type="text/javascript" src="./js/colaboratelight_400.font.js"></script>
	<![endif]-->

	<script type="text/javascript" src="./js/dropdown.js"></script>

	<script type="text/javascript" src="./js/visualize.jquery.js"></script>

	<!-- visualize plugin for graphs / statistics -->
	<script type="text/javascript" src="./js/iphone-style-checkboxes.js"></script> <!-- iphone like checkboxes -->

	<!--<script type="text/javascript" src="./js/jquery.cleditor.min.js"></script> -->
	<!-- wysiwyg editor -->

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional Theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <!-- jquery CSS-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

  <!-- Ativandoo jQuery light box plugin -->
  <script type="text/javascript" src="../user/jquery.form.js"></script>
	<link href="../facebox1.2/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="../css/example.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="../facebox1.2/lib/jquery.js" type="text/javascript"></script>
	<script src="../facebox1.2/src/facebox.js" type="text/javascript"></script>

	<script type="text/javascript">
					jQuery(document).ready(function($) {
					  $("a[rel*=facebox]").facebox({
						loadingImage : "../src/loading.gif",
						closeImage   : "../src/closelabel.png"
					  })
					})
	</script>

	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
	background-color: #444;
	padding: 10px;
	width: 518px;
	margin: 39px 0 0 68px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
  <meta charset="UTF-8">
</head>
'; }
function foothtml(){ echo '<div class="one_third last column">
		<h5></h5>
			</div>
				<hr />
					</div><!-- three_fourth last -->
					</div>
				<div class="clearboth" style="padding-bottom:20px;"></div>
				</div> <!-- inner -->
			</div> <!-- primary_right -->
		</div> <!-- bgwrap -->
	</div> <!-- container -->
</body>
</html>';
			}
?>

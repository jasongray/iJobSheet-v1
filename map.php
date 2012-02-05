<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="user-scalable=no, width=device-width" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>iJobSheet</title>
	<link rel="stylesheet" type="text/css" href="css/iphone.css" media="only screen and (max-width:480px)" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen and (max-width:481px)" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/iphone.js"></script>
</head>
<body>
	<div class="content-wrapper">
		<header>
		<h1>JobSheet</h1>
		<div class="leftButton"><a href="jobsheet.php">JobSheet</a></div>
		</header>
		<div id="container">
		<section>
			<h2>View Location</h2>
			<div id="map_canvas"></div>
			<input type="hidden" name="map_address" id="map_address" value="<?php echo $_GET['address'];?>"/>
		</section>
		</div>
	</div>
</body>
</html>
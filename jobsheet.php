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
		<div class="leftButton"><a href="index.php">Home</a></div>
		</header>
		<div id="container">
		<section>
			<div class="inner">
			<table class="joblist" cellpadding="0" cellspacing="0">
				<thead>
				<tr>
					<th>JN</th>
					<th>Schedule</th>
					<th>&nbsp;</th>
				</tr>
				</thead>
				<tbody>
				<tr class="row1">
					<td class="jn">1001</td>
					<td>6 Feb 2012 9:00AM</td>
					<td class="icon" valign="middle"><a href="jobview.php?jn=1001"><img src="img/chevron_circle.png" alt="&lt;"/></a></td>
				</tr>
				<tr class="row2">
					<td colspan="2"><a href="map.php?address=<?php echo urlencode('83 Denman Ave, Woolooware 2229');?>">83 Denman Ave, Woolooware 2229</a></td>
				</tr>
				<tr class="row3">
					<td colspan="2">Leaking Tap in Kitchen</td>
				</tr>
				<tr class="row1">
					<td class="jn">1011</td>
					<td>6 Feb 2012 9:45AM</td>
					<td class="icon" valign="middle"><a href="jobview.php?jn=1001"><img src="img/chevron_circle.png" alt="&lt;"/></a></td>
				</tr>
				<tr class="row2">
					<td colspan="2"><a href="map.php?address=<?php echo urlencode('83 Denman Ave, Woolooware 2229');?>">83 Denman Ave, Woolooware 2229</a></td>
				</tr>
				<tr class="row3">
					<td colspan="2">Leaking Tap in Kitchen</td>
				</tr>
				<tr class="row1">
					<td class="jn">1013</td>
					<td>6 Feb 2012 11:15AM</td>
					<td class="icon" valign="middle"><a href="jobview.php?jn=1001"><img src="img/chevron_circle.png" alt="&lt;"/></a></td>
				</tr>
				<tr class="row2">
					<td colspan="2"><a href="map.php?address=<?php echo urlencode('83 Denman Ave, Woolooware 2229');?>">83 Denman Ave, Woolooware 2229</a></td>
				</tr>
				<tr class="row3">
					<td colspan="2">Leaking Tap in Kitchen</td>
				</tr>
				<tr class="row1">
					<td class="jn">1019</td>
					<td>7 Feb 2012 8:15AM</td>
					<td class="icon" valign="middle"><a href="jobview.php?jn=1001"><img src="img/chevron_circle.png" alt="&lt;"/></a></td>
				</tr>
				<tr class="row2">
					<td colspan="2"><a href="map.php?address=<?php echo urlencode('83 Denman Ave, Woolooware 2229');?>">83 Denman Ave, Woolooware 2229</a></td>
				</tr>
				<tr class="row3">
					<td colspan="2">Leaking Tap in Kitchen</td>
				</tr>
				</tbody>
			</table>
			</div>
		</section>
		</div>
	</div>
</body>
</html>
<?php	session_start()	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThemeWorld | Search</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<!--
widget, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/widget/

License: Creative Commons Attribution
//-->
</head>

<body class="noheader">
<div id="container">
        <div id="header">
    	<h1><a href="index.php">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
		
		
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.php">Home</a></li>
            <li><a " href="parks.php">Parks</a></li>
            <li><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="rides.php">Roller Coasters</a></li>
                    <li><a href="showwaterrides.php">Water rides</a></li>
                    <li><a href="showfamilyrides.php">Family rides</a></li>
                </ul>
            </li>
            <li><a href="searchPark.php">Search Parks</a></li>
            <li class="selected"><a href="about.php">About Us</a></li>
        </ul>
		
	</div>
	<div id="body">            
		<div id="content">
            <div class="box">
		<image style="float: right; display: block" src="http://www.carewelltravels.com/newcarewell/packageImage/4c4ab889ed9610724201045521.jpg" height="300px" width="300px" />
		<h1>About Us</h1><hr /><br />
		<p>We are a group of Swiss Engineers on a mission to show the world the best theme parks in the US.
		We hope to expand our horizons to the world eventually. The information in this site was carefully
		and painstakenly collected for your personal enjoyment. We have also added the ability to create
		an account with us so that you can also contribute to our ever expanding repository of theme parks,
		rides, attractions, and whatever else you might hope to find at a themepark.</p>
		<hr />
		<h4>Contact Us</h4>
		<address><a href="mailto:SwissArmyEngineerGenerals@gmail.com">Swiss Army Engineers</a></address>
            </div>
        </div>
        <?PHP
		include'sidebar.php';
	?>
    	<div class="clear"></div>
    </div>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>

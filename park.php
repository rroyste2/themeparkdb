<?php
   include('db_connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Themepark Database</title>
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
    	<h1><a href="/">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.php">Home</a></li>
            <li class="selected"><a class="has_submenu" href="parks.php">Parks</a>
            	<ul>
                	<li><a href="#">Top 10</a></li>
                    <li><a href="#">By State</a></li>
                    <li><a href="#">Another link</a></li>
                </ul>
            </li>
            <li><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="#">Top 10</a></li>
                    <li><a href="#">Fastest</a></li>
                    <li><a href="#">Tallest</a></li>
                </ul>
            </li>
            <li><a href="#">Search Parks</a></li>
            <li><a class="has_submenu" href="#">User Panel</a>
				<ul>
		<!-- These are the default options if there is no user logged in -->
                    <li><a href="login.php">Log On</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

        <div id="body">            
            <div id="content">
                <div class="box">                                  
              <?php
                  	$park = $_GET['id'];
					$query = "SELECT * FROM rollercoaster r INNER JOIN general_info g ON g.Park_name = r.Park where g.Park_name = '$park'";
					$result = mysqli_query($db, $query)or die("Error Querying Database");
                    $row = mysqli_fetch_array($result);
					$result = mysqli_query($db, $query) or die ("Error Querying Database - park");	
					while($row = mysqli_fetch_array($result)){
							$city = $row['City'];
							$state = $row['State'];
							$zip = $row['Zipcode'];
							$adult = $row['adult_price'];
							$child = $row['children_price'];
							$phone = $row['Phone_Number'];
					}
						echo "<h1><center>" . $park . "</center><br /></h1>
                    	 	<p>
                    	 	<div id=featuredparkimage>Content for  id featuredparkimage Goes Here</div>
                    		<h4>Location: " . $city . ", " .  $state . " " . $zip . "<br />
                    		Phone: " . $phone . "<br />
                    		Adult Price: " . $adult . "<br />
                    		Child Price: " . $child . "<br /></h4>
                    		</p>";
                    	echo "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque. Morbi fermentum, nunc id pellentesque blandit, lectus velit pellentesque nisl, a condimentum est velit sed nisi. Sed libero velit, eleifend nec porttitor a, porta quis leo. In hac habitasse platea dictumst.</p>";
						echo "</p>";
						echo "<h4><center>Rides at $park</h4>";						
   						$result = mysqli_query($db, $query) or die ("Error Querying Database - ride");
   						echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>Type</th><th>Speed</th><th>Height</th><th>Length</th></tr>\n\n";
   					while($row = mysqli_fetch_array($result)) {
  						$name = $row['Name'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td >$type</td><td >$speed mph</td><td >$height ft</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n"; 
					?>
              </div>
        </div>
        
        <div class="sidebar">
            <ul>	
               <li>
                    <h4><span>Our <strong>Pages</strong></span></h4>
                    <ul class="blocklist">
                        <li><a href="parks.php">Parks</a></li>
                        <li><a href="rides.php">Rides</a></li>
                        <li><a href="#">search parks</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
              </li>
                
                <li>
                    <h4><span>About <strong>Us</strong></span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Themepark database is a comprehensive guide to theme parks and rides within the united states.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <h4 class="h4"><span>Cool <strong>Sites</strong></span></h4>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates"><strong>ThemeForest</strong></a> - premium HTML templates, WordPress themes and PHP scripts</li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting"><strong>Web hosting</strong></a> - 50 dollars off when you use promocode <strong>awesome50</strong></li>
                        <li><a href="http://www.4templates.com/?aff=spykawg" title="4templates"><strong>4templates</strong></a> - brilliant premium templates</li>
                    </ul>
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">

    <div id="footer-links">

    <!-- A link to http://www.spyka.net must remain. To remove link see http://www.spyka.net/licensing -->
            <p>&copy; ThemePark Database 2011. Website design by <a href="http://www.spyka.net">Free CSS Templates</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a></p>
    </div>  
</div>
</body>
</html>

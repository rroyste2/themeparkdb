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

<body class="homepage">
<div id="container"> 
	<div id="header">
    	<h1><a href="/">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><a href="index.php">Home</a></li>
            <li><a class="has_submenu" href="parks.php">Parks</a>
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
    
    <div id="slides-container" class="slides-container">
      <div id="slides">
            <div>
                <div class="slide-image"><img src="images/untitled.jpg" alt="Slide #1 image" width="344" height="242" /></div>
                <div class="slide-text">
                    <h2>Bizarro</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque.</p>
                    <p class="frontpage-button">
                    	<a href="#">Go to Park Page</a>
                    </p>

            
                </div>
            </div>
            
          <div>
            	<h2>Have fun with slides!</h2>
                <p>These slides can contain anything a webpage can! HTML, Javascript, images, flash or whatever! They're completely easy to edit and add to as well, no need to bother editing or even going anywhere near some confusing Javascript files, simply add a &lt;div&gt;&lt;/div&gt; tag with your slider content to the "slides" contain - it takes just seconds to do!</p>
                <p>These slides work using the absolutely wonderful lightweight jQuery plugin <a href="http://plugins.jquery.com/project/jFlow">jFlow</a>, originally written by Kean Loong and modified by both Mauro Belgiovine and spyka Webmaster. The script has been licensed under the open source MIT license, so feel free to play around and modify it as much or as little as you wish!</p>
            </div>
            
            <div>
                <div class="slide-image slide-image-right"><img src="images/slide-3.png" alt="Slide #3 image" /></div>
                <div class="slide-text">
                    <h2>Slide #3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque. Curabitur at metus tincidunt dui tristique molestie. Donec porta molestie tortor. Fusce euismod consectetuer sapien. Fusce ac velit.</p>

            
                </div>
            </div>
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
          <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
        </div>
            
        <div id="body">            
            <div id="content">
                <div class="box">                                  
                    <p>
                      <?php
                    	$query = "SELECT park_id FROM general_info ORDER BY RAND() LIMIT 1";
                    	$result = mysqli_query($db, $query)or die("Error Querying Database");
                    	$row = mysqli_fetch_array($result);
                    	$id = $row['park_id'];
						$query = "SELECT * FROM general_info WHERE park_id = '$id'";
						$result = mysqli_query($db, $query) or die ("Error Querying Database - feature");	
						while($row = mysqli_fetch_array($result)){
							$park = $row['Park_Name'];
							$city = $row['City'];
							$state = $row['State'];
							$zip = $row['Zipcode'];
							$adult = $row['adult_price'];
							$child = $row['children_price'];
							$phone = $row['Phone_Number'];
							$about = $row['about'];
							$picture = $row['picture'];
							$url = $row['url'];
						}
					?>
                    <?php
						echo "<h1><center><a href='$url'>" . $park . "</a></center><br /></h1>
                    	 	<p>
                    	 	<div id=featuredparkimage><img src='$picture' width='275' height='200' /></div>
                    		<h4>Location: " . $city . ", " .  $state . " " . $zip . "<br />
                    		Phone: " . $phone . "<br />
                    		Adult Price: " . $adult . "<br />
                    		Child Price: " . $child . "<br /></h4>
                    		</p>";
                    	echo "<p>$about</p>";
						echo "<h4><center>Top Rides at $park</h4>";
                		$query = "SELECT * FROM rollercoaster r INNER JOIN general_info g ON g.Park_name = r.Park where g.Park_id = '$id' ORDER BY RAND() LIMIT 3";
  
  						$result = mysqli_query($db, $query)
   							or die("Error Querying Database");
						
   						echo "<table id=\"toprides\">\n<tr><th>Ride 1</th><th>Ride 2</th><th>Ride 3</th></tr>\n\n";
   						echo "<tr>";
   						while($row = mysqli_fetch_array($result)) {
  							$name = $row['Name'];
  							$type = $row['Type'];
  							$speed = $row['Speed_mph'];
  							$height = $row['Height_ft'];
							$length = $row['Length_min'];
		  					echo "<td><h4>$name</h4><br />Type: $type <br />Speed: $speed mph<br />Height: $height ft<br />Length: $length min</td>";
	   					 }
	   					 echo "</tr></table>";
					?>
                    </p>
              </div>
        </div>
        <?php
        	include('sidebar.php');
        ?>
    	<div class="clear"></div>
    </div></div>
    <?php
    	include('footer.php');
    ?>

</body>
</html>

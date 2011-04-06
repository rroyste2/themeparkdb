<?php
session_start();
?>
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
            	
            </li>
            <li><a class="has_submenu" href="index.php">Rides</a>
            	<ul>
                	<li><a href="showcoasters.php">Coasters</a></li>
                    <li><a href="showwaterrides.php">Water rides</a></li>
                    <li><a href="showfamilyrides.php">Family rides</a></li>
                </ul>
            </li>
            <li><a class="has_submenu" href="searchPark.php">Search Parks</a>
			<ul>
                	<li><a href="#">For coasters</a></li>
                    <li><a href="#">For water rides</a></li>
                    <li><a href="#">For family rides</a></li>
                </ul>
            </li>
			
			
			
            <li><a class="has_submenu" href="login.php">User Panel</a>
				<ul>
		<!-- These are the default options if there is no user logged in -->
                    <li><a href="login.html">Log On</a></li>
                    <li><a href="register.html">Register</a></li>
					<li><a href="logout.php">Log Off</a></li>
                </ul>
				
				<?php
		if(isset($_SESSION['username'])){?>
		<li><a class="has_submenu" href="index.php">Edit Parks</a>
			<ul>
                	<li><a href="addPark.html">Add Park</a></li>
                    <li><a href="deletePark.html">Delete park</a></li>
                </ul>
            </li>
			<?php
			}
			?>
				
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
		
	</div><br/>
    
	<h2><font color= "ff7000">
		<?php
		if(isset($_SESSION['username'])){
			echo "Welcome to the fun {$_SESSION['username']}!";
}
		?></h2>
		
    <?php
    	include('slides.php');
    ?>
            
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
                		$query = "SELECT * FROM rollercoaster r INNER JOIN general_info g ON g.Park_name = r.Park where g.Park_id = '$id' ORDER BY RAND() LIMIT 5";
  
  						$result = mysqli_query($db, $query)
   							or die("Error Querying Database");
						
   						echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>Type</th><th>Speed</th><th>Height</th><th>Length</th></tr>\n\n";
   						while($row = mysqli_fetch_array($result)) {
  						$name = $row['Name'];
  						$park = $row['Park'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td >$type</td><td >$speed mph</td><td >$height ft</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n"; 
					?>
                    </p>
              </div>
        </div>
        <?php
        	include('sidebar.php');
        ?>
    	<div class="clear"></div>
    </div></div>
    

</body>
</html>

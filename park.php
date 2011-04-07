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
            <li class="selected"><a " href="parks.php">Parks</a></li>
            <li><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="rides.php">Roller Coasters</a></li>
                    <li><a href="showwaterrides.php">Water rides</a></li>
                    <li><a href="showfamilyrides.php">Family rides</a></li>
                </ul>
            </li>
            <li><a href="searchPark.php">Search Parks</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
		
	</div>

        <div id="body">            
            <div id="content">
                <div class="box">                                  
              <?php
              		
                  	$thisid = $_GET['id'];
					$query = "SELECT * FROM parks p INNER JOIN general_info g ON p.id = g.park_id INNER JOIN zipcode z ON p.id = z.zip_id WHERE p.id = '$thisid'";
					$result = mysqli_query($db, $query)or die("Error Querying Database6");
                    $row = mysqli_fetch_array($result);
					$park = $row['name'];
					$city = $row['City'];
					$state = $row['State'];
					$zip = $row['zipcode'];
					$adult = $row['adult_price'];
					$child = $row['children_price'];
					$phone = $row['Phone_Number'];
					$about = $row['about'];
					$picture = $row['picture'];
					$url = $row['url'];
						echo "<h1><center><a href='$url'>" . $park . "</a></center><br /></h1>
                    	 	<p>
                    	 	<div id=featuredparkimage><img src='$picture' width='275' height='200' /></div>
                    		<h4>Location: " . $city . ", " .  $state . " " . $zip . "<br />
                    		Phone: " . $phone . "<br />
                    		Adult Price: " . $adult . "<br />
                    		Child Price: " . $child . "<br /></h4>
                    		</p>";
                    	echo "<p>$about</p>";	
						$query = "SELECT * from rollercoaster r WHERE r.park_id = '$thisid'";
   						$result = mysqli_query($db, $query) or die ("Error Querying Database - ride");
   						$rows = true;
   						if ($result){
   						
   					
   					while($row = mysqli_fetch_array($result)) {
   						while ($rows){
   						echo "<h4><center>Rollercoasters at $park</h4>";
   						echo "<table id=\"rollercoasters\">\n<tr><th>Name</th><th>Type</th><th>Speed</th><th>Height</th><th>Length</th></tr>\n\n";
   						$rows = false;
   						}
  						$name = $row['coaster_name'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td >$type</td><td >$speed mph</td><td >$height ft</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n<br />";
	   				 }
	   				 $query = "SELECT * from familyrides f WHERE f.park_id = '$thisid'";
   						$result = mysqli_query($db, $query) or die ("Error Querying Database - fride");
   						$rows = true;
   						if ($result){
   						
   					
   					while($row = mysqli_fetch_array($result)) {
   						while ($rows){
   						echo "<h4><center>Family Rides at $park</h4>";
   						echo "<table id=\"familyrides\">\n<tr><th>Name</th><th>Type</th><th>Length</th></tr>\n\n";
   						$rows = false;
   						}
  						$name = $row['ride_name'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td >$type</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n<br />";
	   				 }
	   				 $query = "SELECT * from waterrides w WHERE w.park_id = '$thisid'";
   						$result = mysqli_query($db, $query) or die ("Error Querying Database - fride");
   						$rows = true;
   						if ($result){
   						
   					
   					while($row = mysqli_fetch_array($result)) {
   						while ($rows){
   						echo "<h4><center>Water Rides at $park</h4>";
   						echo "<table id=\"familyrides\">\n<tr><th>Name</th><th>Type</th><th>Length</th></tr>\n\n";
   						$rows = false;
   						}
  						$name = $row['ride_name'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td >$type</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n<br />";
	   				 }
					?>
              </div>
        </div>
        
        <?php
        	include('sidebar.php');
        ?>
    	<div class="clear"></div>
    </div></div>
    <?php
    	include('footerSmall.php');
    ?>
</body>
</html>

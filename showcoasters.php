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
    	<h1><a href="/">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.php">Home</a></li>
            <li><a class="has_submenu" href="parks.php">Parks</a>
            	
            </li>
            <li class="selected"><a class="has_submenu" href="rides.php">Rides</a>
            	
            </li>
            <li><a href="#">Search Parks</a></li>
            <li><a class="has_submenu" href="#">User Panel</a>
				<ul>
		<!-- These are the default options if there is no user logged in -->
                    <li><a href="login.html">Log On</a></li>
                    <li><a href="register.html">Register</a></li>
					<li><a href="logout.php">Log Off</a></li>
                </ul>
            </li>
			
						
							<?php
		if(isset($_SESSION['username'])){?>
		<li><a class="has_submenu" href="index.php">Edit Rides</a>
			<ul>
                	<li><a href="addRide.html">Add Ride</a></li>
                    <li><a href="deleteRide.html">Delete Ride</a></li>
                </ul>
            </li>
			<?php
			}
			?>
				
            </li>
			
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

        <div id="body">            
            <div id="content">
                <div class="box">                                  
              		<?php
                	$query = "SELECT * FROM rollercoaster";
  
  					$result = mysqli_query($db, $query)
   					or die("Error Querying Database");
   					echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>Park</th><th>Type</th><th>Speed</th><th>Height</th><th>Length</th></tr>\n\n";
   					while($row = mysqli_fetch_array($result)) {
  						$name = $row['Name'];
  						$park = $row['Park'];
  						$type = $row['Type'];
						$speed = $row['Speed_mph'];
						$height = $row['Height_ft'];
						$length = $row['Length_min'];
		  				echo "<tr><td>$name</td><td ><a href = \"park.php?id=" . $park . "\">$park</a></td><td >$type</td><td >$speed mph</td><td >$height ft</td><td >$length min</td></tr>\n";
	   				 }
	   				 echo "</table>\n"; 
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

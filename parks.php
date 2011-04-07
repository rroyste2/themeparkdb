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
                	//$query = "SELECT * FROM general_info ORDER BY Park_Name";
					$query = "SELECT name, City, State, adult_price, children_price, Phone_Number, park_id FROM parks INNER JOIN general_info g ON g.park_id = parks.id ORDER BY name";
  
  					$result = mysqli_query($db, $query)
   					or die("Error Querying Database1");
   					echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>Location</th><th>Adult Price</th><th>Child Price</th><th>Phone Number</th></tr>\n\n";
   					while($row = mysqli_fetch_array($result)) {
  						$id = $row['park_id'];
  						$name = $row['name'];
  						$city = $row['City'];
  						$state = $row['State'];
						$zip = $row['Zipcode'];
						$adult = $row['adult_price'];
						$child = $row['children_price'];
						$phone = $row['Phone_Number'];
		  				echo "<tr><td><a href = \"park.php?id=" . $id . "\">$name</a></td><td >$city, $state $zip</td><td >$adult</td><td >$child</td><td >$phone</td></tr>\n";
	   				 }
	   				 echo "</table>\n"; 
                ?>
              </div>
        </div>
        
	    <?php
	    	include('sidebar.php');
	    ?>
		<div class="clear"></div>
	    </div>
	</div>
	<?php
	    include('footerSmall.php');
	?>

</body>
</html>

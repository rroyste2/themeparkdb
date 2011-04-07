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
    	<h1><a href="index.php">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
		
		
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><a href="index.php">Home</a></li>
            <li><a " href="parks.php">Parks</a></li>
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
		
	</div><br/>
	
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
						$query = "SELECT * from general_info g INNER JOIN parks p ON g.park_id = p.id INNER JOIN zipcode z ON p.id = z.zip_id ";
						$result = mysqli_query($db, $query) or die ("Error Querying Database - feature");	
						while($row = mysqli_fetch_array($result)){
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
    		include('footerSmall.php');
    	?>

</body>
</html>

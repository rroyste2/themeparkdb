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
        <h1><a href="/">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>


        <div class="clear"></div>
    </div>
    <div id="nav">
        <ul class="sf-menu dropdown">
                <li><a href="index.php">Home</a></li>
            <li><a class="has_submenu" href="parks.php">Parks</a>

            </li>
            <li><a class="has_submenu" href="rides.php">Rides</a>

            </li>
            <li class="selected"><a class="has_submenu" href="searchPark.php">Search Parks</a>
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

        </div>
	<div id="body">            
		<div id="content">
            <div class="box">
		<form action="searchPark.php" method="get">
			Enter a Query: <input type=text name=query /><input type=submit value="Search" />
		</form><br /><hr />
		<!--TODO: Query Code -->
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

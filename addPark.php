<?php 
 session_start();
?>

 <?php

include('db_connect.php');
	$park = $_POST ['park'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$adult = $_POST['adult_price'];
	$child = $_POST['children_price'];
	$phone = $_POST['phone'];
	$about = $_POST['about'];
	$picture = $_POST['picture'];
	$url = $_POST['url'];
	
	?>
	adult
	<?php
	echo  $adult;



?>

<?php
//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$query= "INSERT INTO general_info (city, State, Zipcode, adult_price, children_price, Phone_Number, Park_Name, url, about, picture) VALUES('$city','$state','$zipcode','$adult','$child', '$phone', '$park', '$url', '$about', '$picture')";
$result = mysqli_query($db, $query)
or die("Error Querying Database2");
mysqli_close($db);
?>
<meta http-equiv="Refresh" content="0;
URL=http:index.php">


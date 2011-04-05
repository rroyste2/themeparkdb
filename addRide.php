<?php 
 session_start();
?>

 <?php

include('db_connect.php');
	$rideType = $_POST ['rideType'];
	
	
	?>
	type
	<?php
	echo  $rideType;



?>

<?php
	 if (rideType == "Roller Coaster")
	 { ?>
	 <form>
	 <tr><td>Ride name <input type = "text" name = "ride" size = '50'></td></tr>
	 <?php
	 }
	 else if  (rideType == "Water Ride") {
	 ?>
	 water
	 <?php
	 }
	 
	 else if (rideType == "Family Ride") {
	 ?>
	 family
	 <?php
	 }
	 ?>


<?php
//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$query= "INSERT INTO general_info (city, State, Zipcode, adult_price, children_price, Phone_Number, Park_Name, url, about, picture) VALUES('$city','$state','$zipcode','$adult','$child', '$phone', '$park', '$url', '$about', '$picture')";
$result = mysqli_query($db, $query)
or die("Error Querying Database2");
mysqli_close($db);
?>
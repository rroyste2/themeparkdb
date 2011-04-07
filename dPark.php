<?php 
 session_start();
?>

 <?php

include('db_connect.php');
	$park = $_POST ['park'];
	

//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$query= "DELETE FROM general_info where Park_Name = '$park' ";
$result = mysqli_query($db, $query)
or die("Error Querying Database3");
mysqli_close($db);
?>
<meta http-equiv="Refresh" content="0;
URL=http:index.php">
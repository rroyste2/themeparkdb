<?php 
 session_start();
?>
<?php
$_session ['Park Name'] = '$park';
$_session ['City'] = '$city';
$_session ['State'] = '$state';
$_session ['Zipcode'] = '$zip';
$_session ['adult_price'] = '$adult';
$_session ['children_price'] = '$child';
 $_session ['Phone_Number'] = '$phone';
 //need to add phone columns
$_session ['about'] = '$about';
$_session ['picture'] = '$picture';
$_session ['url'] = '$url';


 ?>
 <?php

include('db_connect.php');
	$park = $ POST ['Park_Name'];
	$city = $POST['City'];
	$state = $POST['State'];
	$zip = $POST['Zipcode'];
	$adult = $POST['adult_price'];
	$child = $POST['children_price'];
	$phone = $POST['Phone_Number'];
	$about = $POST['about'];
	$picture = $POST['picture'];
	$url = $POST['url'];



?>
<?php
$query= "INSERT INTO general_info (park, city,state,zip,adult,child,phone,about,picture,url) VALUES('$park', '$city','$state','$zip', '$adult', '$child', 'phone', '$about', '$picure', '$url')";
$result = mysqli_query($db, $query)
or die("Error Querying Database");
mysqli_close($db);
?>
	 <META
		HTTP-EQUIV="refresh"
		CONTENT="0; URL =index.php">

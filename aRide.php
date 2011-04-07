<?php 
session_start();
?>

<?php
include('db_connect.php');
$park = $_POST ['park'];
	$type = $_POST ['type'];
	$name = $_POST ['name'];
	$type = $_POST['type'];
	$speed = $_POST['speed'];
	$height = $_POST['height'];
	$length = $_POST['length'];
	?>
	<?php
 if  ($type == "Roller Coaster") {
	
	$query= "INSERT INTO rollercoaster (name, type, speed_mph, height_ft, length_min) VALUES('$name','$type','$speed','$height','$length')";
		//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database3");
	mysqli_close($db);
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
<?php
}

else if ($type == "Water Ride") {
?> waterride if <?php
	$query= "INSERT INTO waterrides (Name, Type, Speed_mph, Height_ft, Length_min) VALUES('$name','$type','$speed','$height','$length')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database");
	mysqli_close($db);
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
<?php
	}
else if ($type == "Family Ride") {
?> familyride if <?php
	$query= "INSERT INTO familyrides (Name, Type, Speed_mph, Height_ft, Length_min) VALUES('$name','$type','$speed','$height','$length')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database5");
	mysqli_close($db);
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
	<?php
	}
	?>
	
	</form>



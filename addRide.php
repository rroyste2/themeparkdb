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
	
	$query= "INSERT INTO rollercoaster (name, park, type, speed_mph, height_ft, length_min) VALUES('$name','$park','$type','$speed','$height','$length')";
		//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database3");
	mysqli_close($db);
}

else if ($type == "Water Ride") {
?> waterride if <?php
	$query= "INSERT INTO waterrides (Name) VALUES('$name')";
	
	}
else if ($type == "Family Ride") {
	$query= "INSERT INTO waterrides (name, park, type, speed_mph, height_ft, length_min) VALUES('$name','$park','$type','$speed','$height','$length')";
	}
	?>
	
	</form>
	


<?php
	echo $type;
	?>


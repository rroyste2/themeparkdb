<?php 
 session_start();
?>

 <?php

include('db_connect.php');
	$rideType = $_POST ['rideType'];
	
	
	?>

<?php
	 if ($rideType == "Roller Coaster")
	 { ?>
	
	 <form method="post" action="addRide2.php">
		<table>
		<tr><td>Coaster name <input type = "text" name = "name" size = '50'></td></tr>
		<tr><td>Type<input type="text" name="type" size="20" id = "type"></td></tr>
		<tr><td>Speed<input type="number" name="speed" size="20" id = "speed"></td></tr>
		<tr><td>Height<input type="number" name="height" size="20" id = "height"></td></tr>
		<tr><td>Length<input type="number" name="length" size="20" id = "length"></td></tr>
		</td></tr>
						
		</table>

		<input type="submit" value="Add Ride" name="submit" />
	</form>
	
	<?php
	
	 }
	 else if  (rideType == "Water Ride") {
	 ?>
	 <form method="post" action="addRide2.php">
		<table>
		<tr><td>Ride name <input type = "text" name = "name" size = '50'></td></tr>
		<tr><td>Length<input type="number" name="length" size="20" id = "length"></td></tr>
		</td></tr>
						
		</table>

		<input type="submit" value="Add Ride" name="submit" />
	</form>
	 <?php
	 }
	 
	 else if (rideType == "Family Ride") {
	 ?>
	 <form method="post" action="addRide2.php">
		<table>
		<tr><td>Ride name <input type = "text" name = "name" size = '50'></td></tr>
		<tr><td>Length<input type="number" name="length" size="20" id = "length"></td></tr>
		<tr><td>Type<input type="text" name="type" size="20" id = "type"></td></tr>
		</td></tr>
						
		</table>

		<input type="submit" value="Add Ride" name="submit" />
	</form>
	 <?php
	 }
	 ?>



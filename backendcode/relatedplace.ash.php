<?php
require "dbcon.ash.php";


$name = $_GET['name'];
$placedivi = "SELECT divi FROM places WHERE name='$name';";
$diviName = mysqli_query($conn,$placedivi);

while ($rowdivi = mysqli_fetch_assoc($diviName)) {
	# code...
	$division = $rowdivi['divi'];

	$diviinfo = "SELECT * FROM places WHERE divi='$division';";
	$diviResult = mysqli_query($conn,$diviinfo);

	/*while ($rowdivision = mysqli_fetch_assoc($diviResult)) {
		# code...
		//echo $rowdivision['name'];
	}*/
}








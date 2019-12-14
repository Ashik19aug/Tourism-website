<?php
require "dbcon.ash.php";

$sqlD = "select distinct divi from places;";
$resultD = mysqli_query($conn,$sqlD);


while($row= mysqli_fetch_assoc($resultD))
{
	$divi=$row['divi'];
	//echo $row['divi'];

	$sqlD2 = "select distinct name from places where divi='$divi';";
	$resultD2 = mysqli_query($conn,$sqlD2);
	//echo "<br>";

	while($row1= mysqli_fetch_assoc($resultD2))
	{
		//echo $row1['name'];
		//echo "<br>";
	}

}

?>
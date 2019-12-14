<?php
require "dbcon.ash.php";


/*  Dhaka  */
$sqlD = "SELECT name, divi FROM places WHERE divi='Dhaka' ;";
$resultD = mysqli_query($conn,$sqlD);
while ($rowD = mysqli_fetch_assoc($resultD)) {
	# code...
	echo $rowD['name']."<br>";
}

/*  Sylhet  */
$sqlS = "SELECT name, divi FROM places WHERE divi='Sylhet' ;";
$resultS = mysqli_query($conn,$sqlS);
while ($rowS = mysqli_fetch_assoc($resultS)) {
	# code...
	echo $rowS['name']."<br>";
}

/*  Khulna  */
$sqlK = "SELECT name, divi FROM places WHERE divi='Khulna' ;";
$resultK = mysqli_query($conn,$sqlK);
while ($rowK = mysqli_fetch_assoc($resultK)) {
	# code...
	echo $rowK['name']."<br>";
}

/* Chittagong */
$sqlc = "SELECT name, divi FROM places WHERE divi='Chittagong' ;";
$resultc = mysqli_query($conn,$sqlc);
while ($rowc = mysqli_fetch_assoc($resultc)) {
	# code...
	echo $rowc['name']."<br>";
}
<?php

$servername="localhost";
$dbusername="root";
$dbpaw="";
$dbname="tourismwebsite";

$conn = mysqli_connect($servername,$dbusername,$dbpaw,$dbname);

if (!$conn) {
	# code...
	die("Connection Failed: " .mysqli_connect_error());

}

<?php  
require "dbcon.ash.php";

$name = $_GET['name'];

$commentSql = "SELECT * FROM comments WHERE uname='$name';";
$commentResult = mysqli_query($conn,$commentSql);
/*
while ($commentRow = mysqli_fetch_assoc($commentResult)) {
	# code...
	echo $commentRow[uname]
}*/



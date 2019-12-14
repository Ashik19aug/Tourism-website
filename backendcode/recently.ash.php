<?php
require "dbcon.ash.php";

$sqlRecent = "SELECT * FROM places ORDER BY id DESC LIMIT 6;";

$RecentResult = mysqli_query($conn,$sqlRecent);
$RecentResultCheck = mysqli_num_rows($RecentResult);

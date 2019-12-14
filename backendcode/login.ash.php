<?php

if (isset($_POST['login-submit'])) {

	require "dbcon.ash.php";

/*Store the value from the input forme*/
	$mailuid = $_POST['umail'];
	$pwduid =$_POST['upwd'];

/*input form empty or not?*/
	if (empty($mailuid) || empty($pwduid)) {
		# code...
		header("Location: ../pages/index.php?error=empty_field");
	exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE usersname=? OR usersemail=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			# code...
			header("Location: ../pages/index.php?error=sql_error");
	exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				# code...
				$pwdcheck = password_verify($pwduid, $row['userpwd']);
				if ($pwdcheck == false) {
					# code...
					header("Location: ../pages/index.php?error=wrong_password" );
					exit();
				}
				elseif ($pwdcheck == true) {
					# code...
					session_start();
					$_SESSION['userid'] = $row['idusers'];
					$_SESSION['username'] = $row['usersname'];
					header("Location: ../pages/index.php?login=success");
					exit();
				}
				/*else{
					header("Location: ../pages/index.php?error=wrong_password" );
					exit();
				}*/
			}
			else{
				header("Location: ../pages/index.php?error=no_user");
	exit();
			}
		}
	}
}


else{
	header("Location: ../pages/index.php?nothing");
	exit();
}
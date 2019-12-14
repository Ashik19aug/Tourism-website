<?php

if (isset($_POST['signup-submit'])) {
	# code...
	require "dbcon.ash.php";


$username = $_POST['uname'];
$email = $_POST['umail'];
$password = $_POST['upwd'];
$repassword = $_POST['urerpwd'];


/*Error Hendler*/
if (empty($username) || empty($email) || empty($password) || empty($repassword) ) {
	# code...
	header("Location: ../pages/index.php?error=emptyfield_please_fill_up_every_form");
	exit();
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
	# code...
	header("Location: ../pages/index.php?error=invalidname&&Email");
	exit();
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	# code...
	header("Location: ../pages/index.php?error=invalidEmail");
	exit();
}

elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
	# code...
	header("Location: ../pages/index.php?error=invalidusername");
	exit();
}

/*check password match or not*/
elseif ( $password !== $repassword ) {
	# code...
	header("Location: ../pages/index.php?error=password_dosen't_match");
	exit();
}

else{

	$sql="SELECT usersname FROM users WHERE usersname=?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		# code...
		header("Location: ../pages/index.php?error=sqlerror");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultcheck = mysqli_stmt_num_rows($stmt);
		if ($resultcheck>0) {
			# code...
			header("Location: ../pages/index.php?error=Name_already_exist");
			exit();
		}
		else{
			$sql = "INSERT INTO users (usersname,	usersemail, userpwd) VALUES (?,?,?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				# code...
				header("Location: ../pages/index.php?error=error");
				exit();
			}
			else{

				/*hash the password*/
				$hashedpwd = password_hash($password, PASSWORD_DEFAULT);

				mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
				mysqli_stmt_execute($stmt);
				header("Location: ../pages/index.php?signup=succesfuly");
				exit();
			}
		}
	}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

}

else{
	header("Location: ../pages/index.php?nothing");
	exit();
}
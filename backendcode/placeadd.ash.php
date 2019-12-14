<?php

if (isset($_POST['place-add'])) {
	# code...
	require "dbcon.ash.php";

	$placename = $_POST['pname'];
	$placedivision = $_POST['divi'];
	$placedescription = $_POST['des'];
	$hotelname1 = $_POST['hn1'];
	$hoteladd1 = $_POST['ha1'];
	$hotelname2 = $_POST['hn2'];
	$hoteladd2 = $_POST['ha2'];
	$resname1 = $_POST['rn1'];
	$resadd1 = $_POST['ra1'];
	$resname2 = $_POST['rn2'];
	$resadd2 = $_POST['ra2'];
	$placeimg1 = $_POST['pic1'];
	$placeimg2 = $_POST['pic2'];
	$placeimg3 = $_POST['pic3'];

/*check field are empty or not*/
	if (empty($placename) || empty($placedivision) || empty($placedescription) || empty($placeimg1) || empty($placeimg2) || empty($placeimg3)) {
		header("Location: ../admin/index.php?field_are_empty");
		exit();
	}
	else{
		$sql =" SELECT name FROM places WHERE name=?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			# code...
			header("Location: ../pages/index.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $name);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);
			if ($resultcheck>0) {
				# code...
				header("Location: ../admin/index.php?error=Name_already_exist");
				exit();
			}
			else{
				$sql = "INSERT INTO places (name, divi, des, hname1, hadd1, hname2, hadd2, rname1, radd1, rname2, radd2, photo1, photo2, photo3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					# code...
					header("Location: ../admin/index.php?error=error");
					exit();
					}
				else{

				mysqli_stmt_bind_param($stmt, "ssssssssssssss",$placename, $placedivision, $placedescription, $hotelname1, $hoteladd1, $hotelname2, $hoteladd2, $resname1, $resadd1, $resname2, $resadd2, $placeimg1, $placeimg2, $placeimg3);
				mysqli_stmt_execute($stmt);
				header("Location: ../admin/index.php?place=Add_succesfuly");
				exit();
			}

			}
		}
	}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}

else{
	header("Location: ../admin/index.php?error=page_error");
	exit();
}
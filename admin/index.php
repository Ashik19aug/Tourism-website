<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>

<?php
	require "../css/link.ash.php";
?>

</head>
<body style="background-color: #E6E6FA">

	<div class="container">

		<h3><b> Welcome ASH</b></h3>

		<div class="row">

<!-- Admin profile -->
			<div class="col-lg-3" >
				<img src="../photos/ash.jpg" class="rounded-circle mx-auto d-block" style="width:50%">
				<h4> ASH </h4>
				<p>Last Updated : </p>
			</div>

<!-- Admin add new place form -->
  			<div class="col-lg-9" style="padding-bottom: 30px;">
  				<h4> Add A New Place </h4>
	  				<?php
						require "../pagescontents/adminform.ash.php";
					?>
  			</div>

		</div>

	</div>
	<br>

</body>
</html>
<?php
	require "header.php";
	require "../backendcode/dbcon.ash.php";
	require "../backendcode/relatedplace.ash.php";
	require "../backendcode/comment.ash.php";
?>
<?php
$name=$_GET['name'];
/*Place information*/
$sqlplace = "SELECT * FROM places WHERE name='$name';";
$resultplace = mysqli_query($conn,$sqlplace);
	
?>
<title>Place</title>
<?php require "../css/link.ash.php";?>
</head>
<body style="background-color: #F8F8FF">
<!-- NavBar -->
<?php require "../pagescontents/nav.ash.php";?>
<!-- Login & SignUp -->
<?php require "../pagescontents/enter.ash.php";?>
<div class="container">
	<div class="row" >
		<?php require "../pagescontents/RelatedPlace.ash.php";?>
		<div class="col-1"></div>
		<?php
			while ($placeinfo = mysqli_fetch_assoc($resultplace)) {
		?>
		<!-- Place Related containt -->
		<div class="col-8" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
			<!-- Place Name -->
			<h4 style="font-family: 'Allan';font-size: 40px;"><?php echo $placeinfo['name'] ;?></h4>
			<!-- Slide show -->
			<?php require "../pagescontents/SlideShow.php";?>
			<h5>About this place</h5>
			<!-- Place Information -->
			<p style="text-align: justify;"><?php echo $placeinfo['des'];?></p><hr>
			<!-- Page Review -->
			<?php require "../pagescontents/HotelRestaurant.php"; ?>
			<?php
				}
			?>
			<!-- Page Review -->
			<h6 style="text-align: left;">Review of this place</h6>
			<?php
			while ($commentRow = mysqli_fetch_assoc($commentResult)) {
			?>
			<hr>
			
			<p style="text-align: left;"><b><?php echo $commentRow['pname']; ?></b></p>
			<p style="text-align: left;"><?php echo $commentRow['massage']; ?></p>
			<hr>
			<?php
			}
			?>
			<!-- Comment Form -->
			<?php
				if (isset($_POST['commentSubmit'])) {
					
					$unam = $_POST['userName'];
					$pnam = $_POST['placeName'];
					$massage = $_POST['massage'];
					$sql = "INSERT INTO comments (pname, uname, massage) VALUES ('$unam', '$pnam', '$massage');";
					$result = mysqli_query($conn,$sql);
				}
			?>
			<form method="post" action=" ">
				<div class="form-group">
					<?php
						if (isset($_SESSION['username'])){
							echo '<label for="exampleFormControlTextarea1">Add Comment</label>';
						}
						else{
							echo "You have to Login first to add comment";
						}
					?>
					
					<input type="hidden" name="userName" value= <?php
					if (isset($_SESSION['username'])){
					echo $_SESSION['username'];
					}
					else{
						echo "aaa";
					}
					?> >
					<input type="hidden" name="placeName" value=<?php echo $name ?>>
					<?php
					if (isset($_SESSION['username'])){
						echo '<textarea class="form-control" name="massage" id="exampleFormControlTextarea1" rows="3"></textarea>';
					}
					else{
						}
					?>
					
					
				</div>
				<?php
				if (isset($_SESSION['username'])){
					echo '<button type="submit" name="commentSubmit" class="btn btn-primary mb-2" style="float: right;">Comment</button>';
				}
				else{
				}
				?>
				
			</form>
			<br>
			
		</div>
	</div>
	<br>
</div>
<?php require "../pagescontents/footer.php"; ?>
</body>
</html>
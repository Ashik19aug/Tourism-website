<?php
	require "header.php";
	require "../backendcode/recently.ash.php";
	
?>


<title>Home</title>

<?php require "../css/link.ash.php";?>


<script>
	$(document).ready(function(){
	    $("#panel").slideDown("slow");
	});
</script>

<style>
	#panel {
	  display: none;
	}
</style>

</head>

<body style="background-color: #F8F8FF">

<!-- NavBar -->
<?php require "../pagescontents/nav.ash.php";?>
<!-- Login & SignUp -->
<?php require "../pagescontents/enter.ash.php"; ?>

	<!-- fixed width container -->
<div class="container" >


	  <div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white;">

	    <div class="col-sm-5"><?php require "../pagescontents/abouttext.php";?></div>

	    <div class="col-sm-7" >
			<!-- Slide show -->
			  <div class="octagon" id="octagon">
			    <img src="../photos/1.jpg" alt="">
			    <img src="../photos/2.jpg" alt="">
			    <img src="../photos/3.jpg" alt="">
			  </div>
	    </div>

	  </div>

<!-- <?php ?> -->



<div class="recently">
	<h4>Recently Added Places</h4>
	<div class="row">
		<?php 
		if ($RecentResultCheck>0) {
		while ($RecentPlace = mysqli_fetch_assoc($RecentResult)) {
		?>
		<div class="col-2" >
			
			<img src="../photos/<?php echo $RecentPlace['photo1']; ?>" alt="..."  width="150" height="150" >
				<a href="#"><h6 style="text-align: center;"><?php echo $RecentPlace['name']; ?></h6>
			</a>
		</div>
		<?php
		}
		}
		?>
	</div>
</div>

<div class="tban">
	<?php require "../pagescontents/TourisminBangladesh.php";?>
</div>

</div>

<?php require "../pagescontents/footer.php"; ?>

</body>
</html>
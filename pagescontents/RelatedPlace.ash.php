<!-- Related Place containt -->
<div class="col-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
	<h4>Related Place</h4>
	<hr>
	<?php 
	while ($rowdivision = mysqli_fetch_assoc($diviResult)) {
	?>
		<div>
			<img src="../photos/<?php echo $rowdivision['photo1'];?>" alt="..." class="img-thumbnail">
			<a href="place.php?name=<?php echo $rowdivision['name'];?>"><h6 style="text-align: center;"><?php echo $rowdivision['name'];?></h6></a>
		</div>
	<?php 
	}
	?>
</div>
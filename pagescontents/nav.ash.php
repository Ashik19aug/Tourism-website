<?php
require "../backendcode/navplace.php";
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Tour In Bangladesh</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <!-- Dropdown Nav Start -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="place.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Place</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!---------------Divi----->
          <?php
          require "../backendcode/dbcon.ash.php";
          $sqlD = "select distinct divi from places;";
          $resultD = mysqli_query($conn,$sqlD);
          while($row= mysqli_fetch_assoc($resultD))
          {
          ?>
          <li class="nav-item dropdown">
            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><?php echo $row['divi']?></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <?php
              $divi=$row['divi'];
              $sqlD2 = "select distinct name from places where divi='$divi';";
              $resultD2 = mysqli_query($conn,$sqlD2);
              while($row1= mysqli_fetch_assoc($resultD2))
              {
              ?>
              <!------ name ------->
              
              <li><a class="dropdown-item" href="place.php?name=<?php echo $row1['name'];?>"><?php echo $row1['name']?></a></li>
              
              <!------ name ------->
              <?php }?>
            </ul>
          </li>
          <?php }?>
          <!-----divi----->
        </ul>
        
      </li>
      <!-- dropdown nav end -->
      <li class="nav-item ">
        <a class="nav-link" href="Contac.php">Contact </a>
      </li>
    </ul>
    <?php
      if (isset($_SESSION['username'])) {
        echo '
        <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">';?>
      <?php echo $_SESSION['username'] ?>
      <?php  echo '</button>
      <div class="dropdown-menu">
          <form action="../backendcode/logout.ash.php" action="post">
              <button type="submit" name="logout-submit" class="btn btn-primary">LogOut</button>
          </form>
        </div>
    </div>';
    }
    else{
    echo '
    <button class="btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#signup">SignUp</button>
    <button class="btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#login">Login</button>
    ';
    }
    ?>
    
  </nav>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="../js/bootnavbar.js" ></script>
  <script>
  $(function () {
  $('#main_navbar').bootnavbar();
  })
  </script>
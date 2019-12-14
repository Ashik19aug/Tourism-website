


<!-- Modal SignUp-->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">SignUp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		<form action="../backendcode/signup.ash.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="umail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="upwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Re-Enter Password</label>
		    <input type="password" name="urerpwd" class="form-control" id="exampleInputPassword1" placeholder="Re-Enter Password">
		  </div>
      <button type="submit" name="signup-submit" class="btn btn-primary">SignUp</button>
		</form>

      </div>
      
    </div>
  </div>
</div>


<!-- Modal Login-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		<form action="../backendcode/login.ash.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="umail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="upwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
      <button type="submit" name="login-submit" class="btn btn-primary">Submit</button>
		</form>

      </div>
    </div>
  </div>
</div>
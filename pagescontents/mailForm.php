<div class="mailform" >
	<h5>Send Your E-MAIL</h5>
		<form action="../backendcode/contac.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Your name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Place Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" placeholder="Enter Place Name">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Place Description</label>
			<textarea class="form-control" name="massage" id="exampleFormControlTextarea1" rows="6"></textarea>
		  </div>
		  <button type="submit" name="mailsend" class="btn btn-primary">Send Mail</button>
		</form>
</div>

<div >
	  						<form action="../backendcode/placeadd.ash.php" method="post" >

							  <div class="form-group">
							    <label for="formGroupExampleInput">Place Name</label>
							    <input type="text" name="pname" class="form-control" id="formGroupExampleInput" placeholder="Enter Place Name">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Select Place Divisions</label>
							    <select class="form-control" name="divi" id="exampleFormControlSelect1">
							      <option>Sylhet</option>
							      <option>Rangpur</option>
							      <option>Rajshahi</option>
							      <option>Mymensingh</option>
							      <option>Khulna</option>
							      <option>Dhaka</option>
							      <option>Chittagong</option>
							      <option>Barisal</option>
							    </select>
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Place Description</label>
							    <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>

							  <p>Nearest Hotel</p>
							    <div class="form-row">
								    <div class="col">
								      <input type="text" class="form-control" name="hn1" placeholder="Nearest Hotel Name 1">
								    </div>
								    <div class="col">
								      <input type="text" class="form-control" name="ha1" placeholder="Nearest Hotel Address 1">
								    </div>
								</div>
								<br>
								<div class="form-row">
								    <div class="col">
								      <input type="text" class="form-control" name="hn2" placeholder="Nearest Hotel Name 2">
								    </div>
								    <div class="col">
								      <input type="text" class="form-control" name="ha2" placeholder="Nearest Hotel Address 2">
								    </div>
								</div>

								<br>
								<p>Nearest Restaurant</p>
							    <div class="form-row">
								    <div class="col">
								      <input type="text" class="form-control" name="rn1" placeholder="Nearest Restaurant Name 1">
								    </div>
								    <div class="col">
								      <input type="text" class="form-control" name="ra1" placeholder="Nearest Restaurant Address 1">
								    </div>
								</div>
								<br>
								<div class="form-row">
								    <div class="col">
								      <input type="text" class="form-control" name="rn2" placeholder="Nearest Restaurant Name 2">
								    </div>
								    <div class="col">
								      <input type="text" class="form-control" name="ra2" placeholder="Nearest Restaurant Address 2">
								    </div>
								</div>

								<br>
								<p>Place Photos</p>
								
							    <div class="form-row">
							    	<div class="col">
							    		<input type="file" class="custom-file-input" name="pic1" id="customFile">
  										<label class="custom-file-label"  for="customFile">Photo 1</label>
							    	</div>
							    	<div class="col">
							    		<input type="file" class="custom-file-input" name="pic2" id="customFile">
  										<label class="custom-file-label" for="customFile">Photo 2</label>
							    	</div>
							    	<div class="col">
							    		<input type="file" class="custom-file-input" name="pic3" id="customFile">
  										<label class="custom-file-label" for="customFile">Photo 3</label>
							    	</div>
							    </div>

								  <br>
									<button type="submit" name="place-add" class="btn btn-primary btn-lg btn-block">Submit</button>

							</form>
	  				</div>
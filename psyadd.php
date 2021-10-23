<?php
include_once('head.php');
?>
	

	<div id="colorlib-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>Add Psychologyst</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="func.php" class="appointment-wrap animate-box" method="POST" enctype="multipart/form-data">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="image">Browse Image</label>
								<input type="file" name="image" id="email" class="form-control" placeholder="Enter The Image">
								
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Contact Number</label>
								<input type="text" name="contact" id="subject" class="form-control" placeholder="Your Contact Number">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Qualification</label>
								
<input type="text" name="qualification" id="subject" class="form-control" placeholder="Qualification">

							</div>
						</div>
						<div class="row form-group">
						<div class="col-md-12">
<label for="subject">Salary</label>
								
<input type="text" name="salary" id="subject" class="form-control" placeholder="Salary">
</div>
</div>
<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Address</label>
								<textarea name="address" id="message" cols="30" name="msg" rows="10" class="form-control" placeholder="Enter the Address"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="add_psy" value="Add Docter" class="btn btn-primary">
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
<?php
include_once('footer.php');
?>
	
	
<?php
include_once('head.php') ;
?>
	
	<aside id="colorlib-hero" class="hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Make an <strong>Appointment</strong></h1>
									
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>


	<div id="colorlib-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>Book an Appointment</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="func.php" class="appointment-wrap animate-box" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="session">Select Session</label>
								<select class="selectpicker form-control" name="session" id="subject">
								   <option>Morning</option>
								   <option>Afternoon</option></select>
							</div>
							<div class="col-md-12">
								<label for="lname">Full Name</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Address</label>
								<textarea name="address" id="message" cols="30" name="msg" rows="10" class="form-control" placeholder="Your Address"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Age</label>
								<input type="text" name="age" id="subject" class="form-control" placeholder="Enter Your Age">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Gender</label>
		
								<select class="selectpicker form-control" name="gender" id="subject">
								   <option>Male</option>
								   <option>Female</option></select>
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Phone Number</label>
								<input type="text" name="contact" id="subject" class="form-control" placeholder="Enter Your Age">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Email</label>
								<input type="text" name="email" id="subject" class="form-control" placeholder="Enter Your email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Date</label>
								<input type="date" name="date" id="subject" class="form-control" placeholder="Enter Your Age">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12" style="height: 44px;">
								<label for="subject">Choose Your Subject</label>
								<select class="selectpicker form-control" name="subject" id="subject">
								   <option>Choose Your Subject</option>
								   <option>Behavior Modification</option>
								   <option>Behavior Therapy</option>
								   <option>Behavior Activation</option>
								   <option>Cancer Counseling</option>
								   <option>Cognitive Behavior Therapy</option>
								   <option>Counseling Services</option>
								   <option>Couples Therapy</option>
								   <option>Crisis Intervention</option>
								   <option>Exercise Counseling</option>
								   <option>Exposure Therapy</option>
								   <option>Marital Counseling</option>
								   <option>Marital Therapy</option>
								</select>

							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30"  rows="10" class="form-control" placeholder="Your Message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<button mailto=><input type="submit" name="appoint" value="Make Appointment" class="btn btn-primary"></button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
<?php
include_once('footer.php');
?>
	
	
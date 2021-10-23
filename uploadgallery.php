<?php
include_once('admin_header.php') ;
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
			   					<h1>Upload <strong>Images</strong></h1>
									
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
					<h2>Upload Images</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="gallery_controller.php" class="appointment-wrap animate-box" method="POST" enctype="multipart/form-data">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="image">Select Image</label>
							<input type="file" name="file" id="name" class="form-control" placeholder="Enter image">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Image Descripton</label>
								<textarea type="text" id="message" cols="50" name="desc" rows="20" class="form-control" placeholder="Description For Image"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Image Order</label>
								<input type="text" id="email"  name="order" rows="10" class="form-control" placeholder="Order of Image">
							</div>
						</div>
							<div class="form-group">
							<input  type="submit" name="upload" value="Upload Image" class="btn btn-primary">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
include_once('footer.php');
?>
	
	
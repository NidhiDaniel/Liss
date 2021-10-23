<?php
include_once('admin_header.php');
include_once('gallery_controller.php');
if(isset($_POST['update']))
{
	$id=$_GET['id'];
$description=$_POST['desc'];
$order=$_POST['order'];
$files=$_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));
$fileextstored= array('png','jpg','jpeg');
if (in_array($filecheck, $fileextstored)) 
{
$destinationfile='gallery/'.$filename;
move_uploaded_file($filetmp,$destinationfile);
$q="update gallery set image='$destinationfile',description='$description',imgorder='$order' where gid='$id'" ;
if(!mysqli_query($con,$q)){
echo "<scrpt>alert('updation failed')</scrpt>";

}else
{
header("refresh:1;url=adminpanal.php");
}
}
}
?>
	

	<div id="colorlib-contact">
		<div class="container">
		
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
					<h2>Update Images</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="#" class="appointment-wrap animate-box" method="POST" enctype="multipart/form-data">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="image">Select Image</label>
							<input type="file" name="file" id="name" class="form-control" placeholder="Enter image">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Image Descripton</label>
								<textarea type="text" id="message" cols="30" name="desc" rows="10" class="form-control" placeholder="Description For Image"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Image Order</label>
								<input type="text" id="email"  name="order" rows="10" class="form-control" placeholder="Order of Image" >
							</div>
						</div>
							<div class="form-group">
							<input  type="submit" name="update" value="Upload Image" class="btn btn-primary">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>

<?php
include_once('footer.php');
?>	
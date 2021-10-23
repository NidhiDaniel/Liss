<?php
include_once('head.php');
?>
<?php
include_once('func.php');
$con=mysqli_connect("localhost","root","","hospital");
	$dis="select * from appoinment";
	$res=mysqli_query($con,$dis);
if(isset($_GET['delete']))
 {
 	$id=$_GET['delete'];
 	$del="delete from docteradd where pid='$id'";
 	if(mysqli_query($con,$del))
 		{
 			echo "<script>alert('Data deleted Successfully')</script>";
 }
 else
 {
 	echo 'error';
 }
}	
?>
<table border="1" class="table table-striped table-hover table-bordered">
	<tr class="text-center">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Subject</th>
		<th>Message</th/>
		<th>Action</th>
	</tr>

<?php
while($row=mysqli_fetch_array($res))
	{?>
<tr>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['lname'] ;?></td>
	<td><?php echo $row['email'] ;?></td>
	<td><?php echo $row['contact'] ;?></td>
	<td><?php echo $row['subject'] ;?></td>
	<td><?php echo $row['message']; ?></td>
	<td><button class="btn-danger btn"><a href="patupdate.php?id=<?php echo $row['pid'];?>">Update</a></button>
	<button class="btn-primary btn"><a href="pdelete.php?id=<?php echo $row['pid'];?>">Delete</a></button></td>
</tr>
<?php }?>
</table>
<?php
include_once('footer.php');
?>
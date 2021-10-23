<?php
include_once('head.php');
?>
<?php
include_once('func.php');
$con=mysqli_connect("localhost","root","","liss");
	$dis="select * from psyadd";
	$res=mysqli_query($con,$dis);
if(isset($_GET['delete']))
 {
 	$id=$_GET['delete'];
 	$del="delete from `psyadd` where ps_id='$id'";
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
		<th>Image</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Qualification</th>
		<th>Salary</th>
		<th>Address</th/>
		<th>Action</th>
	</tr>

<?php
while($row=mysqli_fetch_array($res))
	{?>
<tr>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['lname'] ;?></td>
	<td><img src="<?php echo $row['image'] ;?>" height="100px" width="100px"></td>
	<td><?php echo $row['email'] ;?></td>
	<td><?php echo $row['contact'] ;?></td>
	<td><?php echo $row['qualification'] ;?></td>
	<td><?php echo $row['salary']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><button class="btn-danger btn"><a href="psyupdate.php?id=<?php echo $row['ps_id'];?>">Update</a></button>
	<button class="btn-primary btn"><a href="delete.php?id=<?php echo $row['ps_id'];?>">Delete</a></button></td>
</tr>
<?php }?>
</table>
<?php
include_once('footer.php');
?>
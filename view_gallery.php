<?php
include_once('admin_header.php');
include_once('gallery_controller.php');
$dis="select * from gallery order by imgorder asc";
$res=mysqli_query($con,$dis);
?>

<table border="1" class="table table-striped table-hover table-bordered">
	<tr class="text-center">
		<th>id</th>
		<th>Image</th>
		<th>Description</th>
		
	</tr>

<?php
while($row=mysqli_fetch_array($res))
	{?>
<tr>
	<td><?php echo $row['gid']; ?></td>
	<td><img src="<?php echo $row['image'] ;?>" height="100px" width="100px"></td>
	<td><?php echo $row['description'] ;?></td>
	<td><?php echo $row['imgorder'] ;?></td>
	<td><button class="btn-danger btn"><a href="update_gallery.php?id=<?php echo $row['gid'];?>">Update</a></button>
	<button class="btn-primary btn"><a href="gallery_delete.php?id=<?php echo $row['gid'];?>">Delete</a></button></td>
</tr>
<?php }?>
</table>
<?php
include_once('footer.php');
?>
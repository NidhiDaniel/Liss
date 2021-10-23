<?php
include_once('gallery_controller.php');
$id=$_GET['id'];
$q="delete from gallery where gid=$id";
mysqli_query($con,$q);
header('location:view_gallery.php');
?>
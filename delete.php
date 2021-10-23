<?php
include_once('func.php');
$id=$_GET['id'];
$q="delete from psyadd where ps_id=$id";
mysqli_query($con,$q);
header('location:viewpsy.php');
?>

<?php
 $con=mysqli_connect("localhost","root","","liss");
if (isset($_POST['upload'])) 
{
 $description=$_POST['desc'] ; 
 $order=$_POST['order']; 
$files=$_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));
$fileextstored= array('png','jpg','jpeg');
if (in_array($filecheck, $fileextstored)) {
     $destinationfile='gallery/'.$filename;
          //$nama=md5(uniqid()).'.'.$fileType;
          move_uploaded_file($filetmp,$destinationfile);
          $sql1="INSERT INTO `gallery`(  `image`, `description`,`imgorder`) VALUES ('$destinationfile','$description','$order')";

if(!mysqli_query($con,$sql1)){
echo "insertion failed";

}else
{
	echo '<script> window.open("adminpanal.php","_self")</script>';
}
}
}
?>
   <?php
 $con=mysqli_connect("localhost","root","","liss");
 if (isset($_POST['login'])) 
 {   $user=$_POST['user'];
     $pass=$_POST['pass'];
 	 $query="select  username='$user' , password='$pass' from `login` where type='admin'";
 	 $result=mysqli_query($con,$query);
 	 if ($result) 
 	 {
 	 	header("location:adminpanal.php");
     }
 	 else
 	 {
echo "<script>alert('Enter valid username and password')</script>";
echo "<script>window.open('index.php','_self')</script>";
 	    
 	 }
 	}
 if(isset($_POST['appoint']))
{
$session=$_POST['session'];	
$name=$_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$date=$_POST['date'];
$subject=$_POST['subject'];
$msg=$_POST['message'];
$ql="INSERT INTO appointment(`session`,`name`,`address`,`age`,`gender`,`contact`,`email`,`date`,`subject`,`message`) VALUES('$session','$name','$address','$age','$gender','$contact','$email','$date','$subject','$msg')";
if(!mysqli_query($con,$ql)){
	echo "insertion failed";

}else
{
$mailMsg=substr(str_shuffle(str_repeat("0123456789", 4)), 0,4);
$header="From:prdcindia@gmail.com";
$mail=mail($email,"Appointment Fixed", $mailMsg,$header);
if($mail)
{
echo "<script>alert('Your Appointment Is Fixed and a Appointment Number is send into your mail')</script>";
header("refresh:1;url=index.php");
} 
else
{
echo "<script>alert('Mail not sent')</script>";


}
}
}
if (isset($_POST['add_psy']))
{	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$qualification=$_POST['qualification'];
$salary=$_POST['salary'];
$address=$_POST['address'];
$files=$_FILES['image'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));
$fileextstored= array('png','jpg','jpeg');
if (in_array($filecheck, $fileextstored)) {
	$destinationfile='uploads/'.$filename;
		//$nama=md5(uniqid()).'.'.$fileType;
		move_uploaded_file($filetmp,$destinationfile);
		$sql1="INSERT INTO `psyadd`( `fname`, `lname`, `image`, `email`, `contact`, `qualification`, `salary`, `address`) VALUES ('$fname','$lname','$destinationfile','$email','$contact','$qualification','$salary','$address')";
		if(!mysqli_query($con,$sql1)){
echo "insertion failed";

}else
{
header("refresh:1;url=adminpanal.php");
}
 }
	}

 ?>
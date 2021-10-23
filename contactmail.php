<?php
if (isset($_POST['send'])) {
	$name=$_POST['fname'];
	$subject=$_POST['subject'];
	$mailFrom=$_POST['mail'];
	$message=$_POST['message'];
	$mailTo="nidhidaniel1993@gmail.com";
	$headers="From:".$mailFrom;
	$txt="You have recieved a mail from".$name."\n\n".$message;
	$mail=mail($mailTo, $subject, $txt,$headers);
	if($mail){
		
		
		echo "<script>alert('Your Message Send Successfully')</script>";
		echo "<script>window.open('contact.php','_self')</script>";
	}
	else{
		echo "<script>alert('Sorry Your Message is not send.Please try again')</script>";
	}

}

?>
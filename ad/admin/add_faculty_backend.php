<?php
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	include('web.php');
	$sql="INSERT INTO `u_detail` (`username`, `email`, `password`, `name`) VALUES('$uid','$email','$pass','$name');"	;
	if(!mysqli_query($conn,$sql))
	{
		echo "Try again";
		echo $sql;
		//sleep(20);
		//header("Location:add_faculty.php");
	}
	else{
		echo "Faculty Added";
		$to = $email;
		$subject = "Your Feedback system ID";
		$txt = "Name:-".$name."\nUser ID :- ".$uid."\nPassword :- ".$pass;

if(!mail($to,$subject,$txt,'From: javalpatel19@gnu.ac.in')){
	echo "Wrong email or Some connection problem is occured";
	
}
else{
	
	echo "sending";
	header("Location:index.php");
}
		
	}
	
}
else{
	echo "Try again";
	header("Location:add_faculty.php");
}
?>

<?php

include("web.php");
$email = $_GET['email'];
$email = rtrim($email,";");
$del = mysqli_query($conn,"delete from `u_detail` where `email` = '$email'");
if($del)
{
    mysqli_close($conn);
	//echo "delete from `u_detail` where `email` = '$email'",'<br>';
    header("location:add_faculty.php");
    exit;	
}
else
{
	//echo "delete from `u_detail` where `email` = '$email'",'<br>';
    echo "Error deleting record";
}
?>
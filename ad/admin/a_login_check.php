<?php
  include 'web.php';

  $uid = $_POST['uid'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM admin WHERE A_UID='$uid' AND A_pass='$pass'";
  $result = mysqli_query($conn, $sql);
	echo $sql;
  if (!$row = mysqli_fetch_assoc($result)) {
	  	  $MAC = exec('getmac');
  
// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');
$IP = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
    echo "<center><h3>Your username or password is incorrect please try agin!</h3><center>";
		$sql2="INSERT INTO `a_login`(`Login\Logout`,`Login\Logout Time`,`MAC`,`IP`) value('Attempt',TIMESTAMP(CURDATE(), CURTIME()),'$MAC','$IP')";
	if(!mysqli_query($conn, $sql2))
		{
		echo "<h1><center>Facing some issue<br>Please Check your connection1</center></h1>";
		}
		else{
	header("Location: admin_login.php");
		}
	
	
  }
  else {
	  $MAC = exec('getmac');
  
// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');
$IP = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
	$sql2="INSERT INTO `a_login`(`Login\Logout`,`Login\Logout Time`,`MAC`,`IP`) value('Login',TIMESTAMP(CURDATE(), CURTIME()),'$MAC','$IP')";
	echo $sql2;
	if(!mysqli_query($conn, $sql2))
		{
		echo "<h1><center>Facing some issue<br>Please Check your connection2</center></h1>";
		}
		else
		{
			setcookie('a_user',$uid,time() +60*60*24*30,'/');
			header("Location: index.php");
		}
    
  }

?>
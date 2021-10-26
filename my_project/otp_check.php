<?php
session_start();
define("DB_SERVER", "localhost:3306");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test1");

$conn =	new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);



if(isset($_POST["submit_otp"])) {

	$name = $_SESSION['user_name'];
	$sql3 = "SELECT * FROM otp_expiry WHERE uname='".$name."' AND otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";
	//echo $sql3;
	$result = mysqli_query($conn,$sql3);
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		header('Refresh:0; URL=https://localhost/my_project/student_dashboard/dashboad-student1.php');
	} else {
		?>
		<html>
		<head>
		 <link rel="stylesheet" href="login.css"> 	
		</head>
		<body>
		<div class="login.css">
		<center><h1 style="color:red">Invalid OTP! </h1>
		<h1 style="color:red">please check again!! </h1> 
		<h1 style="color: red">Wait while we redirect you!!</h1>
		</center>
		</div>
		</body>
		</html>

		<?php
		header('Refresh:5; URL=https://localhost/my_project/otp_check.html');

	}	
}





?>







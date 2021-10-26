<?php 
define("DB_SERVER", "localhost:3306");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test1");

$cnn =	new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) 
{
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
	$name1 = $_POST ['NAME'];
	$email = $_POST ['Email'];
	$sem = $_POST ['semester'];
	$enroll = $_POST ['enrollment'];
	$attendance = $_POST['att'];
	$user_name= $_POST ['User_Name'];
	$password1 = $_POST['New_Password'];
	$password = $_POST ['Confirm_Password'];
	if($password==$password1)
	{



	$sql = "INSERT INTO student (name, email_id,sem,enroll,username,pass,atendance)
	VALUES ('$name1','$email',$sem,$enroll,'$user_name','$password',$attendance)";
		if ($cnn->query($sql) === TRUE) 
            {
               //echo "New record created successfully";
  			//sleep(10);
            ?>
  			<h1><marquee direction="left" bgcolor="#2C5364" width="" align = "center" scrollamount="30">REDIRECTING TO LOGIN PAGE!!!!!</marquee></h1>
  			<?php 
  			header('Refresh: 10; URL=https://localhost/my_project/login.html');
  			?>
          
           <?php
           //echo"<meta http-equiv="refresh" content="5;url=login.html">"
            } 
            else {
               echo "Error: " . "" . mysqli_error($cnn);
            }

	}
	else
	{

		die("<h1>passwords do not match please check!!!</h1>");
	}






//	if($name and $email and $sem and $enroll and $user_name and $password)
//	{
//echo "name:--$name";
//echo "user_name:--$user_name";
//echo "password:--$password";
//	}
















	//$con = mysql_connect("localhost","root","") or die();
	//$mysql = new mysqli("localhost","root","","student_info");
	//mysql_select_db("student_info") or die(mysql_error());
	//$pdo = new PDO('mysql:host=localhost;dbname=student_info ', 'root', '');
	//echo "connected to database";



 ?>
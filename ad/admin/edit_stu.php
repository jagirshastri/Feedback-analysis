
<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>

table, th, td {
	border-width:5px; 
  border: 1px;
  padding:5px;
    border-collapse: collapse;
	align:center;
}

</style>
<body>
<?php
	  if (isset($_COOKIE['a_user'])) {
	  }
	  else{
		  header('Location:admin_login.php');
	  }
	  ?>
<?php
include('admin_dashboard.html');?>
<?php?>


	<center>
	<div style="margin-top:2%;">

	

<?php
if(isset($_GET['enroll'])){
	$enroll=$_GET['enroll'];
	$uname=rtrim($enroll,';');
	include('web.php');
	$sql = "SELECT * FROM `student` where `enroll`='$enroll'";
	$result = mysqli_query($conn,$sql);
	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		$rows[]=$row;
	}
	?>
	<?php
	foreach($rows as $row)
	{
		
		$name =$row['name'];
		$un=$row['username'];
		$email=$row['email_id'];
		$sem=$row['sem'];
		$pass=$row['pass'];
	}
	?>
	<form action="" method="post">
	<table>
	<tr><td>Name</td><td><input type='text' name='name' value='<?php echo $name;?>' required></td></tr>
	<tr><td>User Name</td><td><input type='text' name='uname' value='<?php echo $un;?>' required></td></tr>
	<tr><td>Sem</td><td><input type='text' name='sem' value='<?php echo $sem;?>' required></td></tr>
	<tr><td>Email ID</td><td><input type='text' name='email' value='<?php echo $email;?>' required></td></tr>
	<tr><td>Password</td><td><input type='password' name='pass' id='pass' value='<?php echo $pass;?>' required></td><tr>
	<tr><td></td><td><input type="checkbox" onclick="myFunction()">Show Password</td></tr>
	</table><br><br>
	<input type="submit" class="button button1" style="margin-left:0%" name="submit" value="Update">
	<br><br>
	</form>

	<?php
if(isset($_POST['pass'])){
		$name =$_POST['name'];
		$un =$_POST['uname'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sem=$_POST['sem'];
		$sql2="UPDATE `student`
		SET `email_id`='$email', `pass`='$pass', `name`='$name', `username`='$un', `sem`=$sem
		where `enroll`='$enroll';";
		//echo $sql2;
		if ($conn->query($sql2) === TRUE) {
  echo "Record updated successfully";
  header("Location:student.php");
} else {
  echo "Error updating record: " . $conn->error;
}
	
	
}
}
else{
	
}

?>

</center>
	<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
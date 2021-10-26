
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
if(isset($_GET['username'])){
	$uname=$_GET['username'];
	$uname=rtrim($uname,';');
	include('web.php');
	$sql = "SELECT * FROM `u_detail` where `username`='$uname'";
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
		$email=$row['email'];
		$pass=$row['password'];
	}
	?>
	<form action="" method="post">
	<table><tr><td>
	Name</td><td><input type='text' name='name' value='<?php echo $name;?>' required></td></tr>
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
		$email=$_POST['email'];
		$pass=$_POST['pass'];	
		$sql2="UPDATE `u_detail`
		SET `email`='$email', `password`='$pass', `name`='$name'
		where `username`='$uname'";
		//echo $sql2;
		if ($conn->query($sql2) === TRUE) {
  echo "Record updated successfully";
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
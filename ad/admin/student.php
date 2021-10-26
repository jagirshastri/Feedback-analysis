<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
.button {
  border: none;
  color: #ffa31a;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}

.button1 {background-color: #001133;} 
</style>
<body>
<?php include('admin_dashboard.html');?>
<?php
	  if (isset($_COOKIE['a_user'])) {
		  //echo $_COOKIE['a_user'];
	  }
	  else{
		  header('Location:admin_login.php');
	  }
	  ?>
	<center>
	<br><br><br>
	<div>
	<table 	style="border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;">
	<?php
	include('web.php');
	$sql='SELECT `name`,`email_id`,`username`,`sem`,`enroll` from `student`;';
	$result=mysqli_query($conn,$sql);
	echo "<tr style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Enrollment No.</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Name</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Sem</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>E-mail</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>User Name</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Edit</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Delete</th></tr>";
	//echo "<br>".$sql."<br>";
	
	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		echo "<tr style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['enroll']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['name']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['sem']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['email_id']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['username']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'><a href='edit_stu.php?enroll=".$row['enroll'].";'>Edit</a></td>
    <td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'><a href='delete_stu.php?enroll=".$row['enroll'].";'>Delete</a></td>
		</tr>";
	}
	echo "</table>";
	?>
	</div>
	</center>


</body>
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
</html>

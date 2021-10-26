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
	  }
	  else{
		  header('Location:admin_login.php');
	  }
	  ?>
	<center>
	<div>
	<form method="post" style="margin-top:3%;" action="add_faculty_backend.php"> 
		<table>
		<tr><td><h2>Uniqe ID&ensp;&ensp;</h2></td><td><input type="text" name="uid" placeholder="Enter Faculty UID..." style="padding:10px" required></td></tr>
		<tr><td><h2>Name&ensp;&ensp;</h2></td><td><input type="text" name="name" placeholder="Enter Faculty Name..." style="padding:10px" required></td></tr>
		<tr><td><h2>E-mail&ensp;&ensp;</h2></td><td><input type="email" name="email" placeholder="Enter Faculty E-mail..." style="padding:10px" required></td></tr>
		<tr><td><h2>Password&ensp;&ensp;</h2></td><td><input type="password" name="pass" id="pass" placeholder="Enter Faculty Password..." style="padding:10px" required></td></tr>
		<tr><td></td><td><input type="checkbox" onclick="myFunction()">Show Password</td></tr>
		</table>
		<br>
		<input type="submit" class="button button1" style="margin-left:0%" name="submit" value="Add Faculty">
		
    </form>	
	</div>
	<br><br><br>
	<div>
	<table 	style="border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;">
	<?php
	include('web.php');
	$sql='SELECT `name`,`email`,`username` from `u_detail`;';
	$result=mysqli_query($conn,$sql);
	echo "<tr style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Name</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>E-mail</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>User Name</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Edit</th>
	<th style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>Delete</th></tr>";
	//echo "<br>".$sql."<br>";
	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		echo "<tr style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['name']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['email']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'>".$row['username']."</td>
		<td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'><a href='edit_faculty.php?username=".$row['username'].";'>Edit</a></td>
    <td style='border-width:5px; border: 1px solid black; padding:5px; border-collapse: collapse;'><a href='delete.php?email=".$row['email'].";'>Delete</a></td>
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

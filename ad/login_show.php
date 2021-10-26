<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
</style>
<body>
	<center>
	<form method="post" style="margin-top:15%;" action="check1.php"> 
		<table>
		<tr><td><h2>Uniqe ID&ensp;&ensp;</h2></td><td><input type="text" name="uid" placeholder="Enter your UID..." style="padding:10px"></td></tr>
		</table>
		<input type="submit" class="button button1" style="margin-left:0%" name="submit" value="Login"> 
    </form>
	</center>


</body>
</html>

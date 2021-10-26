<?php
session_start();
include ('C:\xampp\htdocs\ad\web.php');
$a_t_name = $_SESSION['a_t_name'];
$a_t_n = $a_t_name."_a";
$qtn = $a_t_n;

if (isset($_POST['submit']))
	{
		$f="$";
		$que="";
		//$new_var="";
		$var_n="";
		
		$email= $_SESSION['semail'];
		$en_no= $_SESSION['sen'];
		$name= $_SESSION['sname'];
		$impr= $_POST['improvement'];

		$rowcount = 0;
		$rowcount = $_POST['numbers'];
			
		//for creating variables
		//echo $rowcount;
		for($z=1; $z<=$rowcount;$z++)
		{

			$new_data["q".$z] = $_POST['q'.$z];
		}
		$r="";
		//extract($new_data);
		$r = rtrim($r,",");
		$type = "iss";
		$int_type = "i";
		$res="";
		for($z=1; $z<=$rowcount;$z++)
		{
			${'q'.$z}= $new_data["q".$z];
			$res .= ${'q'.$z}.",";
		}
		$res = rtrim($res, ",");
		//adding question colunm name
		for($y=1;$y<=$rowcount;$y++)
		{
			$que .= 'Q'.$y.',';
		}
        $new_que = rtrim($que,',');
		$rate_f="";
		//echo $new_que."<br>";
		//echo $res."<br>";
		
		$query = "INSERT INTO `$a_t_n`(en_no,name,email,improvement,$new_que) VALUES($en_no,'$name','$email','$impr',$res)";
		//echo $query."<br>";
		if(!mysqli_query($conn, $query))
		{
		echo "<center><h1>Response not added <br>You missed some values to fill up<br>OR<br>You are filling this form second time  </center></h1>";
		}
		else
		{
		echo "<center><h1>record added successfully</h1></center>";
		//setcookie("numbers",$a,time()+20);

		}
		
		
		/*$stm=$conn->prepare("INSERT INTO `9akw6ofyzo_a`(en_no,name,email,$new_que) VALUES(?,?,?,$d1)");
		$stm->bind_param($type,$en_no,$name,$email,'". implode("','" , $new_data) ."');
		
		$stm->execute();

*/
	?>
	<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
	<center>
	<a href="https://localhost/my_project/student_dashboard/dashboad-student1.php" ><button class="button"><span>Home<span></button></a>
	</center>
</body>
</html>
	<?php
	}

?>
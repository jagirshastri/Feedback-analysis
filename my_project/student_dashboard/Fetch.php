<?php 

    session_start();
    $nm = $_SESSION['sen'];
    define("DB_SERVER", "localhost:3306");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "test1");

$conn =  new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
?>
    <html> 
    <head> 
        <title> Fetched Data From Database </title> 
		    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/Style.css">
<style>
	table, th, td {
	border-width:5px; 
  border: 1px solid black;
  padding:5px;
    border-collapse: collapse;
	align:center;
}
</style>
    </head> 
    <body> 
	<div class="wrapper">
    <div class="navbar">
        <h1 class="title-1">Ganapat<br>University</h1>

        <div class="profile_wrap">
            <div class="profile_img">
                <img src="Avatar.svg" alt="">
            </div>
            <div class="profile_info">
                <h2 class="name"><?php echo  $_SESSION["user_name"]  ;   ?></h2>
                <p class="role">Student</p>
            </div>
        </div>

        <ul>
            <li>
                <a href="dashboad-student1.php" >
                    <span class="icon"><i class="fa fa-tachometer-alt"></i></span>
                    <span class="title_2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="Fetch.php" class="active">
                    <span class="icon"><i class="fa fa-star"></i></span>
                    <span class="title_2">History</span>
                </a>
            </li>
            <li>
                <a href="change_pass.php">
                    <span class="icon"><i class="far fa-file-alt"></i></span>
                    <span class="title_2">Change Pass</span>
                </a>
            </li>
            <li>
                <a href="show_profile.php">
                    <span class="icon"><i class="far fa-credit-card"></i></span>
                    <span class="title_2">Show Profile</span>
                </a>
            </li>
			<li>
                <a href="logout.php">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title_2">Logout</span>
                </a>
            </li>
        </ul>

    </div>
</div>

<div class = "writing" >
<?php
echo "<center>";

	$uname = $_SESSION['user_name'];
	$sql= "SELECT `enroll`,`sem` from `student` where `username`='$uname';";
	//echo $sql;
	echo "<br><br><h2>Filled Up Feedback Form</h2><br><br>";
	$result = mysqli_query($conn,$sql);
	//echo $sql;
	while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$en=$row['enroll'];
		$sem=$row['sem'];
	}
	//echo $sem;
	$sql2 = "SELECT u_detail.name,detail.a_table,detail.Name,detail.Link from detail,u_detail where `detail`.`sem`=$sem AND detail.uid=u_detail.username;";
	$result2 = mysqli_query($conn,$sql2);
	//echo $sql2;
	$a_t = array();
	$link = array();
	$t_name = array();
	$i=0;
	$a_t_name="";
	echo "<table><tr><th>Faculty Name</th><th>Form Name</th><th>Link</th></tr>";
	while($row = $result2->fetch_array(MYSQLI_ASSOC))
	{
		$a_t_name=$row['a_table'];
		$a_t[$i]= $row['a_table'];
		$link[$i]= $row['Link'];
		$t_name[$i]= $row['Name'];
		$sql3="SELECT en_no from $a_t_name where en_no=$en;";
		//echo $sql3."<br>";
		$result3=mysqli_query($conn,$sql3);
		if ($result3->num_rows <> 0) 
		{
		echo "<tr><td>".$row['name']."</td><td>".$row['Name']."</td><td><a href='".$row['Link']."'>".$row['Link']."</a></td></tr>";	
		}
		
		$i++;
		}
		

	echo "</table>";
	//print_r($t_name);
	
	echo "</center>";


        ?> 
<br>
<form method = "POST">

        <br>
        <a href="dashboad-student1.php">
        <input type="button" value="Back" name='Back'/>
    </a>
    </form>
    
</body>
</html>
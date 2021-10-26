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
        <title> Change Password</title> 
		    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/Style.css">

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
                <a href="Fetch.php">
                    <span class="icon"><i class="fa fa-star"></i></span>
                    <span class="title_2">History</span>
                </a>
            </li>
            <li>
                <a href="change_pass.php" class="active">
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


<br>
<form action="" method = "POST">
	<center>
	<table style="padding:20px;"><tr><td>
	<tr><td><input type="text" placeholder="User Name..." name="u_name"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>	
	<tr><td><input type="password" placeholder="Current Password..." name="old_pass"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td><input type="password" placeholder="New Password..." name="new_pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>	
	<tr><td><input type="password" placeholder="New Password..." name="new_pass2"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr align="center"><td><input type="submit"></td></tr>
	</table>
	<h3>If you forget your password then,<br> please contect Admin<br>OR<br>E-mail your problem to<br><a href="mailto:admin@gnu.ac.in">admin@gnu.ac.in</a></h3>
	</center>
    </form>
<?php
if(isset($_POST['u_name'])){
	$uname=$_POST['u_name'];
	$old_pass=$_POST['old_pass'];
	$new_pass1=$_POST['new_pass1'];
	$new_pass2=$_POST['new_pass2'];
	if($new_pass1!=$new_pass2){
	echo "<center>Password is not matching</center>";
	}
	else{
	$sql1 = "SELECT pass from student where username='".$uname."' and pass='".$old_pass."'";
	$result=mysqli_query($conn,$sql1);
	if ($result->num_rows == 0) 
        {

		echo "<center>Old password or user name is wrong</center>";
        exit();
	
		}
	else{
		$sql2="UPDATE `student` SET `pass` = '$new_pass1' WHERE `student`.`username` = '$uname'";
		$result2 = mysqli_query($conn,$sql2);
	if(!$result2){
		echo "<center>Something went wrong</center>";
	}
	else{
		echo "<center>Your Password Changed</center>";
	}
	}
	
	}
}
else{
	
}
?>
    
</body>
</html>
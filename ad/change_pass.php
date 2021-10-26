
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>
	<script>
	input{
		padding:10px;
	}
	</script>
</head>
<body>
<?php
	  if (isset($_COOKIE['uname'])) {
	  }
	  else{
		  header('Location:index.php');
	  }
	  ?>
	  <?php?>
	  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="styles.css">

        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Home</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="dimage.png" alt="" class="nav__logo-icon" width="22" height="22">
                        <span class="nav__logo-text">Ganpat University</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="http://localhost/ad/type.php" class="nav__link active">
                            <i class='bx bxs-grid nav__logo' ></i>
                            <span class="nav__text">Home</span>
                        </a>
                       
                        <a href="http://localhost/ad/select.php" class="nav__link ">
                            <i class='bx bxs-message-add nav__logo'></i>
                            <span class="nav__text">Create Form</span>
                        </a>
                        <a href="http://localhost/ad/show.php" class="nav__link">
                            <i class='bx bxs-collection nav__logo'></i>
                            <span class="nav__text">Show All Forms</span>
                        </a>
                        <a href="http://localhost/ad/result.php" class="nav__link">
                            <i class='bx bxs-message-alt-check nav__logo' ></i>
                            <span class="nav__text">Display Result</span>
                        </a>                
                    </ul>
                </div>
                <a href="http://localhost/ad/logout.php" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__logo'></i>        
                    <span class="nav__text">Logout</span>
                </a>
            </nav>
        </div>
    </body>
    <!-- MAIN JS -->
    <script src="main.js"></script>
</html>
	  
<form action="" method = "POST">
	<center>
	<table style="padding:20px;"><tr><td>
	<tr><td><input type="text" placeholder="User Name..." name="uname" style="padding:8px;"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>	
	<tr><td><input type="password" placeholder="Current Password..." name="old_pass" style="padding:8px;"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td><input type="password" placeholder="New Password..." name="new_pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" style="padding:8px;" required /></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>	
	<tr><td><input type="password" placeholder="New Password..." name="new_pass2" style="padding:8px;"></td></tr><br>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr align="center"><td><input type="submit" style="padding:7px 6px 7px 6px;"></td></tr>
	</table>
	</center>
    </form>
<?php
include('web.php');
if(isset($_POST['uname'])){
	$uname=$_POST['uname'];
	$old_pass=$_POST['old_pass'];
	$new_pass1=$_POST['new_pass1'];
	$new_pass2=$_POST['new_pass2'];
	if($new_pass1!=$new_pass2){
	echo "<center>New Password is not matching</center>";
	}
	else{
	$sql1 = "SELECT pass from `u_detail` where username='".$uname."' and password='".$old_pass."'";
	//echo $sql1;
	$result=mysqli_query($conn,$sql1);
	if (!$result) 
        {

		echo "<center>Old password or user name is wrong</center>";
        exit();
	
		}
	else{
		$sql2="UPDATE `u_detail` SET `password` = '$new_pass1' WHERE `u_detail`.`username` = '$uname'";
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
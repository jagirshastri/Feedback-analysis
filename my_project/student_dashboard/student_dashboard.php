<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
<link rel="stylesheet" href="/ad/Style.css">
<link rel="stylesheet" href="/ad/all.min.css">
<style>

</style>
</head>
<body>
    <?php
        session_start();
       //$user_name = $_SESSION['u_name'];
        ?>
 
     
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
                <a href="dashboard.php" class="active">
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

<div class = "writing">
</div>


</body>
</html>
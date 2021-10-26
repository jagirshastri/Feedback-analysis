<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
th,td{
	border: 1px;
	align:center;
}

</style>
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
        <title>Result</title>
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
                        <a href="http://localhost/ad/type.php" class="nav__link">
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
                        <a href="http://localhost/ad/result.php" class="nav__link active">
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
	  
	  <?php?>
	<center>
	<table style="padding-top:100px; width:45%; height:80%; " align="center"><tr>
	<!--<td><a href="http://localhost/ad/result_all.php"><button class="button" type="submit" style="width: 400px;">Show All Responses</button></a></td></tr>
	<tr><td><a href="http://localhost/ad/result_short.php"><button class="button" type="submit" style="width: 400px;">Show Concluded Responses</button></a></td></tr>
	<tr ><td><a href="http://localhost/ad/s_result_all.php"><button class="button" type="submit" style="width: 400px;">Show All Static Responses</button></a></td></tr>
	<tr><td><a href="http://localhost/ad/s_result_short.php"><button class="button" type="submit" style="width: 400px;">Show Static Concluded Responses</button></a></td></tr>
	-->
	<th>Dynamic Form Result</th><th>Static Form Result</th></tr>
	<tr align="center"><td style="padding-top:20px;"><a href="http://localhost/ad/result_all.php"><img src='all1.png'></a></td><td style="padding-top:20px;"><a href="http://localhost/ad/s_result_all.php"><img src='allresult.png'></a></td></tr>
	<tr align="center"><td><a href="http://localhost/ad/result_all.php">All Responses</a></td><td><a href="http://localhost/ad/s_result_all.php">All Responses</a></td></tr>
	<tr align="center"><td style="padding-top:30px;"><a href="http://localhost/ad/result_short.php"><img src='concluded.png'></a></td><td style="padding-top:30px;"><a href="http://localhost/ad/s_result_short.php"><img src='concluded2.png'></a></td></tr>
	<tr align="center"><td><a href="http://localhost/ad/result_all.php">Summarised Result</a></td><td><a href="http://localhost/ad/s_result_all.php">Summarised Result</a></td></tr>
	</table>
	</center>

</body>
</html>

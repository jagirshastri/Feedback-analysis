<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
.button {
  border: ;
  color: #ffa31a;;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #001133;
  border-radius: 20px;
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
	  <?php?>
	  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="/ad/styles.css">

        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Result</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="/ad/dimage.png" alt="" class="nav__logo-icon" width="22" height="22">
                        <span class="nav__logo-text">Ganapt University</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="http://localhost/ad/admin/index.php" class="nav__link">
                            <i class='bx bxs-grid nav__logo' ></i>
                            <span class="nav__text">Home</span>
                        </a>
                       
                        <a href="http://localhost/ad/admin/add_faculty.php" class="nav__link ">
                            <i class='bx bxs-message-add nav__logo'></i>
                            <span class="nav__text">Add Faculty</span>
                        </a>
                        <a href="http://localhost/ad/admin/show.php" class="nav__link">
                            <i class='bx bxs-collection nav__logo'></i>
                            <span class="nav__text">Show All Forms</span>
                        </a>
                        <a href="http://localhost/ad/result.php" class="nav__link active">
                            <i class='bx bxs-message-alt-check nav__logo' ></i>
                            <span class="nav__text">Display Result</span>
                        </a>                
                    </ul>
                </div>
                <a href="http://localhost/ad/admin/logout.php" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__logo'></i>        
                    <span class="nav__text">Logout</span>
                </a>
            </nav>
        </div>
    </body>
    <!-- MAIN JS -->
    <script src="/ad/main.js"></script>
</html>
	  
	  <?php?>
	<center>
	<table style="padding-top:100px; width:45%; height:80%; " align="center"><tr>
	<!--<td><a href="http://localhost/ad/admin/result_all.php"><button class="button" type="submit" style="width: 400px;">Show All Responses</button></a></td></tr>
	<tr><td><a href="http://localhost/ad/admin/result_short.php"><button class="button" type="submit" style="width: 400px;">Show Concluded Responses</button></a></td></tr>
	<tr ><td><a href="http://localhost/ad/admin/s_result_all.php"><button class="button" type="submit" style="width: 400px;">Show All Static Responses</button></a></td></tr>
	<tr><td><a href="http://localhost/ad/admin/s_result_short.php"><button class="button" type="submit" style="width: 400px;">Show Static Concluded Responses</button></a></td></tr>
	-->
	<th>Dynamic Form Result</th><th>Static Form Result</th></tr>
	<tr align="center"><td style="padding-top:20px;"><a href="http://localhost/ad/admin/result_all.php"><img src='/ad/all1.png'></a></td><td style="padding-top:20px;"><a href="http://localhost/ad/admin/s_result_all.php"><img src='/ad/allresult.png'></a></td></tr>
	<tr align="center"><td><a href="http://localhost/ad/admin/result_all.php">All Responses</a></td><td><a href="http://localhost/ad/admin/s_result_all.php">All Responses</a></td></tr>
	<tr align="center"><td style="padding-top:30px;"><a href="http://localhost/ad/admin/result_short.php"><img src='/ad/concluded.png'></a></td><td style="padding-top:30px;"><a href="http://localhost/ad/admin/s_result_short.php"><img src='/ad/concluded2.png'></a></td></tr>
	<tr align="center"><td><a href="http://localhost/ad/admin/result_all.php">Summarised Result</a></td><td><a href="http://localhost/ad/admin/s_result_all.php">Summarised Result</a></td></tr>
	</table>
	</table>
	</center>

</body>
</html>

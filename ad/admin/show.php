<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
<style>
table, th, td {
	border-width:5px; 
  border: 1px solid black;
  padding:5px;
    border-collapse: collapse;
}
</style>
</head>

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
        <title>Forms</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="/ad/dimage.png" alt="" class="nav__logo-icon" width="22" height="22">
                        <span class="nav__logo-text">Ganpat University</span>
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
                        <a href="http://localhost/ad/admin/show.php" class="nav__link active">
                            <i class='bx bxs-collection nav__logo'></i>
                            <span class="nav__text">Show All Forms</span>
                        </a>
                        <a href="http://localhost/ad/admin/result.php" class="nav__link">
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
    <script src="/ad/main.js"></script>
</html>
	  
	  <?php?>
<div style="margin-top:2%;">
<?php



$sql = "SELECT * FROM `detail` where `Flag` = 1 or `Flag`= 2 ORDER BY Time ASC;";
include('web.php');
$result = mysqli_query($conn,$sql);
//echo $sql;
while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
        $rows[] = $row;	
    }
echo "<center><table>";
echo "
	<tr><th>Faculty ID</th><th>Table Name</th><th>Link</th><th>Semester</th><th>Time</th><th>Responses</th><th>Delete</th></tr>
	";
	error_reporting(E_ERROR | E_PARSE);
	$b=0;
foreach($rows as $row)
{
	$b++;
	$atbl=$row['a_table'];
	$result = mysqli_query($conn,"SELECT * FROM `$atbl`");
	$res = mysqli_num_rows($result);
	
	echo 
	"<tr>
	<td>".$row['uid']."</td>
	<td>".$row['Name']."</td>         
	<td><a href='".$row['link']."' target='_blank'>".$row['link']."</a></td>
	<td align='center'>".$row['sem']."</td>
	<td>".$row['Time']."</td>
	<td align='center'>$res</td>
	<td align='center'><a href='delete_table.php?uid=".$row['uid']."&t_name=".$row['Name'].";'>Delete</td>
	</tr>";
}
if($b==0){
echo "<tr><td  colspan='5'>No Form created with this username</td></tr>";
}
echo "</table></center>";


?>
</div>
</body>
</html>

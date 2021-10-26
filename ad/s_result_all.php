<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>

table, th, td {
	border-width:5px; 
  border: 1px solid black;
  padding:5px;
    border-collapse: collapse;
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
        <title>Dashboard</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="dimage.png" alt="" class="nav__logo-icon" width="22" height="22">
                        <span class="nav__logo-text">DASHBOARD</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="http://localhost/ad/type.php" class="nav__link ">
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
	<div style="margin-top:2%;">
	<form action="" method="post" >
    
	<select  id="sem" name="sem" autocomplete="off" style="padding:7px; padding-right:20px"  required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
							<option value="all">ALL</option>
                        </select>
	<select  id="sub" name="sub" autocomplete="off" style="padding:7px; padding-right:20px;" required>
                            <option value="AD">AD</option>
                            <option value="WAD">WAD</option>
                            <option value="PS">PS</option>
                            <option value="FP">FP</option>
                            <option value="AC">AC</option>
                            <option value="MM">M&M</option>
							<option value="all">ALL</option>
                        </select>
	<input type="text" name="date" style="padding:7px;" placeholder="YYYY-MM-DD" size="30" required> 
    <input type="submit" value="Show" name="submit" style="padding:7px;" id="sub" />
</form>
	</center>
<?php 
    if (isset($_POST['sem'])) {
        $sem = $_POST["sem"];
		$sub = $_POST["sub"];
		$date = $_POST["date"];
	include('web.php');
	//print $tname[0];
	echo "<table><tr><td>Semester - ".$sem."</td></tr>";
	echo "<tr><td>Subject - ".$sub."</td></tr>";
	echo "<tr><td>Date - ".$date."</td></tr></table>";
	if($sem=='all' and $sub!='all' and $date!='all' ){
		$sql = "SELECT * FROM form1 where `sub`='$sub' AND date(`Recieved_on`) = '$date';";
		echo $sql;	
	}
	elseif($sem!='all' and $sub=='all' and $date!='all' ){
			$sql = "SELECT * FROM form1 where `Semester`=$sem AND date(`Recieved_on`) = '$date';";
	}
	elseif($sem=='all' and $sub=='all' and $date!='all'){
			$sql = "SELECT * FROM form1 where date(`Recieved_on`) = '$date';";
	}
	
	elseif($sem=='all' and $sub=='all' and $date=='all'){
			$sql = "SELECT * FROM form1 ;";
	}
	elseif($sem!='all' and $sub!='all' and $date=='all'){
			$sql = "SELECT * FROM form1 where `Semester`=$sem AND `sub`='$sub';";
	}
	elseif($sem=='all' and $sub!='all' and $date=='all'){
			$sql = "SELECT * FROM form1 where `sub`='$sub';";
	}
	elseif($sem!='all' and $sub=='all' and $date=='all'){
			$sql = "SELECT * FROM form1 where `Semester`=$sem ";
	}
	else{
	$sql = "SELECT * FROM form1 where `Semester`=$sem AND `sub`='$sub' AND date(`Recieved_on`) = '$date';";
	}
	
	
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) 
	{
    echo "<br><br><center><table ><tr>";
    $field = $result->fetch_fields();
    $fields = array();
    $j = 0;
	$d=0;
    foreach ($field as $col)
        {
			if($d>=3){
            echo "<th>".$col->name."</th>";
            array_push($fields, array(++$j, $col->name));
			}
			$d++;
        }
        echo "</tr>";
    while($row = $result->fetch_array()) 
		{
            echo "<tr>";
            for ($i=0 ; $i < sizeof($fields) ; $i++)
            {
                $fieldname = $fields[$i][1];
                $filedvalue = $row[$fieldname];

                echo "<td>" . $filedvalue . "</td>";
            }
            echo "</tr>";
        }
        echo "</table></center>";
	}
	else{
	echo "<center><h3>No Responses with this combination</h3></center>";
	}
    }
	
	else{
	
	}


?>

</body>

</html>

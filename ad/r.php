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
	align:center;
}
</style>
</head>
<body>

<?php
	  if (isset($_COOKIE['uname'])) {
	  }
	  else{
		  header('Location:index.php');
	  }
	  ?>
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
                        <span class="nav__logo-text">Ganpat University</span>
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
                        </select>
	<select  id="sub" name="sub" autocomplete="off" style="padding:7px; padding-right:20px;" required>
                            <option value="AD">AD</option>
                            <option value="WAD">WAD</option>
                            <option value="PS">PS</option>
                            <option value="FP">FP</option>
                            <option value="AC">AC</option>
                            <option value="MM">M&M</option>
                        </select>	
    
    <input type="submit" value="Show" name="submit" style="padding:7px;" id="sub" />
</form>
<br><br>
	</center>
    <?php 
    if (isset($_POST['sem'])) {
        $sem = $_POST["sem"];
		$sub = $_POST["sub"];
		//$date = $_POST["date"];
	include('web.php');
	//print $tname[0];

	
		$sql1 = "SELECT avg(`Session_`) as q1 FROM form1 where `sub`='$sub' AND `Semester`=$sem;";
		$sql2 = "SELECT avg(`Content`) as q2 FROM form1 where `sub`='$sub' AND `Semester`=$sem;";	
		$sql3 = "SELECT avg(`Professor`) as q3 FROM form1 where `sub`='$sub' AND `Semester`=$sem;";
		$sql4 = "SELECT avg(`AV_Quality`) as q4 FROM form1 where `sub`='$sub' AND `Semester`=$sem;";
	
	
	//$sql1 = "SELECT avg(`Session_`) as q1 FROM form1 where `sub`='$sub' AND `Semester`=$sem AND date(`Recieved_on`) = '$date';";
	//$sql2 = "SELECT avg(`Content`) as q2 FROM form1 where `sub`='$sub' AND `Semester`=$sem AND date(`Recieved_on`) = '$date';";	
	//$sql3 = "SELECT avg(`Professor`) as q3 FROM form1 where `sub`='$sub' AND `Semester`=$sem AND date(`Recieved_on`) = '$date';";
	//$sql4 = "SELECT avg(`AV_Quality`) as q4 FROM form1 where `sub`='$sub' AND `Semester`=$sem AND date(`Recieved_on`) = '$date';";	
	
	
	
	//echo $sql;
	$result1 = mysqli_query($conn,$sql1);
	$result2 = mysqli_query($conn,$sql2);
	$result3 = mysqli_query($conn,$sql3);
	$result4 = mysqli_query($conn,$sql4);
	if ($result1->num_rows > 0) 
	{
		while($row = $result1->fetch_array(MYSQLI_ASSOC))
		{
			$avg_q1=$row['q1'];
		}
	}
	if ($result2->num_rows > 0) 
	{
		while($row = $result2->fetch_array(MYSQLI_ASSOC))
		{
			$avg_q2=$row['q2'];
		}
	}
	
	if ($result3->num_rows > 0) 
	{
		while($row = $result3->fetch_array(MYSQLI_ASSOC))
		{
			$avg_q3=$row['q3'];
		}
	}
	if ($result4->num_rows > 0) 
	{
		while($row = $result4->fetch_array(MYSQLI_ASSOC))
		{
			$avg_q4=$row['q4'];
		}
	}
	$a_avg= ($avg_q1+$avg_q2+$avg_q3+ $avg_q4)/4;
    $dataPoints = array( 
        array("y" => $avg_q1, "label" => "session" ),
        array("y" => $avg_q2, "label" => "Content" ),
        array("y" => $avg_q3, "label" => "Professor" ),
        array("y" => $avg_q4, "label" => "AV Quality" ),	
    );
    
	echo "<center>
	<table>
	<tr><th>No.</th><th>Question</th><th>Average Response</th></tr>
	<tr><td>1</td><td>How was the Session?</td><td>".$avg_q1."</td></tr>
	<tr><td>2</td><td>How was the content of the Subject?</td><td>".$avg_q2."</td></tr>
	<tr><td>3</td><td>How was the content delivered by the Professor?</td><td>".$avg_q3."</td></tr>
	<tr><td>4</td><td>How was the audio/video quality during the sessions?</td><td>".$avg_q4."</td></tr>
	</center></table><br><br>
	";
	echo "<center>";
		for($i=0;$i<(int)$a_avg;$i++){
		echo "<img src='rate.png' alt='Rating' height='4%' width='4%'>";
		}
		if($a_avg<2){
			
			echo "<h2><b>You need more improvment</b></h2>";
			}
		elseif($a_avg<3){echo "<h2><b>You need some improvment</b></h2>";}
		elseif($a_avg<4){echo "<h2><b>Your response is Average </b></h2>";}
		elseif($a_avg<5){echo "<h2><b>You are Excellent Teacher</b></h2>";}
		echo "</center>";
        
            echo '<b>',$sub,'</b>';      
            
	}
    

?>


</html>
<html>
    <head>
        

<script>
            window.onload = function() {
 
        var chart = new CanvasJS.Chart("chartContainer", {
	    animationEnabled: true,
	    theme: "light2",
	    title:{
		text: ""
	},
	axisY: {
		title: "AVG"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
</body>
</html>










 
 
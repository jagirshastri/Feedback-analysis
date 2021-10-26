<!DOCTYPE html>
<html>
<head>
 <style>
 #sub{
  border: ;
  color: #ffa31a;
  padding: 6px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 10px;
  cursor: pointer;
  background-color: #001133;
  border-radius: 5px;
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
<?php include('show.php');?>
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
                        <span class="nav__logo-text">Web Clasher</span>
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
<div style="margin-top:2%;">
<form action="" method="post" >
    <input type="text" name="fname" style="padding:7px;" placeholder="Enter Form name" size="30" required> 
    <input type="submit" value="Show" name="submit" id="sub" />
</form>

<?php 
    if (isset($_POST['fname'])) {
        $tn = $_POST["fname"];
	$uid = $_COOKIE['uname'];
	include('web.php');
	$sql1 = "SELECT `a_table`,`q_table` FROM `detail` where `Name`='$tn' and `uid`='$uid';";
	echo "<center><h2>".$tn."</h2></center>";
	$result1=mysqli_query($conn,$sql1);
	$tname = mysqli_fetch_row($result1);
	//print $tname[0];
	//print $tname[1];
	$sql = "SELECT * FROM `$tname[0]`";
	$sql2 = "SELECT * FROM `$tname[1]`";
	$result=mysqli_query($conn,$sql);
	if ($result->num_rows > 0) 
	{
	$result2=mysqli_query($conn,$sql2);
	$rowcount=mysqli_num_rows($result);
	$colum_fetch = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = \'test1\' AND table_name = \'$tname[0]\'";
	$no_colum=mysqli_num_fields($result)."<br>";
	$data = 0;
	$questions = array();
	$color = array('#000033','#000066','#0000CC','#0000FF','#3300FF','#330033','#00001a');
	$col=0;
	while($que = $result2->fetch_array(MYSQLI_ASSOC))
	{
		$questions[] = $que['question'];
	}
	//print_r($questions);
	$n=0;
	$a=0;
	$b=1;
	echo "<center><table><tr><th>No.</th><th>Question</th><th>Average Response</th><th style='padding-left:50px; padding-right:50px;'>Graph</th></tr>";
	for($x=1;$x<=((int)$no_colum-4);$x++){
		$sql1="select avg(Q$x) from `$tname[0]` ";
		//echo $sql1;
		$result_avg=mysqli_query($conn,$sql1);
		
		$n++;
		$q="";
		while($row = $result_avg->fetch_array(MYSQLI_ASSOC))
		{

			
            ${'q'.$x}=$row["avg(Q".$x.")"];
			$data+=(float)$row["avg(Q".$x.")"];
			$g = (100*${'q'.$x})/5;
		echo " <tr><td>$b</td><td>$questions[$a]</td><td align='center'>".$row["avg(Q".$x.")"]."
		</td><td style='padding:0px; margin:0px; '><hr style='margin-left:0px; border: 7px solid ".$color[$col]."; width:".$g."%; 
		border-radius:2px;  background-color:".$color[$col].";'></td></tr>";
		if($col+1==7){
			$col=0;
		}
		else{
		$col++;
	}
        $q.="q".$x.",";
		$a++;
		$b++;
        //echo $q;
        $new_q=rtrim($q,",");
		}
			
		}

		echo "</table></center>";
		$a_avg = $data/$n;
		$dataPoints="";
		$dataPoints=array();
		for($i=1; $i<=$n;$i++){
		$dataPoints[$i-1] =  array("y" => ${'q'.$i}, "label" => "q$i");
	}
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
	}
		else{
	echo "<center><h3>No Responses</h3><h3>OR</h3><h3>There is no Form with \"".$tn."\" name or not created</h3><h3>OR</h3><h3>You are not owner of this form</h3></center>";
	}
	}
	



?>
</body>
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
    <center><div id="chartContainer" style="height: 300px; width: 80%;"></div></center>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
</body>
</html>

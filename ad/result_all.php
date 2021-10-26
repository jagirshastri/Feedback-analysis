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
<div style="margin-top:2%;">
<form action="" method="post" >
    <input type="text" name="fname" style="padding:7px;" placeholder="Enter Form name" size="30" required> 
    <input type="submit" value="Show" name="submit" id="sub" />
</form>
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
<?php 
    if (isset($_POST['fname'])) {
        $tn = $_POST["fname"];
	$uid = $_COOKIE['uname'];
	include('web.php');
	$sql1 = "SELECT `a_table`,`q_table` FROM `detail` where `Name`='$tn' and `uid`='$uid';";
	$result1=mysqli_query($conn,$sql1);

	$tname = mysqli_fetch_row($result1);
	//print $tname[0];
	$sql = "SELECT * FROM `$tname[0]`;";
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	echo "<center><h2>".$tn."</h2></center>";
	if ($result->num_rows > 0) 
	{
    echo "<center><table ><tr>";
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
	echo "<center><h3>No Responses</h3><h3>OR</h3><h3>There is no From with \"".$tn."\" name or not created</h3><h3>OR</h3><h3>You are not owner of this form</h3></center>";
	}
    }
	
	else{
	
	}


?>
</div>
</body>
</html>
  


<?php

include("web.php");
$uid = $_GET['uid'];
$t_name = $_GET['t_name'];
$t_name = rtrim($t_name,";");
echo $t_name;
$sql = "SELECT * FROM `detail` where `uid` = '$uid' and `Name` = '$t_name'";
$result = mysqli_query($conn,$sql);
while($row=$result->fetch_array(MYSQLI_ASSOC)){
	$q_t = $row['q_table'];
	$a_t = $row['a_table'];
	echo "hi";
}

$del = mysqli_query($conn,"Update `detail` set `Flag`= 0 where `uid` = '$uid' and `Name` = '$t_name'");
if($del)
{
	//echo "Update `detail` set `Flag`= 0 where `uid` = '$uid' and `Name` = '$t_name'";
    header("location:show.php");
    exit;  
	
}
else
{
    echo "Error deleting record";
}
?>
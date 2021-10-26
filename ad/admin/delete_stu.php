<?php

include("web.php");
$enroll = $_GET['enroll'];
$enroll = rtrim($enroll,";");
$del = mysqli_query($conn,"delete from `student` where `enroll` = '$enroll'");
if($del)
{
    mysqli_close($conn);
    header("location:student.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
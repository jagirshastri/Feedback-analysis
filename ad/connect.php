<!--Deep Nakrani CS-19162171022-->
<?php 
session_start();
if (isset($_POST['submit']))
{
$sname=$_POST['sname'];
$email=$_POST['Email'];
$eno=$_POST['enr'];
$br=$_POST['branch'];
$sem=$_POST['semester'];
$sub=$_POST['subject'];
$session=$_POST['s_rating'];
$content=$_POST['c_rating'];
$professor=$_POST['f_rating'];
$av=$_POST['av_rating'];
$sugg=$_POST['suggestions'];
include('C:\\xampp\htdocs\ad\web.php');

$stm=$conn->prepare("INSERT INTO form1(S_name,Email,Eno,Branch,Semester,Sub,Session_,Content,Professor,AV_Quality,Suggestions) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$stm->bind_param("ssisisiiiis",$sname,$email,$eno,$br,$sem,$sub,$session,$content,$professor,$av,$sugg);
$stm->execute();
echo "Form Submitted....";
echo "<br><a href='static_temp.html'>Submit Another Response</a>";
$stm->close();
$conn->close();
}
session_unset();
session_write_close();
?>
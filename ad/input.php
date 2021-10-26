<?php  
include('web.php'); 
  $sem = $_POST['sem'];
  $name = $_POST['name1'];
 $number = count($_POST["name"]); 
include('create_file.php');


 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO $qtname(question) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";  
                mysqli_query($conn, $sql);
				
           }  
      }  
      echo "Your Form Has been created Get link from show all form session";	  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
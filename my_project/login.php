<?php
session_start();
define("DB_SERVER", "localhost:3306");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "test1");

$cnn =	new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) 
{
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if(isset($_POST["user"], $_POST["pass"])) 
    {     


        $name = $_POST["user"]; 
        $password_login = $_POST["pass"]; 
		$att = $_POST["atten"]; 

      if ($att < 40) 
      {
      	echo "$att";
      header('Refresh:0; URL=att.html');
        
        }


        else
        {
      $sql = "SELECT username,pass,email_id FROM student WHERE username = '".$name."' AND  pass = '".$password_login."'";
        $result1 = $cnn->query($sql);
        //$en = $row->enroll;
        
        
       

        if($result1->num_rows > 0)
        { 
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time(); 
            $_SESSION['user_name'] = $name;
            while($row = $result1->fetch_assoc()) 
            {
              $email = $row["email_id"];
              $otp = rand(100000,999999);
               // Send OTP
            require_once("mail_function.php");
            $mail_status = sendOTP($email,$otp);
            
            if($mail_status == 1) {
              $sql3 = "INSERT INTO otp_expiry(otp,is_expired,create_at,uname) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "','".$name."');";
              $result = mysqli_query($cnn,$sql3);
              $current_id = mysqli_insert_id($cnn);
              $success=1;

             // $_SESSION["status"] = $success;
              
            }
         /*  <!--  <h1 style="color:blue" align="center" >Sussesfully loged in!!!!!!</h1><br>
            <marquee bgcolor="#2C5364"   scrollamount="30" ><h2>Please wait while we redirect<h2></marquee>
            	 -->*/
            }
            
  			
  			header('Refresh:0; URL=otp_check.html');
  	
      }
        else
        {
            

         	 header('Refresh:0; URL=unauth.html');
  			

        }
	}
}

      ?>
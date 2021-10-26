<?php
session_start();
  include 'web.php';

  $uid = $_POST['uid'];
  $pass = $_POST['pass'];
  $_SESSION['uname'] = $uid;

  $sql = "SELECT * FROM u_detail WHERE username='$uid' AND password='$pass'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "<center><h3>Your username or password is incorrect please try agin!</h3><center>";
	header("Location: index1.php");
	
	
  } else {
	setcookie("uname", $uid, time() + (3600*24), "/");
	
	
	
	$sql = "SELECT * FROM u_detail WHERE username='$uid' AND password='$pass'";
        $result1 = $conn->query($sql);
        //$en = $row->enroll;
        
        
       

        if($result1->num_rows > 0)
        { 
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time(); 
            $_SESSION['user_name'] = $uid;
            while($row = $result1->fetch_assoc()) 
            {
              $email = $row["email"];
              $otp = rand(100000,999999);
               // Send OTP
            require_once("mail_function.php");
            $mail_status = sendOTP($email,$otp);
            
            if($mail_status == 1) {
              $sql3 = "INSERT INTO otp_expiry(otp,is_expired,create_at,uname) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "','".$uid."');";
              //echo $sql3;
              $result = mysqli_query($conn,$sql3);
              $current_id = mysqli_insert_id($conn);
              $success=1;

             // $_SESSION["status"] = $success;
              
            }

            }
            
  			
  			header('Refresh:0; URL=otp_check.html');
  	
	
    
		}
  }

?>
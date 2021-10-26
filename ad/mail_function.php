<?php	
	function sendOTP($email,$otp) {
		require('vendor/phpmailer/phpmailer/src/PHPMailer.php');
		require('vendor/phpmailer/phpmailer/src/SMTP.php');
		require("vendor/autoload.php");
	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = 587;
		$mail->Username = "mailid";
		$mail->Password = "password";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("mailid", "name");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
    	return $result;
	
     }
	}
 


?>

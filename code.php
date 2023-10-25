<?php


if(isset($_POST['banner_btn'])){
		$ban_name = isset($_POST['b_name'])?$_POST['b_name']:"";
		$ban_email = isset($_POST['b_email'])?$_POST['b_email']:"";
		$ban_number = isset($_POST['b_num'])?$_POST['b_num']:"";
		$ban_num    = isset($_POST['b_msg'])?$_POST['b_msg']:"";
		
		$to  = 'info@getexamdone.com';
		
		$name = $contact_name;
		$email = $contact_email;
		$email = str_replace(' ','',$email);
		$contact = $contact_number;
		$date = date('Y-m-d');
		$date_format = date_format(date_create($date),"Y-m-d h:i:s");
		$subject ='SIGN UP AND GET UP-TO 50% OFF';
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "SIGN UP AND GET UP-TO 50% OFF";
		$message = ".
					<table border='2'>
						<tr><td>Name:</td><td>".$ban_name."</td></tr>
						<tr><td>Email:</td><td>".$ban_email."</td></tr>
						<tr><td>Phone Number:</td><td>".$bant_number."</td></tr>
						<tr><td>Message:</td><td>".$ban_num."</td></tr>
					</table>";
		$message = nl2br($message);
		//admin mail
		mail($to, $subject, $message, $headers);
		
		//User Mail
		
// 		$user_message1 = "Thank you! We will connect with you soon";
// 		mail($contact_email, $subject, $user_message, $headers);
		header('Location: https://www.getexamdone.com/thank-you.php');
// 		echo "<script>window.location.href='https://takemycourse4me.com';</script>";
        // exit;
		
		
	}
	
	
	
	
		/*    ***********************  end   ***********************      */
	
	if(isset($_POST['contact_btn'])){
		$contact_name = isset($_POST['b_name'])?$_POST['b_name']:"";
		$contact_email = isset($_POST['b_email'])?$_POST['b_email']:"";
		$contact_number = isset($_POST['b_num'])?$_POST['b_num']:"";
		$message_num    = isset($_POST['b_msg'])?$_POST['b_msg']:"";
		
		$to  = 'info@getexamdone.com';
		
		$name = $contact_name;
		$email = $contact_email;
		$email = str_replace(' ','',$email);
		$contact = $contact_number;
		$date = date('Y-m-d');
		$date_format = date_format(date_create($date),"Y-m-d h:i:s");
		$subject ='SIGN UP AND GET UP-TO 50% OFF';
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "SIGN UP AND GET UP-TO 50% OFF";
		$message = ".
					<table border='2'>
						<tr><td>Name:</td><td>".$contact_name."</td></tr>
						<tr><td>Email:</td><td>".$contact_email."</td></tr>
						<tr><td>Phone Number:</td><td>".$contact_number."</td></tr>
						<tr><td>Message:</td><td>".$message_num."</td></tr>
					</table>";
		$message = nl2br($message);
		//admin mail
		mail($to, $subject, $message, $headers);
		
		//User Mail
		
// 		$user_message1 = "Thank you! We will connect with you soon";
// 		mail($contact_email, $subject, $user_message, $headers);
		header('Location: thank-you.php');
// 		echo "<script>window.location.href='https://takemycourse4me.com';</script>";
        // exit;
		
	}

        	/*    ***********************  end   ***********************      */

?>
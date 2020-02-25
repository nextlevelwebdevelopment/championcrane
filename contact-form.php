<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['coname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$coname = $_POST['coname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	if (!empty($fname) && !empty($lname) && !empty($coname) && !empty($phone) && !empty($email) && !empty($message)){
	
		$to = "andrewdavis64@outlook.com";
		$subject = "Champion Crane Website Contact Form";
		$body = "FROM: ";
		$body = $fname;
		$body = " ";
		$body = $lname;
		$body = "\n";
		$body = "COMPANY: ";
		$body = $coname;
		$body = "\n";
		$body = "PHONE#:";
		$body = $phone;
		$body = "\n";
		$body = "EMAIL: ";
		$body = $email;
		$body = "\n";
		$body = "\n";
		$body = $message;
		$headers = $email;
		
		$sendemail = @mail($to, $subject, $body);
		
		if ($sendemail) {
			echo "Email Sent";
		}
		else {
			echo "ERROR: Email NOT Sent";
		}
	}
  }
 

?>
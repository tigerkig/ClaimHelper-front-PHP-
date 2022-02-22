<?php
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$receiver_email = $_SESSION['email_Address'];
	$sender_name = $_SESSION['Holder_Name'];
	$reference = $_POST["Policy_No"]."-".$_POST['reference'];
	$sender_email = "noreply@mailer.org";//////////////////////////	Nothing////////
	//
	$username = "smtpuser@gmail.com";
	$password = "smtpuser.password";
	//
	$subject = 'Claim Submission Confirmation';
	$message = "Dear our Valued Customer \n This is an acknowledgement email. Please quote this reference number (ref. no. ".$reference.") for any future communication. \n Kindly be advised that your e-Claim submission is well received by us. Your claim will be processing by our Claim Team accordingly. \n Please be reminded to comply strictly with all the policy conditions. \n Thank you for your kind attention.\n Yours faithfully, ".$sender_name." \n";
	
	$mail = new PHPMailer(true);
	$mail->isSMTP();
  //$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
  
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->setFrom($sender_email, $sender_name);
	$mail->Username = $username;
	$mail->Password = $password;
  
	$mail->Subject = $subject;
	$mail->msgHTML($message);
	$mail->addAddress($receiver_email);
	if (!$mail->send()) {
		$error = "Mailer Error: " . $mail->ErrorInfo;
		// echo 'Email Information : '.$error;
		echo '0';
 	}
	else {
	echo '1';
	}
?>
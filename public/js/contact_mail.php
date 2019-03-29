<?php

if (isset($_POST)) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// online Mailer
	// write email here
	$to = 'riazaz1800@gmail.com';
	// email ending
	$subject = $fname . ' is contacting with the property website';
	$message = '';
	$message .= 'First Name:     ' . $fname . PHP_EOL . '';
	$message .= 'Last Name:     ' . $lname . PHP_EOL . '';
	$message .= 'Email:    ' . $email . PHP_EOL . '';
	$message .= 'message:    ' . $message . PHP_EOL . '';
	$message .= '';
	$headers = 'From: "' . $email . '"' . "\r\n" .
	'Reply-To: "' . $email . '"' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	if (mail($to, $subject, $message)) {
		echo "success";
		// header("Location:index.php");
	} else {
		echo "failed";
		// header("Location:index.php");
	}
}

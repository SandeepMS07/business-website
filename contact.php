<?php
	$name=$_POST['email'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['number']
	
	$email_from = 'http://shriorganics.com/sandeep/project2/pindex1.html?';
	$email_subject = "New Form Submission";
	$email_body = "User Name : $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n".
							"User Phonenumber: $phone.\n".
						
						
	$to = "sandeepms746@gmail.com";
	
	$headers = "From : $email_from \r\n";
	
	$headers .="Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: pindex1.html");

?>
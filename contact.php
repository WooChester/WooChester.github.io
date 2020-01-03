<?php
	

	/*
	echo "HELLO" . "WORLD";
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = "chesterwoo409@gmail.com";
	$email_subject = "Form Submission";
	$email_body = "Name: $name\n"
					"E-mail: $email\n"
					"Message: $message\n";
					
	$to = $email_from;
	
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";
	
	$file_name = "form.txt";
	$content = file($file_name);
	
	$file = "form.txt";
	$current = file_get_contents($file);
	$current .= "$email_body";
	file_put_contents($file, $current);
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: indexBetterWebsite.html");

	*/
?>
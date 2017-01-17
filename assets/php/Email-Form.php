<?php
	if(!isset($_POST['submit']))
	{
		echo "error; you need to submit the form!";
	}
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	if(empty($name)||empty($visitor_email)) 
	{
	    echo "Name and email are mandatory!";
	    exit;
	}

	if(IsInjected($visitor_email))
	{
	    echo "Bad email value!";
	    exit;
	}

	$email_from = 'nlofgren@nilslofgren.me';
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $name.\n".
	    "Here is the message:\n $message".

	$to = "nlofgren@nilslofgren.me";
	$headers = "From: $visitor_email \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	echo "Message Sent";
?>

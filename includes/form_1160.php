<?php	
	if(empty($_POST['name_1160']) && strlen($_POST['name_1160']) == 0 || empty($_POST['email_1160']) && strlen($_POST['email_1160']) == 0 || empty($_POST['message_1160']) && strlen($_POST['message_1160']) == 0)
	{
		return false;
	}
	
	$name_1160 = $_POST['name_1160'];
	$email_1160 = $_POST['email_1160'];
	$message_1160 = $_POST['message_1160'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from alto el mazano.";
	$email_body = "You have received a new message. \n\n".
				  "Name_1160: $name_1160 \nEmail_1160: $email_1160 \nMessage_1160: $message_1160 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_1160";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
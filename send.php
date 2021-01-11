<?php
	$userName 		= $_POST['myName'];
    $userEmail	 	= $_POST['myEmail'];
    $userNumber    = $_POST['myNumber'];
    $userMessage 		= $_POST['myMessage'];
    

	$to 			= "reifferscheid@brianstemplats.site";
	$subject 		= "Email from my website";
    $body 			= "Information Submitted:";
    
   

	$body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Contact no: " . $userNumber;
    $body .= "\r\n Message: " . $userMessage;

    $headers 		= 'From: Brian Reifferscheid <support@brianstemplats.site>' . "\r\n" .
    'Reply-To: support@mybrianstemplats.site' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   

	mail($to, $subject, $body, $headers);
?>
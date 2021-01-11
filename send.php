<?php
	$userName 		= $_POST['MyName'];
    $userEmail	 	= $_POST['MyEmail'];
    $userNumber    = $_POST['MyNumber'];
    $userMessage 		= $_POST['MyMessage'];
    

	$to 			= "reifferscheid.brian@outlook.com";
	$subject 		= "Email from my website";
    $body 			= "Information Submitted:";
    
   

	$body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Contact no: " . $userNumber;
    $body .= "\r\n Message: " . $userMessage;

    
   

	mail($to, $subject, $body);
?>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $mailTo = "reifferscheid.brian@outlook.com";
    $subject = "Email from my website";
    $body = "You received an e-amil";

    $body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $mail;
	$body .= "\r\n Number: " . $number;
	$body .= "\r\n Message: " . $message;

    $headers 		= 'From: PHP Email Tutorial <support@myWebsite.com>' . "\r\n" .
    				'Reply-To: support@myWebsite.com' . "\r\n" .
    				'X-Mailer: PHP/' . phpversion();


    mail($mailTo, $subject, $body, $headers);
    header("Location:index.html#hire");
}

	
?>
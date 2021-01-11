<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $mailTo = "reifferscheid.brian@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You received an e-amil";

    $body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $mail;
	$body .= "\r\n Message: " . $message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

	
?>
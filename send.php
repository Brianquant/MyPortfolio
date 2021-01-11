<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $mailTo = "reifferscheid.brian@outlook.com";
    $headers = "From: ".$mailFrom;
    $headers = "Name: ".$name;
    $headers = "Number: ".$number;
    $headers = "Message: ".$message;
    $txt = "You received an e-amil";

    

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

	
?>
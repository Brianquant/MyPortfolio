<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $mailTo = "reifferscheid@brianstemplats.site";
    $headers = "From: ".$mailFrom;
    $txt = "You received an e-amil from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}

	
?>
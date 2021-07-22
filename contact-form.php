<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "New Form Submission";

    $mailTo = "meghansun322@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject, $txt,$headers);
    header("Location: contact.html?mailsend");
}


?> 
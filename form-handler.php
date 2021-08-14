<?php

$name=$_POST['name'];
$visitoremail=$_POST['email'];

$number=$_POST['number'];
$subject=$_POST['subject']
$message=$_POST['message'];



$email_form='info@yourwebsite.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
            "User Email: $visitoremail.\n".
            "Number: $number.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";


    $to='nwaiyan080@gmail.com';
    $headers="From: $email_form \r\n";
    $header .= "Reply-To : $visitoremail \r\n";

    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");


?>

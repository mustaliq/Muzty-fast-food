<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'MUZFAST@GMAIL.COM';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";

$to = 'lmustaliq@gmail.com';
$headers = "from: $email_from \r\n";
$headers .= "REPLY-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: find us.html");
?>
<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_boby = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";


$to = 'abhisheksingh@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $Visitor_email \r\n";

mail($to,$email_subject,$email_boby,$headers);

header("Location: contact.html");
?>

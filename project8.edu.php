<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from = 'info@eduford.com';

$email_subject = 'New Form submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Massage: $message.\n";


$to = 'vijayjangid186@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
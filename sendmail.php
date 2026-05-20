<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$message = $_POST['message'];

$to = "athirasunil7991@gmail.com"; // Your email ID
$subject = "Heat Stress Report";

$body = "
Employee Name: $name

Email: $email

Phone: $phone

Category: $category

Message:
$message
";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Report submitted successfully.";
} else {
    echo "Failed to send report.";
}

?>
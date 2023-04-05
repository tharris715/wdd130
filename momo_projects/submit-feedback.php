<?php

require 'vendor/autoload.php'; // Load the PHPMailer library

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$mail = new PHPMailer;
$mail->setFrom('feedback@momoprojects.com', 'Feedback Form');
$mail->addAddress('timothyharris715@gmail.com');
$mail->Subject = 'New feedback from ' . $name;
$mail->Body = "Name: $name\nEmail: $email\nFeedback: $feedback";

if (!$mail->send()) {
  echo 'Error sending email: ' . $mail->ErrorInfo;
} else {
  echo 'Thank you for your feedback!';
}

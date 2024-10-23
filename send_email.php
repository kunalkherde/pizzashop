<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();


// SMTP configuration
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'kunalkherd197@gmail.com'; // Your Gmail email address
$mail->Password = 'hrbx qjxx kcsg efnb'; // Your Gmail password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender and recipient settings
$mail->setFrom('kunal.kherde22@pccopune.org', 'Kunal kherde');
$mail->addAddress($_POST['email']); // Add recipient email address

// Email subject and body
$mail->Subject = 'Pizza Order Confirmation';
$mail->Body = 'Your pizza order has been successfully placed. Thank you!';

// Send the email
if ($mail->send()) {
    echo "Your order has been successfully placed. You will receive an email confirmation shortly.";
} else {
    echo "Failed to send email. Please try again later.";
}
?>
        
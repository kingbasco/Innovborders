<?php

// Define constants
define("RECIPIENT_NAME", "Innov Borders");
define("RECIPIENT_EMAIL", "innovborders@gmail.com");

// Read and sanitize form values
$name = isset($_POST['name']) ? htmlspecialchars(strip_tags($_POST['name'])) : "";
$senderEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : "";
$phone = isset($_POST['phone']) ? htmlspecialchars(strip_tags($_POST['phone'])) : "";
$services = isset($_POST['services']) ? htmlspecialchars(strip_tags($_POST['services'])) : "";
$subject = isset($_POST['subject']) ? htmlspecialchars(strip_tags($_POST['subject'])) : "";
$address = isset($_POST['address']) ? htmlspecialchars(strip_tags($_POST['address'])) : "";
$website = isset($_POST['website']) ? filter_var($_POST['website'], FILTER_SANITIZE_URL) : "";
$message = isset($_POST['message']) ? htmlspecialchars(strip_tags($_POST['message'])) : "";

$mail_subject = "A contact request sent by " . $name;

$body = "Name: $name \r\n";
$body .= "Email: $senderEmail \r\n";
if ($phone) { $body .= "Phone: $phone \r\n"; }
if ($services) { $body .= "Services: $services \r\n"; }
if ($subject) { $body .= "Subject: $subject \r\n"; }
if ($address) { $body .= "Address: $address \r\n"; }
if ($website) { $body .= "Website: $website \r\n"; }
$body .= "Message: \r\n$message";

// Email headers
$headers = "From: " . RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">\r\n";
$headers .= "Reply-To: $senderEmail\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Check if required fields are filled
if (!empty($name) && filter_var($senderEmail, FILTER_VALIDATE_EMAIL) && !empty($message)) {
    $success = mail(RECIPIENT_EMAIL, $mail_subject, $body, $headers);
    
    if ($success) {
        echo "<div class='inner success'><p class='success'>Thanks for contacting us. We will contact you ASAP!</p></div>";
    } else {
        echo "<div class='inner error'><p class='error'>Email sending failed. Please try again later.</p></div>";
        error_log("Mail sending failed for: $senderEmail");
    }
} else {
    echo "<div class='inner error'><p class='error'>Invalid input. Please check your details and try again.</p></div>";
}
?>

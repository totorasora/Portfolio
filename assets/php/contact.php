<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
    echo "Please fill out all fields.";
    return false;
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create email message
$to = "k.sr.lee@gmail.com";
$subject = "New message from $name";
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email";

// Send email
if(mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
} else {
    echo "Sorry, there was an error sending your message. Please try again.";
}
?>

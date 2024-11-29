<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Define email recipient and subject
    $to = "markpatrickcaampued1379@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    // Email content
    $body = "You have received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Message sent successfully!</h1>";
    } else {
        echo "<h1>Failed to send the message. Please try again later.</h1>";
    }
} else {
    echo "<h1>Invalid request method.</h1>";
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure proper form field values and sanitize inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Perform basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } else {
        // Configure email settings
        $to = 'marcmelodesign@gmail.com'; // Replace with your email address
        $subject = 'Contact Form Submission from ' . $name;
        $headers = 'From: ' . $email;

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Email sending failed. Please try again later.";
        }
    }
} else {
    echo "Invalid request.";
}
?>
<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up the email
  $to = 'rohitchandra.m@gmailcom';
  $subject = 'New message from ' . $name;
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>
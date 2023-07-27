<?php
session_start();


// Validate username, password, and other signup data

// Generate and store the OTP
$otp = generateOTP(); // Function to generate OTP
$_SESSION['otp'] = $otp;

// Send the OTP to the user via email
$to = 'user@example.com'; // Replace with the user's email address
$subject = 'OTP for Login/Signup';
$message = 'Your OTP is: ' . $otp;
$headers = 'From: your_email@example.com'; // Replace with your email address

if (mail($to, $subject, $message, $headers)) {
  echo "OTP has been sent to your registered email!";
} else {
  echo "Failed to send OTP via email.";
}


?>

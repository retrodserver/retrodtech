<?php
session_start();

$enteredOTP = $_POST['otp'];
$storedOTP = $_SESSION['otp'];
$otp="1234";
if ($otp == $enteredOTP) {
    echo 'OTP verification successful. Mobile number is verified!';
} else {
    echo 'Incorrect OTP. Please try again.';
}
?>
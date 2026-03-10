<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$enteredOTP = $_GET['otp'];
$storedOTP = $_SESSION['onetime'];

if ($storedOTP == $enteredOTP) {
   echo "1";
} else {
    echo "0";
}

?>
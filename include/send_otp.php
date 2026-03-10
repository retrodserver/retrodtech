<?php
session_start();
$servername  = "localhost";
$username = "vwqmwweafd";
$password = "Y2AQxDxzSP";
$dbname = "vwqmwweafd";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "conecrtion failed";
}

$phoneNumber = $_POST['phoneNumber'];
$sql = "SELECT * FROM register WHERE Phone ='$phoneNumber'";
$result=mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$res=true;
if($rows>1){
    $res=false;
}
else{


// Generate a random 6-digit OTP
$otp = rand(100000, 999999);

// Store OTP in the session
$_SESSION['otp'] = $otp;




}
echo "$res";
?>

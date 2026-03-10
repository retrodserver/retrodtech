<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../include/dbcon.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $PhoneNumber2 = $_POST['Phonenumber2'];
    $Location = $_POST['Location'];
    $WorkingHours = $_POST['WorkingHours'];
    // echo $Email;
    saveContacts($conn, $Email, $PhoneNumber, $PhoneNumber2, $Location, $WorkingHours);

    exit();
}
function saveContacts($conn, $Email, $PhoneNumber, $PhoneNumber2, $Location, $WorkingHours){
    // $stmt = $conn->prepare("INSERT INTO contacts (Email,Phonenumber) VALUES (?, ?)");
  $sqlq="INSERT INTO contacts (Email,Phonenumber,PhoneNumber2,Location,WorkingHours) VALUES ('$Email', '$PhoneNumber', '$PhoneNumber2', '$Location', '$WorkingHours')";
  $conn->query($sqlq);
}
?>
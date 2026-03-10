<?php

include_once 'config.php';

$name = $_POST['name'] ?? die('Empty field');
$email = $_POST['email'] ?? die('Empty field');
$mobile = $_POST['mobile'] ?? die('Empty field');
$hotel_name = $_POST['hotel_name'] ?? die('Empty field');
$no_rooms = $_POST['no_rooms'] ?? die('Empty field');
$address = $_POST['address'] ?? die('Empty field');

$query = "INSERT INTO `users` ( `name`, `email`, `mobile`, `hotel_name`, `no_of_rooms`, `address`) VALUES ( '$name', '$email', '$mobile', '$hotel_name', '$no_rooms', '$address')";



$to = "pravat.panda@retrodtech.com";
$subject = "$name signed up for $hotel_name";

$txt = "Hii Team, <br/> &emsp; Please check out the new signup form entry details.<br/>";
$txt .= "Name: <b>$name</b><br/>";
$txt .= "Email: <b>$email</b><br/>";
$txt .= "Mobile: <b>$mobile</b><br/>";
$txt .= "Hotel Name: <b>$hotel_name</b><br/>";
$txt .= "No of rooms: <b>$no_rooms</b><br/>";
$txt .= "Address: <b>$address</b><br/>";
$txt .= "Reagrds<br/>";
$txt .= "Thanking you";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to, $subject, $txt, $headers);

if(mysqli_query($conn, $query)){
    echo 1;
}else{
    echo 0;
}

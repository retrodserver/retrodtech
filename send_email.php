<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['uname']);
    $email = htmlspecialchars($_POST['umail']);
    $phone = htmlspecialchars($_POST['uphone']);
    $hotelname = htmlspecialchars($_POST['hotelname']);
    $inventory = htmlspecialchars($_POST['totalinventory']);

    $to = "mastertuhinrout@gmail.com"; // Replace with your email address
    $subject = "New Registration Form Submission";
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "
        <html>
        <body>
            <h2>New Registration Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Hotel Name:</strong> $hotelname</p>
            <p><strong>Total Inventory:</strong> $inventory</p>
        </body>
        </html>
    ";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

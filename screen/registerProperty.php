<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost";
$username = "vwqmwweafd";
$password = "Y2AQxDxzSP";
$dbname = "vwqmwweafd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
print_r($conn);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include '../smtp/PHPMailerAutoload.php';

$response = array('success' => false, 'message' => '');


// Check if email already exists in the database
$email = $_GET['mail'];
$checkIfExistsQuery = "SELECT COUNT(*) as count FROM registrations_table WHERE mail = '" . addslashes($email) . "'";
$checkResult = $conn->query($checkIfExistsQuery);

if ($checkResult) {
    $row = $checkResult->fetch_assoc();
    if ($row['count'] > 0) {
        $response['message'] = 'User with this email already exists.';
    } else {
        // Proceed with registration
        $sql = "INSERT INTO registrations_table (name, mail, phoneNumber, hotelname, totalinventory, plan, date_column) VALUES('"
            . addslashes($_GET['name']) . "', '"
            . addslashes($_GET['mail']) . "', '"
            . addslashes($_GET['phone']) . "', '"
            . addslashes($_GET['hotelname']) . "', '"
            . addslashes($_GET['totalinventory']) . "', '"
            . addslashes($_GET['plans']) . "',CURDATE())";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Registration Successful.';
        } else {
            $response['message'] = 'Registration Failed.';
        }
    }
} else {
    $response['message'] = 'Error checking email existence.';
}

echo json_encode($response);
?>

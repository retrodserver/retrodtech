<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>storeditem</title>
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the checkedValues data from the GET request
    $checkedValues = isset($_GET['checkedValues']) ? $_GET['checkedValues'] : [1];
    echo 'Received checked values: ' . json_encode($checkedValues);

    // Database connection parameters
    $servername = "localhost";
    $username = "vwqmwweafd";
    $password = "Y2AQxDxzSP";
    $dbname = "vwqmwweafd";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $dqsl="DELETE FROM featureitems";
    $result = $conn->query($dqsl);


    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO featureitems (features) VALUES (?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the parameter to the prepared statement
    $stmt->bind_param("s", $featureValue);

    // Loop through checkedValues and insert into the database
    foreach ($checkedValues as $index => $value) {
        $featureValue = $value;

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $conn->close();

} else {
    // If the request method is not GET, send an error response
    http_response_code(405); // Method Not Allowed
    echo 'Invalid request method.';
}
?>

</body>
</html>

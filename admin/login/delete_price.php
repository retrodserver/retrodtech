<?php

// Include your database connection file
include '../include/dbcon.php';

// Check if planeId is provided
if (isset($_GET['id'])) {
    $planeId = $_GET['id'];


    // Prepare and execute the delete query
    $deleteQuery = "DELETE FROM prices WHERE id = '$planeId'";
    $result = mysqli_query($conn, $deleteQuery);

    if ($result) {
        // Return a success message
        echo json_encode(['success' => true, 'message' => 'Plan deleted successfully']);
	header('Location: dyamicpricing.php');
    } else {
        // Return an error message
        echo json_encode(['success' => false, 'message' => 'Failed to delete plan']);
    }
} else {
    // Return an error message if planeId is not provided
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}

// Close the database connection
mysqli_close($conn);

?>

<?php

session_start();
include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle deletion of the selected blog post
    $id = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM gallery WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Successful deletion
        mysqli_stmt_close($stmt);
        header("Location: addevent.php");
    } else {
        // Failed to delete
        mysqli_stmt_close($stmt);
        echo "Failed to delete";
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>


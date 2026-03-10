<?php
session_start();
include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle deletion of the selected blog post
    $job_id = $_GET['id'];
    $sql = "UPDATE jobcareer set status=0 WHERE id='$job_id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
        header("Location: addcareer.php");
    } else {
        echo "Failed to delete";
    }
}
?>

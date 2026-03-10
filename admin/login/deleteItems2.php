<?php
session_start();
include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle deletion of the selected blog post
    $id = $_GET['id'];
    $sql = "DELETE FROM featureitems2 WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
        header("Location: addfeatures.php");
    } else {
        echo "Failed to delete";
    }
}
<?php
// callback.php
$input = file_get_contents("php://input");
$logFile = "callback_log.txt";  // For logging purposes, in production this should be stored securely.

// Decode and parse the JSON data received from PhonePe
$data = json_decode($input, true);

if (json_last_error() === JSON_ERROR_NONE) {
    // Log the callback data for debugging purposes
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - Received Callback: " . $input . "\n", FILE_APPEND);

    // Extract relevant data from the callback
    $transactionId = $data['transactionId'] ?? '';
    $status = $data['status'] ?? '';
    $amount = $data['amount'] ?? 0;

    // Process the data, e.g., update the payment status in your database
    if ($transactionId && $status) {
        // Example: Update payment status in database
        // $db->updatePaymentStatus($transactionId, $status);

        // Return a response to acknowledge receipt of the callback
        http_response_code(200);
        echo json_encode(["status" => "ACK"]);
    } else {
        // Missing data in the callback
        http_response_code(400);
        echo json_encode(["error" => "Invalid data received"]);
    }
} else {
    // If JSON decoding failed
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON"]);
}
?>

<?php
session_start();

$number = isset($_GET['phoneNumber']) ? $_GET['phoneNumber'] : null;
if (empty($number)) {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid phone number'));
    exit();
}


$otp = rand(100000, 999999);

$_SESSION['onetime'] = $otp;


// $fields = array(
//     "variables_values" => $otp,
//     "route" => "otp",
//     "numbers" => $number,
// );



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=ZritjdqYkmBu4pOHqaDwqCgQKftGg5Y8dcwov7BWsefCcdzzRCpaif8oCRAM&variables_values=$otp&route=otp&numbers=".urlencode($number),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
 echo $response;
curl_close($curl);


// Rest of your code...


// Check for cURL errors and HTTP response code
if ($err) {
    echo json_encode(array('status' => 'error', 'message' => $err));
} else {
    // Output a success message to indicate that OTP has been sent
    echo json_encode(array('status' => 'success', 'message' => 'OTP sent successfully'));
}
?>

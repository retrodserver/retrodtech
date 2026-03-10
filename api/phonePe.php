<?php

$slug = $_POST['slug'];

function phonePePaymentGateway($mid, $salt, $indexId, $paymentId, $amount, $mobile = '', $email = '', $passId = '',$slug){
    $merchantTransactionId = $paymentId;

    $amount = $amount * 100;
    $surl = "https://$slug.retrod.in/payment-link/request.php?plid=$passId";
    $callbackUrl = "https://retrodtech.in/callback";
    $pay = [
        "merchantId" => $mid,
        "merchantTransactionId" => $merchantTransactionId,
        "merchantUserId" => $merchantTransactionId,
        "amount" => $amount,
        "redirectUrl" => $surl,
        "redirectMode" => "POST",
        "callbackUrl" => $callbackUrl,
        "mobileNumber" => $mobile,
        "paymentInstrument" => ["type" => "PAY_PAGE"]
    ];

    $phonepay_payload = json_encode($pay);
    $phonepay_base64_payload = base64_encode($phonepay_payload);
    $xVerify = $phonepay_base64_payload . "/pg/v1/pay" . $salt;
    $xVerify = hash('sha256', $xVerify) . "###$indexId";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(['request' => $phonepay_base64_payload]),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-VERIFY: {$xVerify}",
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return json_encode(["error" => $err]);
    } else {
        return json_decode($response, true);
    }
}


if (isset($_POST)) {

    $mid = 'M1YJCZJJDIHW';
    $salt = '866c6b99-ea40-48ef-ad8f-ee05fb2f76b1';
    $indexId = '2';

    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $slug = isset($_POST['slug']) ? $_POST['slug'] : '';
    $passId = isset($_POST['passId']) ? $_POST['passId'] : '';

    $paymentId = $slug.'-' . rand(10000, 99999);

    if (empty($paymentId) || empty($amount)) {
        echo json_encode(["error" => "Required parameters are missing."]);
        exit;
    }

    $response = phonePePaymentGateway($mid, $salt, $indexId, $paymentId, $amount, $mobile, $email, $passId, $slug);

    $url = $response['data']['instrumentResponse']['redirectInfo']['url'];
    header("location: $url");
}

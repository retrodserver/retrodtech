<?php
if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $slug = $_GET['slug'];
    $url = 'https://retrod.in/api/fetch.php?table=payment_link&conditions={"paymentId":"'.$pid.'"}';

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    

    if ($data) {
        $paymentArray = $data['data'][0];
        $amount = $paymentArray['amount'];
        $name = $paymentArray['name'];
        $phone = $paymentArray['phone'];
        $email = $paymentArray['email'];
        $reason = $paymentArray['reason'];
        $status = $paymentArray['status'];
    } else {
        echo "Failed to fetch data.";
    }
}else{
    die();
}

if($status == 1){

}else{

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script>
        function autoSubmitForm() {
            document.getElementById('autoSubmitForm').submit();
        }
        window.onload = autoSubmitForm;
    </script>
</head>

<body style="background: #e5eff1;display: flex;align-items: center;justify-content: center;height: 100vh;">

    <form id="autoSubmitForm" action="https://retrodtech.com/api/phonePe" method="post">
        <input type="hidden" id="amount" name="amount" value="<?= $amount ?>">
        <input type="hidden" id="mobile" name="mobile" value="<?= $phone ?>">
        <input type="hidden" id="email" name="email" value="<?= $email ?>">
        <input type="hidden" id="passId" name="passId" value="<?= $pid ?>">
        <input type="hidden" id="slug" name="slug" value="<?= $slug ?>">
    </form>

    <img style="width: 350px;" src="https://login.retrod.in/img/loading-gif.gif" alt="">

    <!-- https://retrodtech.com/api/payment?amount=2&mobile=1234567890&email=test@example.com -->


</body>

</html>
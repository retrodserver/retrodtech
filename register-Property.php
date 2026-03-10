<?php
include('admin/include/dbcon.php');


if (!isset($_POST['uname'])) {
    echo "<script>
            window.location.href = 'https://retrodtech.com';
        </script>";
    die();
}


// $responseHtml = '';
// $uname = htmlspecialchars($_POST['uname']);
// $umail = htmlspecialchars($_POST['umail']);
// $uphone = isset($_POST['uphone']) ? htmlspecialchars($_POST['uphone']) : null;
// $otp = isset($_POST['otp']) ? htmlspecialchars($_POST['otp']) : null;
// $hotelname = htmlspecialchars($_POST['hotelname']);
// $totalinventory = htmlspecialchars($_POST['totalinventory']);
// $plan = htmlspecialchars($_POST['plan']);

$responseHtml = '';
$uname = htmlspecialchars($_POST['uname']);
if (!preg_match('/^[a-zA-Z\s]+$/', $uname)) {
    die("Invalid name. Only alphabets and spaces are allowed.");
}
$umail = htmlspecialchars($_POST['umail']);
if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}
$uphone = isset($_POST['uphone']) ? htmlspecialchars($_POST['uphone']) : null;
if ($uphone !== null && !preg_match('/^\d{10}$/', $uphone)) {
    die("Invalid phone number. Only 10-digit numbers are allowed.");
}

$otp = isset($_POST['otp']) ? htmlspecialchars($_POST['otp']) : null;
if ($otp !== null && !ctype_digit($otp)) {
    die("Invalid OTP. Only numeric values are allowed.");
}

$hotelname = htmlspecialchars($_POST['hotelname']);
if (!preg_match('/^[a-zA-Z\s]+$/', $hotelname)) {
    die("Invalid hotel name. Only alphabets and spaces are allowed.");
}

$totalinventory = htmlspecialchars($_POST['totalinventory']);
if (!ctype_digit($totalinventory)) {
    die("Invalid total inventory. Only numeric values are allowed.");
}
// $plan = htmlspecialchars($_POST['plan']);
// if (empty($plan)) {
//     die("Plan cannot be empty.");
// }

$responseHtml = "Validation successful. Proceed with further processing.";



$sqlCheckEmail = "SELECT mail FROM registrations_table WHERE mail = ?";
$stmtCheckEmail = $conn->prepare($sqlCheckEmail);
$stmtCheckEmail->bind_param("s", $umail);
$stmtCheckEmail->execute();
$stmtCheckEmail->store_result();
$countExistMail = $stmtCheckEmail->num_rows;

$sqlCheckPhone = "SELECT phoneNumber FROM registrations_table WHERE phoneNumber = ?";
$stmtCheckPhone = $conn->prepare($sqlCheckPhone);
$stmtCheckPhone->bind_param("s", $uphone);
$stmtCheckPhone->execute();
$stmtCheckPhone->store_result();
$countExistPhone = $stmtCheckPhone->num_rows;

$sqlCheckHotelName = "SELECT hotelname FROM registrations_table WHERE hotelname = ?";
$stmtCheckHotelName = $conn->prepare($sqlCheckHotelName);
$stmtCheckHotelName->bind_param("s", $hotelname);
$stmtCheckHotelName->execute();
$stmtCheckHotelName->store_result();
$countExistHotelName = $stmtCheckHotelName->num_rows;
$responseHtml = "";

if ($countExistMail > 0) {
    $responseHtml = '
        <section class="register-section">
            <div class="overlay" id="successPopup">
       
           <div class="popup">
               <div class="checkmark"><i class="fa-solid fa-circle-exclamation"></i></div>
                <div class="message">Email Already Exist!</div>
               <a href="https://retrodtech.com/register" class="close-btn" >Try Again !</a>
           </div>
        </div>
        </section>';
} elseif ($countExistPhone > 0) {
    $responseHtml = '
    <section class="register-section">
        <div class="overlay" id="successPopup">
   
       <div class="popup">
           <div class="checkmark"><i class="fa-solid fa-circle-exclamation"></i></div>
            <div class="message">Phone No Already Exist!</div>
           <a href="https://retrodtech.com/register" class="close-btn" >Try Again !</a>
       </div>
    </div>
    </section>';
} elseif ($countExistHotelName > 0) {
    $responseHtml = '
        <section class="register-section">
            <div class="overlay" id="successPopup">
       
           <div class="popup">
               <div class="checkmark"><i class="fa-solid fa-circle-exclamation"></i></div>
                <div class="message">Hotel Name Already Exist!</div>
               <a href="https://retrodtech.com/register" class="close-btn" >Try Again !</a>
           </div>
        </div>
        </section>';
} else {
    $sqlInsert = "INSERT INTO registrations_table (name, mail, phoneNumber, hotelname, totalinventory, plan) VALUES (?, ?, ?, ?, ?, ?)";
    $stmtInsert = $conn->prepare($sqlInsert);
    $stmtInsert->bind_param("ssssss", $uname, $umail, $uphone, $hotelname, $totalinventory, $plan);

    $html = "
        <table border='1'>
            <tr><td>Name</td><td>$uname</td></tr>
            <tr><td>Mail</td><td>$umail</td></tr>
            <tr><td>Phone</td><td>$uphone</td></tr>
            <tr><td>Hotel Name</td><td>$hotelname</td></tr>
            <tr><td>Inventory</td><td>$totalinventory</td></tr>
            
        </table>
        
    ";



    $url = "https://retrod.in/api/mail.php";

    $mailHeader = 'Guest Query';
    $subject = 'New Registration (From Web Site)';

    $cc = 'pravat.panda@retrodtech.com';

    // $bcc = 'support@retrodtech.com';
    $email = 'support@retrodtech.com';

    $data = array(
        "mailer" => $mailHeader,
        "to" => $email,
        "toName" => 'Team',
        "cc" => $cc,
        "bcc" => '',
        "subject" => $subject,
        "body" => $html,
        "invoice_html" => '',
        "fileName" => ''
    );

    $jsonData = json_encode($data);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($ch);

    if ($response === false) {
        // echo 'cURL Error: ' . curl_error($ch);
    } else {
        // echo 'Response: ' . $response;
    }

    curl_close($ch);
}

?>


<!doctype html>

<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description"
        content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod.">
    <meta name="keywords"
        content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms">
    <meta name="author" content="Retrod">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <title>
        Thank you for reaching out! We’ll connect with you shortly.</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">


    <style>
        .register-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
            margin: 30px;


        }

        .register-form h5 {
            font-family: 'Playfair Display', serif;
            letter-spacing: 4px;
            color: black;
            text-shadow: 3px 5px 7px white;
            font-weight: 900;
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box span.details {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        .input-box input,
        .input-box select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            font-weight: 600;
            color: black;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .input-box select {
            height: 45px;
        }

        .slide-subtitle:before,
        .about-small-stitle:before {
            content: "";
            height: 8px;
            width: 8px;
            background: #ff2391;
            top: 0;
            position: absolute;
            bottom: 0;
            margin: auto;
            left: 0;
            border-radius: 2px;
        }

        .footerbtn {
            text-align: center;
        }

        .footerbtn input {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 900;
            color: #ffffff;
            background: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-shadow: none;
        }

        .footerbtn input:hover {
            background: #444;
        }

        @media screen and (max-width:800px) {
            .card {
                margin-top: 80px !important;
            }

            .about-box {
                margin-top: 80px !important;
            }
        }

        .register-section {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }


        .overlay {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            justify-content: center;
            align-items: center;
        }


        .popup {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            text-align: center;
            padding: 20px;
        }


        .checkmark {
            font-size: 48px;
            color: #b81265;
            margin-bottom: 10px;
        }


        .message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }


        .close-btn {
            display: inline-block;
            background-color: #b81265;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .close-btn:hover {
            color: #000;
        }


        @media (max-width: 768px) {
            .popup {
                padding: 15px;
            }

            .checkmark {
                font-size: 36px;
            }

            .message {
                font-size: 16px;
            }

            .close-btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }


        /*thanku message wish start */
        .thank-you-container body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .thank-you-container {
            text-align: center;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 30px;
            /* width: 90%; */
            animation: fadeIn 1s ease;
            margin: 62px auto;
            width: fit-content;
        }

        .thank-you-container i {
            color: #4caf50;
            font-size: 50px;
            margin-bottom: 20px;
        }

        .thank-you-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .thank-you-container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .thank-you-container a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white !important;
            background: #b81265 !important;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .thank-you-container a:hover {
            background-color: #000;
            transition: 0.5s ease-in-out;
            color: #fff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .thankuMainDv {
            padding-top: 127px;
        }

        @media (max-width: 768px) {
            .thankuMainDv {
                padding-top: 100px;
                /* Adjust padding for tablets and small screens */
            }
        }

        @media (max-width: 576px) {
            .thankuMainDv {
                padding-top: 80px;
                /* Adjust padding for mobile screens */
            }
        }

        @media (max-width: 400px) {
            .thankuMainDv {
                padding-top: 37px;
                /* Adjust padding for very small screens */
            }
        }

        .contact-info a {
            background-color: #ffffff !important;
            color: #000 !important;
        }

        .thankuMainDv .phoneIcon {
            font-size: 18px;
            color: #b31162 !important;
        }

        /*thanku message wish start*/
    </style>
</head>
<?php include('screen/header.php') ?>



<body
    class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-dark-grayscale">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 0.49803921568627" />

                    <feFuncG type="table" tableValues="0 0.49803921568627" />

                    <feFuncB type="table" tableValues="0 0.49803921568627" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-grayscale">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 1" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0 1" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-purple-yellow">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-blue-red">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 1" />

                    <feFuncG type="table" tableValues="0 0.27843137254902" />

                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-midnight">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 0" />

                    <feFuncG type="table" tableValues="0 0.64705882352941" />

                    <feFuncB type="table" tableValues="0 1" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-magenta-yellow">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.78039215686275 1" />

                    <feFuncG type="table" tableValues="0 0.94901960784314" />

                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-purple-green">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-blue-orange">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.098039215686275 1" />

                    <feFuncG type="table" tableValues="0 0.66274509803922" />

                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg>

    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>



        <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">

            <?php include('screen/nav.php') ?>
        </div>

        <?php echo  $responseHtml; ?>
        <div class="thankuMainDv">
            <div class="thank-you-container py-5">
                <i class="fas fa-check-circle"></i>
                <h1>Thank You!</h1>
                <div class="contact-info">
                    <p><i class="fas fa-phone phoneIcon"></i><a href="tel:+917815039065 / +918118031833 ">+917815039065
                            | +918118031833</a></p>
                    <p><i class="fas fa-envelope phoneIcon"></i> <a
                            href="mailto:support@retrodtech.com">support@retrodtech.com</a></p>
                </div>
                <p>Thank you for reaching out! We’ll connect with you shortly.</p>

                <a href="https://retrodtech.com/">Go Back to Home</a>
            </div>
        </div>
        <?php include('screen/footer.php') ?>

    </div>


    <script type='text/javascript'>
        const lazyloadRunObserver = () => {

            const dataAttribute = 'data-e-bg-lazyload';

            const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);

            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        let lazyloadBackground = entry.target;

                        const lazyloadSelector = lazyloadBackground.getAttribute(dataAttribute);

                        if (lazyloadSelector) {

                            lazyloadBackground = entry.target.querySelector(lazyloadSelector);

                        }

                        if (lazyloadBackground) {

                            lazyloadBackground.classList.add('lazyloaded');

                        }

                        lazyloadBackgroundObserver.unobserve(entry.target);

                    }

                });

            }, {

                rootMargin: '100px 0px 100px 0px'

            });

            lazyloadBackgrounds.forEach((lazyloadBackground) => {

                lazyloadBackgroundObserver.observe(lazyloadBackground);

            });

        };

        const events = [

            'DOMContentLoaded',

            'elementor/lazyload/observe',

        ];

        events.forEach((event) => {

            document.addEventListener(event, lazyloadRunObserver);

        });
    </script>




    <link rel='stylesheet' id='elementor-post-611-css'
        href='wp-content/uploads/elementor/css/post-6110fdd.css?ver=1687803773' media='all' />



    <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'>

    </script>



    <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'></script>



    <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>

    <script>
        AOS.init();
    </script>


    <script>
        var questions = document.getElementsByClassName('question');


        for (var i = 0; i < questions.length; i++) {
            questions[i].addEventListener('click', function() {

                var answerCont = this.nextElementSibling;


                answerCont.style.maxHeight = answerCont.style.maxHeight === '20vh' ? '0' : '20vh';
            });
        }
    </script>

    <script>
        function showPopup() {
            document.getElementById('successPopup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('successPopup').style.display = 'none';
        }
        window.onload = function() {
            setTimeout(showPopup, 1000);
        };
    </script>

</body>

</html>
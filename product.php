<?php
include('admin/include/dbcon.php');

$sql = "SELECT * FROM product where status=1";

$result = mysqli_query($conn, $sql);
$productData = array();
while ($row = mysqli_fetch_array($result)) {
    $productData[] = $row;
}

$id = $_GET['id'] ?? '';

if ($id === 'web-master') {
    $title = "Budget Website for Hoteliers across the globe by Retrod";
    $description = "Budget hotel website builder for hoteliers to create powerful websites and increase direct bookings.";
} else if ($id == 'booking-engine') {
    $title = "Boosts your hotel revenue with our Booking Engine";
    $description = "Hotel booking engine that increases direct bookings and boosts hotel revenue.";
} else if ($id == 'pms') {
    $title = "World's #1  Hotel Management System by Retrod";
    $description = "Cloud based hotel property management system to manage reservations, rooms, billing and operations.";
}else{
    $title = "Best Hotel Software By Retrod";
    $description = "Advanced hotel technology solutions by Retrod.";
}

?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />


    <!-- keywords -->
    <meta name="description"
        content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod,Retrod Technologies offers cutting-edge IT solutions, software development, cloud computing, and digital transformation services. Partner with us to grow your business.">
    <meta name="keywords"
        content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms,IT solutions, software development, cloud computing, digital transformation, IT consulting, Cloud-based PMS,Contactless Check-in,Smart Hospitality Solutions,Hotel Business Intelligence,Cloud Hospitality Solutions,Hotel Digital Campaigns,Hotel Mobile Check-in,Hotel Data Analytics,Online Travel Technology,Automated Hotel Systems,Intelligent Hotel Operations,Guest Communication Tools,Travel Agency Solutions,Vacation Rental Management,Hospitality Cloud Solutions,Mobile-Friendly Hotel Solutions,Hotel Wi-Fi Management,Travel Tech Innovations,Hotel Booking Optimization,Secure Payment Gateways,Global Distribution System (GDS),OTA Integration Software,Hotel API Integration,Hotel Staff Management,Travel Portal Development,Property Management Software,Inventory Management,Guest Check-in and Check-out,Room Booking System,Hotel Reservation System,">

    <title><?php echo $title;?></title>
        <meta name="author" content="Retrod">
    <link rel="canonical" href="https://retrodtech.com/product?id=<?php echo $id; ?>">
    <meta name="robots" content="index, follow">

    <meta property="og:site_name" content="Retrod Technologies">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:url" content="https://retrodtech.com/product?id=<?php echo $_GET['id'];?>">
    <meta property="og:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">

    <link rel="icon" href="https://retrodtech.com/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <?php include('screen/header.php') ?>
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "SoftwareApplication",
 "name": "<?php echo $title;?>",
 "applicationCategory": "BusinessApplication",
 "operatingSystem": "Web",
 "url": "https://retrodtech.com/product?id=<?php echo $_GET['id'];?>",
 "description": "<?php echo $description; ?>",
 "publisher": {
   "@type": "Organization",
   "name": "Retrod Technologies"
 }
}
</script>
    <style>
    .site {
        overflow-x: visible !important;
    }

    .webfaq_head {
        text-align: center !important;
    }

    .pms_card {
        height: 87% !important;
    }

    .tronix-section-title-content {
        text-align: center;
        padding-top: 92px;
    }

    section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        margin-top: 50px;
    }

    .elementor-element.elementor-element-edb7316.elementor-widget.elementor-widget-tronix_accordion {
        padding-top: 78px;
        padding-bottom: 98px;

    }


    .private_cpn {

        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;

        padding: 21px 13px;

        border: 1px solid #ff239121;

        border-radius: 13px;

        text-align: center;

        width: 100%;

    }

    .offer_dtls {
        text-align: center;
        padding-top: 25px;
    }


    .public_cpn {

        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;

        padding: 21px 13px;

        border: 1px solid #ff239121;

        border-radius: 13px;

        text-align: center;

    }



    section.about_pms {

        padding-top: 100px;

    }







    ..pms_card * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

    }



    .pms_card body {

        background: #e8e8e8;

        min-height: 100dvh;

        width: 100%;

        display: flex;

        justify-content: center;

        align-items: center;



    }

    iframe {
        border: 1px solid black;
        border-radius: 12px;
        box-shadow: 1px 2px 2px 1px;
    }



    .elementor-element.elementor-element-edb7316.elementor-widget.elementor-widget-tronix_accordion {

        padding-top: 0px;

        padding-bottom: 98px;

    }



    .pms_card .card {

        width: 365px;

        height: 357px;

        background: $blue;

        position: relative;

        display: grid;

        place-content: center;

        border-radius: 18px;

        overflow: hidden;

        transition: all 0.5s ease-in-out;

        padding: 39px 33px;

        margin-bottom: 6px;

    }



    .pms_card #logo-main,

    #logo-second {

        height: 100%;

    }



    .pms_card #logo-main {

        fill: $gold;

    }



    .pms_card #logo-second {

        padding-bottom: 10px;

        fill: none;

        stroke: $gold;

        stroke-width: 1px;

    }



    .pms_card .border {

        position: absolute;

        inset: 0px;

        border: 2px solid $gold;

        opacity: 0;

        transform: rotate(10deg);

        transition: all 0.5s ease-in-out;



    }



    .pms_card .bottom-text {

        position: absolute;

        left: 50%;

        bottom: 2px;

        transform: translateX(-50%);

        font-size: 6px;

        text-transform: uppercase;

        padding: 0px 5px;

        color: $gold;

        background: $blue;

        opacity: 0;

        letter-spacing: 7px;

        transition: all 0.5s ease-in-out;

        font-size: 12px;

        background-color: #ff2391;

        color: #fff;

        border-radius: 11px 2px;

    }



    @media screen and (max-width: 600px) {

        .pms_card .bottom-text {

            position: absolute;

            left: 50%;

            bottom: 2px;

            transform: translateX(-50%);

            font-size: 6px;

            text-transform: uppercase;

            padding: 0px 5px;

            color: $gold;

            background: $blue;

            opacity: 0;

            letter-spacing: 7px;

            transition: all 0.5s ease-in-out;

            font-size: 12px;

            background-color: #ff2391;

            color: #fff;

            border-radius: 11px 2px;

            width: 100%;

            height: auto;

        }

    }



    .pms_card .content {

        transition: all 0.5s ease-in-out;



        .logo {

            height: 35px;

            position: relative;

            width: 33px;

            overflow: hidden;



            transition: all 1s ease-in-out;





            .logo1 {

                height: 33px;

                position: absolute;

                left: 0;

            }



            .logo2 {

                height: 33px;

                position: absolute;

                left: 33px;

            }



            .trail {

                position: absolute;

                right: 0;

                height: 100%;

                width: 100%;

                opacity: 0;

            }

        }



        .logo-bottom-text {

            position: absolute;

            left: 50%;

            top: 50%;

            transform: translate(-50%, -50%);

            margin-top: 30px;

            color: $gold;

            padding-left: 8px;

            font-size: 11px;

            opacity: 0;

            letter-spacing: none;

            transition: all 0.5s ease-in-out 0.5s;

        }



    }



    .pms_card .card {

        &:hover {

            border-radius: 0;

            transform: scale(1.1);



            .logo {

                width: 134px;

                animation: opacity 1s ease-in-out;

            }



            .border {

                inset: 15px;

                opacity: 1;

                transform: rotate(0);

            }



            .bottom-text {



                letter-spacing: 3px;

                opacity: 1;

                transform: translateX(-50%);

            }



            .content {

                .logo-bottom-text {

                    opacity: 1;

                    letter-spacing: 9.5px;

                }

            }



            .trail {

                animation: trail 1s ease-in-out;

            }

        }

    }



    @keyframes opacity {

        0% {

            border-right: 1px solid transparent;

        }



        10% {

            border-right: 1px solid $gold;

        }



        80% {

            border-right: 1px solid $gold;

        }



        100% {

            border-right: 1px solid transparent;

        }

    }



    @keyframes trail {

        0% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 90%, rgba(189, 159, 103, 1) 100%);

            opacity: 0;

        }



        30% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 70%, rgba(189, 159, 103, 1) 100%);

            opacity: 1;

        }



        70% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 70%, rgba(189, 159, 103, 1) 100%);

            opacity: 1;

        }



        95% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 90%, rgba(189, 159, 103, 1) 100%);

            opacity: 0;

        }

    }



    section.pms_varianten {

        padding-top: 79px;



    }



    .pms_varianten .varianten_header {

        text-align: center;

    }





    .whatsapp_btn {

        background: #0e59f2;

        border-radius: 999px;

        box-shadow: #5E5DF0 0 10px 20px -10px;

        box-sizing: border-box;

        color: #FFFFFF;

        cursor: pointer;

        font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;

        font-size: 16px;

        font-weight: 700;

        line-height: 24px;

        opacity: 1;

        outline: 0 solid transparent;

        padding: 8px 18px;

        user-select: none;

        -webkit-user-select: none;

        touch-action: manipulation;

        width: fit-content;

        word-break: break-word;

        border: 0;

    }



    span.whp_colour {

        color: #25D366;

    }



    section.Whatsapp_intigation {

        background-color: #e7e9feba;

        padding: 25px 25px;

    }



    section.house_keepig_section {

        padding-top: 100px;

    }



    p.important_txt {

        color: black;

        font-weight: 400;

    }



    span.colour_text {

        color: #ff2391;

    }



    h4.be_About {

        font-size: 23px;

        color: #474747;

    }



    h4.be_About {
        font-size: 19px;
        color: #000;
        padding-top: 35px;
    }


    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");



    .faq_section * {

        font-family: Lato, sans-serif;

        padding: 0;

        margin: 0;

        box-sizing: border-box;

    }



    .faq_section body {

        background-color: #F5F5F5;

        display: flex;

        justify-content: center;

        align-items: center;

        flex-direction: column;

        margin: 50px 0;

    }



    .faq_section .wrapper {

        width: 60%;

        margin: 0 auto;

    }



    .faq_section h1 {

        margin-bottom: 20px;

    }



    .faq_section .faqbox {

        background-color: white;

        color: black;

        border-radius: 20px;

        box-shadow: 0 5px 10px 0 rgb(0, 0, 0, 0.25);

        margin: 20px 0;

    }



    .faq_section .question {

        font-size: 1.2rem;

        font-weight: 600;

        padding: 20px 80px 20px 20px;

        position: relative;

        display: flex;

        align-items: center;

        cursor: pointer;

    }

    @media only screen and (max-width: 600px) {

        .faq_section .question {

            font-weight: 600;
            padding: 17px 33px 15px 9px;
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }



    }



    .faq_section .question::after {

        content: "\002B";

        font-size: 2.2rem;

        position: absolute;

        right: 20px;

        transition: 0.2s;

    }



    .faq_section .question.active::after {

        transform: rotate(45deg);

    }



    .faq_section .answercont {

        max-height: 0;

        overflow: hidden;

        transition: 0.3s;

    }



    .faq_section .answer {

        padding: 0 20px 20px;

        line-height: 1.5rem;

    }

    @media only screen and (max-width: 600px) {
        .faq_section .answer {

            padding: 0px 13px 13px;
            line-height: 1.5rem;
        }


    }



    .faq_section .question.active+.answercont {}



    @media screen and (max-width: 790px) {

        html {

            font-size: 14px;

        }



        .wrapper {

            width: 80%;

        }

    }


    @media (max-width:649px) {
        .faq_section .wrapper {
            width: 90%;
        }
    }

    .be_video {
        padding-top: 37px;
    }




    .tronix-section-title-content {

        text-align: center;

        padding-top: 92px;

    }



    section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {

        margin-top: 50px;

    }



    .elementor-element.elementor-element-edb7316.elementor-widget.elementor-widget-tronix_accordion {

        padding-top: 78px;

        padding-bottom: 98px;

    }





    section.about_pms {

        padding-top: 100px;

    }



    ..pms_card * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

    }



    .pms_card body {

        background: #e8e8e8;

        min-height: 100dvh;

        width: 100%;

        display: flex;

        justify-content: center;

        align-items: center;



    }



    .pms_card .card {

        width: auto;

        height: 100%;

        background: $blue;

        position: relative;

        display: grid;

        place-content: center;

        border-radius: 18px;

        overflow: hidden;

        transition: all 0.5s ease-in-out;

        padding: 39px 33px;

        margin-bottom: 44px;

    }



    .pms_card #logo-main,

    #logo-second {

        height: 100%;

    }



    .pms_card #logo-main {

        fill: $gold;

    }



    .pms_card #logo-second {

        padding-bottom: 10px;

        fill: none;

        stroke: $gold;

        stroke-width: 1px;

    }



    .pms_card .border {

        position: absolute;

        inset: 0px;

        border: 2px solid $gold;

        opacity: 0;

        transform: rotate(10deg);

        transition: all 0.5s ease-in-out;



    }



    .pms_card .bottom-text {

        position: absolute;

        left: 50%;

        bottom: 2px;

        transform: translateX(-50%);

        font-size: 6px;

        text-transform: uppercase;

        padding: 0px 5px;

        color: $gold;

        background: $blue;

        opacity: 0;

        letter-spacing: 7px;

        transition: all 0.5s ease-in-out;

        font-size: 12px;

        background-color: #ff2391;

        color: #fff;

        border-radius: 11px 2px;

    }



    .pms_card .content {

        transition: all 0.5s ease-in-out;



        .logo {

            height: 35px;

            position: relative;

            width: 33px;

            overflow: hidden;



            transition: all 1s ease-in-out;





            .logo1 {

                height: 33px;

                position: absolute;

                left: 0;

            }



            .logo2 {

                height: 33px;

                position: absolute;

                left: 33px;

            }



            .trail {

                position: absolute;

                right: 0;

                height: 100%;

                width: 100%;

                opacity: 0;

            }

        }



        .logo-bottom-text {

            position: absolute;

            left: 50%;

            top: 50%;

            transform: translate(-50%, -50%);

            margin-top: 30px;

            color: $gold;

            padding-left: 8px;

            font-size: 11px;

            opacity: 0;

            letter-spacing: none;

            transition: all 0.5s ease-in-out 0.5s;

        }



    }



    .pms_card .card {

        &:hover {

            border-radius: 0;

            transform: scale(1.1);



            .logo {

                width: 134px;

                animation: opacity 1s ease-in-out;

            }



            .border {

                inset: 15px;

                opacity: 1;

                transform: rotate(0);

            }



            .bottom-text {



                letter-spacing: 3px;

                opacity: 1;

                transform: translateX(-50%);

            }



            .content {

                .logo-bottom-text {

                    opacity: 1;

                    letter-spacing: 9.5px;

                }

            }



            .trail {

                animation: trail 1s ease-in-out;

            }

        }

    }



    @keyframes opacity {

        0% {

            border-right: 1px solid transparent;

        }



        10% {

            border-right: 1px solid $gold;

        }



        80% {

            border-right: 1px solid $gold;

        }



        100% {

            border-right: 1px solid transparent;

        }

    }



    @keyframes trail {

        0% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 90%, rgba(189, 159, 103, 1) 100%);

            opacity: 0;

        }



        30% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 70%, rgba(189, 159, 103, 1) 100%);

            opacity: 1;

        }



        70% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 70%, rgba(189, 159, 103, 1) 100%);

            opacity: 1;

        }



        95% {

            background: linear-gradient(90deg, rgba(189, 159, 103, 0) 90%, rgba(189, 159, 103, 1) 100%);

            opacity: 0;

        }

    }



    section.pms_varianten {

        padding-top: 79px;



    }



    .pms_varianten .varianten_header {

        text-align: center;

    }





    .whatsapp_btn {

        background: #0e59f2;

        border-radius: 999px;

        box-shadow: #5E5DF0 0 10px 20px -10px;

        box-sizing: border-box;

        color: #FFFFFF;

        cursor: pointer;

        font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;

        font-size: 16px;

        font-weight: 700;

        line-height: 24px;

        opacity: 1;

        outline: 0 solid transparent;

        padding: 8px 18px;

        user-select: none;

        -webkit-user-select: none;

        touch-action: manipulation;

        width: fit-content;

        word-break: break-word;

        border: 0;

    }



    span.whp_colour {

        color: #25D366;

    }



    section.Whatsapp_intigation {

        background-color: #e7e9feba;

        padding: 25px 25px;

    }



    section.house_keepig_section {

        padding-top: 100px;

    }



    p.important_txt {

        color: black;

        font-weight: 400;

    }



    section.web_master_section {

        padding-top: 70px;

    }



    p {

        font-size: 18px;

        line-height: 26px;

    }



    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");



    .faq_section * {

        font-family: Lato, sans-serif;

        padding: 0;

        margin: 0;

        box-sizing: border-box;

    }



    .faq_section body {

        background-color: #F5F5F5;

        display: flex;

        justify-content: center;

        align-items: center;

        flex-direction: column;

        margin: 50px 0;

    }



    .faq_section .wrapper {

        width: 60%;

        margin: 0 auto;

    }



    .faq_section h1 {

        margin-bottom: 20px;

    }



    .faq_section .faqbox {

        background-color: white;

        color: black;

        border-radius: 20px;

        box-shadow: 0 5px 10px 0 rgb(0, 0, 0, 0.25);

        margin: 20px 0;

    }



    .faq_section .question {

        font-size: 1.2rem;

        font-weight: 600;

        padding: 20px 80px 20px 20px;

        position: relative;

        display: flex;

        align-items: center;

        cursor: pointer;

    }



    .faq_section .question::after {

        content: "\002B";

        font-size: 2.2rem;

        position: absolute;

        right: 20px;

        transition: 0.2s;

    }



    .faq_section .question.active::after {

        transform: rotate(45deg);

    }



    .faq_section .answercont {

        max-height: 0;

        overflow: hidden;

        transition: 0.3s;

    }



    .faq_section .answer {

        padding: 0 20px 20px;

        line-height: 1.5rem;

    }


    @media (max-width:649px) {
        .faq_section .wrapper {
            width: 90%;
        }
    }

    .faq_section .question.active+.answercont {}



    @media screen and (max-width: 790px) {

        html {

            font-size: 14px;

        }



        .wrapper {

            width: 80%;

        }

    }



    .tronix-section-title-content {

        text-align: center;

        padding-top: 0px;

    }



    section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {

        margin-top: 50px;

    }



    .service-box-four {

        display: flex;

        margin-bottom: 40px;

        padding-bottom: 43px;

    }



    .whatsapp_btn {

        background: #B81265;

        border-radius: 999px;

        box-shadow: #B81265 0 10px 20px -10px;

        box-sizing: border-box;

        color: #FFFFFF;

        cursor: pointer;

        font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;

        font-size: 16px;

        font-weight: 700;

        line-height: 24px;

        opacity: 1;

        outline: 0 solid transparent;

        padding: 8px 18px;

        user-select: none;

        -webkit-user-select: none;

        touch-action: manipulation;

        width: fit-content;

        word-break: break-word;

        border: 0;

    }



    .dtils_btn a .whatsapp_btn:hover {

        background-colour: red;

    }



    h5.service-four-title {
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .productcontainer {
        background-image: url('img/product-bg.png');
        background-size: cover;

    }

    .be_header .col-md-6 {
        display: flex;
        align-items: center;
    }

    .web_master_section .container .row .col-sm-6 {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .breadcroumn-contnt {
        bottom: 20px !important;
    }

    h2 {
        line-height: 53px !important;
        font-size: 45px;

    }

    @media screen and (max-width: 480px) {
        h2 {
            line-height: 33px !important;
            font-size: 34px;
        }
    }

    .service-four-number {
        color: #00000078 !important;
    }

    .container .row .col-md-5 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        float: right;
    }

    .rowh {
        margin: 42px auto;
        display: flex;
        justify-content: center;
    }

    .buttonh {
        border: none;
        padding: 10px;
        background: linear-gradient(45deg, #ff1f7e, #000000d1);
        color: white;
        border-radius: 14px;
    }

    .buttonh a {
        color: white;
        font-weight: bold;
        text-decoration: none;
    }

    .buttonh a:hover {
        text-decoration: none;

    }

    .buttonh:hover {
        transform: scale(1.1);
    }

    .container h2 {
        text-align: center;

    }

    .col-md-5 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .pms_video {
        width: 100%;
    }

    .services-four-des {
        font-family: var(--body-font);
        font-size: 14px;
        font-weight: 700;
    }

    .header_nav {
        padding: 8px 13px;
    }
    </style>
</head>

<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

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

        <div class="breadcroumb-area">

            <div class="container">

                <div class="breadcroumn-contnt">



                    <h2 class="page-title">
                        <?php
                        if ($_GET['id'] != '') {
                            if ($_GET['id'] == 'web-master') {
                                echo 'Web Master';
                            } else if ($_GET['id'] == 'booking-engine') {
                                echo 'Booking Engine';
                            } else if ($_GET['id'] == 'pms') {
                                echo 'Property Management System';
                            } else if ($_GET['id'] == 'google_hotel_center') {
                                echo 'Google Hotel Center';
                        ?>
                        <script>
                        $('h2').removeClass('page-title');
                        </script>

                        <?php
                            }
                        } else {
                            echo 'Suites Of Products';
                        }

                        ?>

                    </h2>







                </div>

            </div>

        </div>

    </div><!-- #page -->

    <?php

    if (isset($_GET['id']) && $_GET['id'] != '') {
        $slugid = $_GET['id'];
        $sql = "SELECT * FROM product WHERE slug ='$slugid'";
        $result = mysqli_query($conn, $sql);
        $numOfRows = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        echo $row['fullDesc'];
    } else {
    ?>


    <section
        class="productcontainer elementor-section elementor-top-section elementor-element elementor-element-bdbcda1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="bdbcda1" data-element_type="section" id="feature">

        <div class="elementor-container elementor-column-gap-no">

            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a8bff0d"
                data-id="a8bff0d" data-element_type="column">

                <div class="elementor-widget-wrap elementor-element-populated">

                    <div class="elementor-element elementor-element-6947aeb elementor-widget elementor-widget-tronix_title"
                        data-id="6947aeb" data-element_type="widget" data-widget_type="tronix_title.default">

                        <div class="elementor-widget-container">

                            <div class="tronix-section-title-wrapper">

                                <div class="container">

                                    <div class="tronix-section-title-content">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="elementor-element elementor-element-b7d9d21 elementor-widget elementor-widget-tronix_services_four"
                        data-id="b7d9d21" data-element_type="widget" data-widget_type="tronix_services_four.default">

                        <div class="elementor-widget-container">

                            <div class="service-four-section-wrapper">

                                <div class="container">

                                    <div class="row">
                                        <?php
                                            $sn = 0;
                                            foreach ($productData as $val) {
                                                $sn++;
                                                $title = $val['title'];
                                                $shortDesc = $val['shortDesc'];
                                                $icon = $val['icon'];
                                                $slug = $val['slug'];

                                                $url = $sitePath . 'product.php?id=' . $slug;

                                                echo '
                                                    <div class="col-md-4 col-sm-6 col-xs-12">

                                                        <div class="service-box-four ">
            
                                                            <div class="service-four-number">0' . $sn . '</div>
            
                                                            <span></span>
            
                                                            <div class="service-four-content">
            
                                                                <h5 class="service-four-title" style="text-align: center;">
            
                                                                    <a href="' . $url . '" target="_blank" rel="nofollow">
            
                                                                        ' . $title . '
            
                                                                    </a>
            
                                                                </h5>
            
                                                                <div class="services-four-des">' . $shortDesc . ' </div>
            
                                                                <div class="service-four-icon ">
            
                                                                    <img src="' . $sitePath . '/img/' . $icon . '" alt="retrod webmaster img">
            
                                                                </div>
            
                                                                <div class="dtils_btn">
            
                                                                    <a class="whatsapp_btn" href="' . $url . '">Explore More</a>
            
                                                                </div>
            
                                                            </div>
            
            
            
            
            
                                                        </div>
            
                                                    </div>
                                                ';
                                            }

                                            ?>



                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </section>
    <?php


    }

    ?>






    <?php include('screen/footer.php') ?>

    <!--comments section-->

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



    <!--footer section-->

    <link rel='stylesheet' id='elementor-post-611-css'
        href='wp-content/uploads/elementor/css/post-6110fdd.css?ver=1687803773' media='all' />

    <!--counter Section-->

    <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'>

    </script>

    <!--flex comments  & customer-->

    <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'></script>

    <!--navbar scroll-->

    <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>

    <script>
    var questions = document.getElementsByClassName('question');


    for (var i = 0; i < questions.length; i++) {
        questions[i].addEventListener('click', function() {

            var answerCont = this.nextElementSibling;


            answerCont.style.maxHeight = answerCont.style.maxHeight === '20vh' ? '0' : '20vh';
        });
    }
    </script>

</body>





</html>
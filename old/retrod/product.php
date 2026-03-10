<?php

 $productList = [
    [
        'img'=>'booking.png',
        'alt'=>'retrod booking master icon',
        'title'=>'Booking Master',
        'dec'=>'Power Packed with high end seamless <b>Commission Free Bookings</b> from the hotel website.',
        'url'=>'booking-master.php',
    ],
    [
        'img'=>'web.png',
        'alt'=>'retrod web master icon',
        'title'=>'Web Master',
        'dec'=>'An extreme digital platform / brand.com of your hotels and properties having enormous features with direct booking module.',
        'url'=>'signup.php',
    ],
    [
        'img'=>'rate.png',
        'alt'=>'retrod hotel master icon',
        'title'=>'Hotel Master',
        'dec'=>'Coming Soon',
        'url'=>'signup.php',
    ],
    [
        'img'=>'marketing.png',
        'alt'=>'retrod marketing engine icon',
        'title'=>'Marketing Engine',
        'dec'=>"Retrod's newly launched Revenue and Marketing Management Services help hoteliers strengthen their online visibility.",
        'url'=>'signup.php',
    ],
    [
        'img'=>'analysis.png',
        'alt'=>'retrod resto master icon',
        'title'=>'Resto - Master ',
        'dec'=>'A point-of-sale system ideal for restaurants, bars, night clubs, fast food restaurants, and many more.',
        'url'=>'signup.php',
    ],
    [
        'img'=>'rate-shopper.png',
        'alt'=>'retrod rate shopper icon',
        'title'=>'Rate Shopper',
        'dec'=>'Keeping an eye of Rates and Inventory on all Commission taking Bookings provider / OTAs also any of your competitors.',
        'url'=>'signup.php',
    ],
 ];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Retrod Product And Services">
  <meta name="keywords" content="retrod, retrod tech, retrodtech">
  <meta name="author" content="Retrod">
    <title>Products || Retrodtech.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section id="navBar">
        <?php include('screen/navbar.php') ?>
    </section>

    <section id="headerPage">
        <h4>Automizing A to Z of hospitality services</h4>
    </section>

    <section id="productsSection">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="productContent">
                        <a hrrf="booking-master.php" class="img">
                            <img src="img/product/be.jpg" alt="">
                        </a>
                        <div class="caption">
                            <a href="booking-master.php"><h4>Booking Master</h4></a>
                            <p>Power Packed with high end seamless Commission Free Bookings from the hotel website.</p>
                            <a href="booking-master.php">Explore  Now</a>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    <?php include('screen/footer.php') ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        $.ajax({
            url:'screen/countries.php',
            type:'post',
            success:function (data) {
               $('#country').append(data);
            }
        });
    </script>


</body>

</html>
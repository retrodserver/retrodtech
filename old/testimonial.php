<?php

 $testimonialList = [
    [
        'img'=>'jamindarHotel.jpg',
        'alt'=>'gm of jamindars palece',
        'title'=>"So far so good",
        'review'=>"To be able to handle the hotel operations smoothly. It is so much part of our business already that we can't function without it.",
        'designation'=>'GM - Jamindars palace',
    ],
    [
        'img'=>'sjpHotel.jpg',
        'alt'=>'reservation manager of hhi',
        'title'=>"Very nice and helpful",
        'review'=>"We are able to check guests in and out and do reservations and auditing.",
        'designation'=>'Reservation Manager - HHI',
    ],
    [
        'img'=>'nayak.jpg',
        'alt'=>'managing director of nayak hotels and resort',
        'title'=>"Very nice and helpful",
        'review'=>"Over Retod is a very good system as it more than meets the expectations and requirements of hotels of any size. There is always room for improvement.",
        'designation'=>'Managing Director - Nayak Hotels & Resort',
    ],
    [
        'img'=>'royal.jpg',
        'alt'=>'managing director of royal retreat',
        'title'=>"Superb PMS and Support",
        'review'=>"The Support are very good, their team assist every problem that I come up with patient and fast response.",
        'designation'=>'Managing Director - Royal Retreat',
    ],
    [
        'img'=>'mahasura.jpg',
        'alt'=>'general manager of mahasuara palace',
        'title'=>"Fully satisfied",
        'review'=>"The software have lot of easy function to complete the business with easy hotel.",
        'designation'=>'General Manager - Mahasuara Palace',
    ],
    [
        'img'=>'sanjay.jpg',
        'alt'=>'reservation manager of vijoya international',
        'title'=>"Great product, fantastic support!",
        'review'=>"Most information is immediately available, and the software is easy to learn with great results.",
        'designation'=>'Reservations Manager - Vijoya International',
    ],
 ];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Retrod Testimonial">
  <meta name="keywords" content="retrod, retrod tech, retrodtech">
  <meta name="author" content="Retrod">
    <title>Review || Retrodtech.com</title>
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
        <h4>What Our Clients Say</h4>
    </section>

    <section id="testiSection">
        <div class="container">
            <div class="row">

            <?php
                            
                foreach($testimonialList as $list){
                    $img = $list['img'];
                    $alt = $list['alt'];
                    $title = $list['title'];
                    $review = $list['review'];
                    $designation = $list['designation'];
                    echo '
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <div class="testiContent">
                            <h2>'.$title.'</h2>
                            <p><i class="fas fa-quote-left"></i>  '.$review.'</p>
                            <p class="foot"><img src="img/testi/'.$img.'" alt="'.$alt.'"> '.$designation.'</p>
                        </div>
                    </div>
                    ';
                }

            ?>

            </div>
        </div>
    </section>

    <?php include('screen/footer.php') ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="js/script.js"></script>



</body>

</html>
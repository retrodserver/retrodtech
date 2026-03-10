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


<section class="productSection">
    <div class="container">

        <div class="title">
            <h2>Retrod sweet of Products</h2>
        </div>

        <div class="row">

        <?php
        
        foreach($productList as $list){
            $img = $list['img'];
            $alt = $list['alt'];
            $title = $list['title'];
            $dec = $list['dec'];
            $url = $list['url'];
            $blurCls='';
            if($dec == 'Coming Soon'){
                $blurCls = 'blur';
            }
            echo '
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="productContent">
                    <div class="imgCont"><img src="img/icon/'.$img.'" alt="'.$alt.'"></div>
                    <div class="item">
                        <svg viewBox="0 0 338.65625 225" xmlns="https://www.w3.org/2000/svg" preserveAspectRatio="none"
                            class="css-lqelpq">
                            <path d="m 0 6 a 6 6 0 0 1 6 -6 h 239.65625 a 16 16 0 0 1 11 5 l 77 77 a 16 16 0 0 1 5 11 v 126 a 6 6 0 0 1 -6 6 h -326.65625 a 6 6 0 0 1 -6 -6 z" ></path>
                        </svg>
                        <div class="caption">
                            <a href="'.$url.'">
                            <h4>'.$title.'</h4>
                            </a>
                            <p class="'.$blurCls.'">'.$dec.'</p>
                            <a href="'.$url.'"><button>Sign Up Now</button></a>
                        </div>                    
                    </div>
                </div>
            </div>
            
            ';
        }
        
        ?>

            

        </div>
    </div>
</section>
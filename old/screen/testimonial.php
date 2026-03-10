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


<section class="TestimonialSection">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 col-xs-12">
                <div class="title">
                    
                    <h2>Few words from <br/> Our Happy Hotelier</h2>
                   
                    <a href="signup.php" target="_blank" class="rbtn">Sign Up Now</a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="testimonialBox">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <?php
                            
                                foreach($testimonialList as $list){
                                    $img = $list['img'];
                                    $alt = $list['alt'];
                                    $review = $list['review'];
                                    $designation = $list['designation'];
                                    echo '
                                        <div class="swiper-slide">
                                            <div class="testiContent">
                                                <div class="caption">
                                                    <i>
                                                        <svg x="0px" y="0px" viewBox="0 0 238.7 199.3" style="enable-background:new 0 0 238.7 199.3;width:25px;height:25px" >
                                                            <style type="text/css">
                                                                .st0 {
                                                                    fill: #CCCCCC;
                                                                    stroke: #000000;
                                                                    stroke-width: 6;
                                                                }
                                                            </style>
                                                            <g id="XMLID_1_">
                                                                <path id="XMLID_3_" class="st0" d="M102.8,13.1L102.8,13.1c2.3,3.2,1.2,7.7-2.3,9.6C87.1,29.6,76.3,37.4,68,46
                                                                    c-9.7,10-14.6,19.5-14.6,28.3c0,6.3,6,12.5,18.1,18.4c11.8,5.9,20.3,12.3,25.3,19.3c5.1,7,7.6,15.6,7.6,26
                                                                    c0,13.9-4.5,25.5-13.5,34.8c-9,9.3-20.2,13.9-33.7,13.9c-15,0-27.2-5.9-36.6-17.6c-9.4-11.7-14.1-26.9-14.1-45.4
                                                                    c0-17.1,3.7-33.2,11.1-48.3C25,60.4,35.9,47.1,50.2,35.6c13.1-10.5,28.1-18.8,45-24.8C98,9.8,101.1,10.7,102.8,13.1z M224.1,13.1
                                                                    L224.1,13.1c2.3,3.2,1.2,7.7-2.3,9.6c-13.3,7-24.1,14.8-32.5,23.4c-9.7,10-14.6,19.5-14.6,28.3c0,6.3,6,12.5,18.1,18.4
                                                                    c11.8,5.9,20.3,12.3,25.3,19.3c5.1,7,7.6,15.6,7.6,26c0,13.9-4.5,25.5-13.5,34.8c-9,9.3-20.2,13.9-33.7,13.9
                                                                    c-15,0-27.2-5.9-36.6-17.6c-9.4-11.7-14.1-26.9-14.1-45.4c0-17.1,3.7-33.2,11.1-48.3c7.4-15.1,18.3-28.4,32.6-39.9
                                                                    c13.1-10.5,28.1-18.8,45-24.8C219.3,9.8,222.4,10.7,224.1,13.1z" />
                                                            </g>
                                                        </svg>
                                                    </i>
                                                    <p>'.$list['review'].'</p>
                                                    <h4>'.$list['designation'].'</h4>
                                                </div>
                                                <div class="imgCon">
                                                    <img src="img/testi/'.$img.'" alt="'.$alt.'">
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }

                            ?>

                            

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
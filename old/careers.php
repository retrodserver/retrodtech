<?php

 $careerList = [
    [
        'title'=>"PHP Developer-Laravel",
        'desc'=>"₹1.8L – ₹3L • No equity · Full Time · Bhubaneswar · Software Engineer · HTML/CSS/PHP/MYSQL /Laravel",
        'url'=>"javascript:void(0)"
    ],

    [
        'title'=>"Graphic Designer",
        'desc'=>"₹1.5L – ₹2L • No equity · Full Time · Bhubaneswar · Graphic Designer · Photoshop/Adobe XD",
        'url'=>"javascript:void(0)"
    ],

    [
        'title'=>"Inside Sales Executive( Only Female )",
        'desc'=>"₹1.5L – ₹2L • No equity · Full Time · Bhubaneswar · Inside Sales Executive · Tele calling / Softoware Sales / Revenue Generation ",
        'url'=>"javascript:void(0)"
    ],

    [
        'title'=>"Field Sales / Business Develoment( Only Male )",
        'desc'=>"₹1.5L – ₹3.0L • No equity · Full Time · Bhubaneswar · Field Sales · Business Develoment / Customer Relationship / Softoware Sales",
        'url'=>"javascript:void(0)"
    ],
 ];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Retrod Careers">
      <meta name="keywords" content="retrod, retrod tech, retrodtech">
      <meta name="author" content="Retrod">
    <title>Careers || Retrodtech.com</title>
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
        <h4>Open Positions</h4>
    </section>

    <section id="careerSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul>
                        <?php
                                
                            foreach($careerList as $list){
                                $title = $list['title'];
                                $desc = $list['desc'];
                                $url = $list['url'];
                                echo '
                                    <li>
                                        <div>
                                            <h4>'.$title.'</h4>
                                            <p>'.$desc.'</p>
                                            <a href="mailto:hr@retrodtech.com?subject='.$title.'&body=This is '.$title.' apply">Apply Now</a>
                                        </div>
                                    </li>
                                ';
                            }
            
                        ?>
                        
                        
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="imgBox">
                        <div class="imgContent">
                            <div class="item">
                                <img src="img/team/01.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/team/02.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/team/03.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/team/04.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/team/05.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/team/06.jpg" alt="">
                            </div>
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
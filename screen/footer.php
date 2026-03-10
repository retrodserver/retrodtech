<?php
$sql = "SELECT * FROM contacts ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Email = $row["Email"];
$Phonenumber = $row['Phonenumber'];
$PhoneNumber2 = $row['PhoneNumber2'];
$Location = $row['Location'];
$WorkingHours = $row['WorkingHours'];
?>
<style>
@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.rotate-icon i {
    margin-right: 5px;
    display: inline-block;
    /* Ensure the icon is displayed as a block element */
    animation: rotate 2s linear infinite;
}

.submit-btn {
    background: linear-gradient(to right, #dc0ca8, #ff4c1f);
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
    margin: 15px;
    cursor: pointer;
}


.submit-btn:hover {
    cursor: pointer;
    opacity: 1.1;
}

.details {
    font-weight: 700 !important;
}

@keyframes gradient {

    0%,
    100% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }
}

.footerbtn {
    display: flex;
    justify-content: end;
    align-items: end;
    height: 13vh;
}

.footerbtn {
    padding: 10px;
}

/* .modal-content {
    width: 85% !important;
} */

.cbutton {
    width: 12%;
    text-align: center;
    cursor: pointer;
    color: #d58521;
    height: auto;
}

.cbutton img {
    width: 30px;
}

.close-button {
    margin: 10px auto;
    -webkit-transition: -webkit-transform 1s ease-in-out;
    transition: transform 1s ease-in-out;
    transform-origin: center;
    transform-style: preserve-3D;
}

.close-button:hover {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}

.close-button-1 {
    margin: 20px auto;
    -webkit-transition: -webkit-transform 1s ease-out;
    transition: transform 1s ease-out;
    transform-origin: center;
    transform-style: preserve-3D;
}

.close-button-1:hover {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}

.close-button-2 {
    margin: 20px auto;
    -webkit-transition: -webkit-transform 1s linear;
    transition: transform 1s linear;
    transform-origin: center;
    transform-style: preserve-3D;
}

.close-button-2:hover {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}

.glass {


    background: rgba(247, 231, 231, 0.19);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(19.7px);
    -webkit-backdrop-filter: blur(19.7px);
    border: 1px solid rgba(247, 231, 231, 0.89);

}

.modal-body_section .user__details .input__box input,
select {
    background-color: aliceblue !important;
}

.bttn {
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 10px;
    letter-spacing: 1px;
    text-decoration: none;
    overflow: hidden;
    color: #fff;
    font-weight: 400px;
    z-index: 1;
    transition: 0.5s;
    backdrop-filter: blur(15px);
}

.container .bttn:hover input {
    letter-spacing: 3px;
}

.container .bttn input::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
    transform: skewX(45deg) translate(0);
    transition: 0.5s;
    filter: blur(0px);
}

.container .bttn:hover input::before {
    transform: skewX(45deg) translate(200px);
}

.container .bttn::before {
    content: "";
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    bottom: -5px;
    width: 30px;
    height: 10px;
    background: #f00;
    border-radius: 10px;
    transition: 0.5s;
    transition-delay: 0.5;
}

.container .bttn:hover::before

/*lightup button*/
    {
    bottom: 0;
    height: 50%;
    width: 80%;
    border-radius: 30px;
}

.container .bttn::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    top: -5px;
    width: 30px;
    height: 10px;
    background: #f00;
    border-radius: 10px;
    transition: 0.5s;
    transition-delay: 0.5;
}

.container .bttn:hover::after

/*lightup button*/
    {
    top: 0;
    height: 50%;
    width: 80%;
    border-radius: 30px;
}

.container .bttn:nth-child(1)::before,
/*chnage 1*/
.container .bttn:nth-child(1)::after {
    background: #1eff45;
    box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
        0 0 60px #1eff45;
}

.container .bttn:nth-child(2)::before,
/* 2*/
.container .bttn:nth-child(2)::after {
    background: #2db2ff;
    box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
        0 0 60px #2db2ff;
}

.container .bttn:nth-child(3)::before,
/* 3*/
.container .bttn:nth-child(3)::after {
    background: #1eff45;
    box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
        0 0 60px #1eff45;
}

.custom-swal-width {
    width: 300px;
    /* Adjust the width as needed */
}
strong.brand {
    font-family: arial;
    font-size: 17px;
    color: #fff;
    font-weight: 800;
}
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

<footer class="site-footer ">
    <div data-elementor-type="wp-post" data-elementor-id="611" class="elementor elementor-611">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4a0cedf elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="4a0cedf" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33484f5"
                    data-id="33484f5" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d8b6407 elementor-widget elementor-widget-tronix_footer_one"
                            data-id="d8b6407" data-element_type="widget" data-widget_type="tronix_footer_one.default">
                            <div class="elementor-widget-container">

                                <div class="footer-one-wrapper footer-wrapper">
                                    <div class="footer-one-content-wrp">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 col-lg-2">
                                                    <div class="footer-one-about-widget-info">
                                                        <h5 class="footer-one-widget-title"> About Us </h5>
                                                        <div class="footer-one-widget-des"> Retrod is game changing
                                                            hospitality technology platform that is recolonizing the way
                                                            hotels operate and also make travel cheaper. </div>
                                                        <div class="social_media">
                                                            <div class="Social-media">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <a href="https://www.facebook.com/RetrodTechnologies"
                                                                            target="_blank"><i
                                                                                class="fab fa-facebook"></i></a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <a href="https://mobile.twitter.com/retrodtech"
                                                                            target="_blank"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="-11 0 48 25" version="1.1">
                                                                                <path
                                                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                                                            </svg></a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <a href="https://in.linkedin.com/company/retrod-technologies"
                                                                            target="_blank"><i
                                                                                class="fab fa-linkedin-in"></i></a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <a href="https://www.instagram.com/retrod_tech"
                                                                            target="_blank"><i
                                                                                class="fab fa-instagram"></i></a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <a href="https://www.youtube.com/@retrodpodcast"
                                                                            target="_blank"><i
                                                                                class="fab fa-youtube"></i></a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <a href="https://api.whatsapp.com/send?phone=918118031833"
                                                                            target="_blank"><i
                                                                                class="fab fa-whatsapp"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 mb-3">
                                                    <div class="footer-one-menu-widget">
                                                        <h5 class="footer-one-widget-title"> link</h5>
                                                        <div class="footer-one-link-menu">
                                                            <ul>

                                                                <li>
                                                                    <a href="https://retrodtech.com/about"
                                                                        target="_blank" rel="nofollow">About Us </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/contact"
                                                                        target="_blank" rel="nofollow">Contact Us </a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://retrodtech.com/testimonial"
                                                                        target="_blank" rel="nofollow">Testimonial </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/career"
                                                                        target="_blank" rel="nofollow">Careers
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/blog"
                                                                        target="_blank" rel="nofollow">Blogs
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/meetteam"
                                                                        target="_blank" rel="nofollow">Meet The Team
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-3 ">
                                                    <div class="footer-one-menu-widget">
                                                        <h5 class="footer-one-widget-title">Product</h5>
                                                        <div class="footer-one-link-menu">
                                                            <ul>

                                                                <li>
                                                                    <a href="https://retrodtech.com/product?id=web-master"
                                                                        target="_blank" rel="nofollow">Hotel
                                                                        webmaster
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/product?id=booking-engine"
                                                                        target="_blank" rel="nofollow">Best hotel
                                                                        booking engine in India
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://login.retrod.app/login"
                                                                        target="_blank" rel="nofollow">Best all-in-one
                                                                        PMS in India
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/Revenue"
                                                                        target="_blank" rel="nofollow">Best
                                                                        revenue management tool in India
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/restaurant-pos"
                                                                        target="_blank" rel="nofollow">Best POS
                                                                        for Restaurant in India
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/payment-solution"
                                                                        target="_blank" rel="nofollow">Best
                                                                        payment solutions for India Hotels
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 mb-3">
                                                    <div class="footer-one-service-list-widget">
                                                        <h5 class="footer-one-widget-title">Explore</h5>
                                                        <div class="footer-one-service-list">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://retrodtech.com/paymentgateway"
                                                                        target="_blank" rel="nofollow">Payment integration</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/Digital_Reception"
                                                                        target="_blank" rel="nofollow">Digital Reception </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/Visual_Media_Solution"
                                                                        target="_blank" rel="nofollow">Visual content </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://retrodtech.com/blog"
                                                                        target="_blank" rel="nofollow">Latest Posts </a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://retrodtech.com/faq" target="_blank"
                                                                        rel="nofollow">Faq</a>
                                                                </li>
                                                                <!-- <li>
                                                                    <a href="https://retrodtech.com/price" target="_blank" rel="nofollow">Pricing</a>
                                                                </li> -->
                                                                <!-- <li>
                                                                    <a href="#" target="_blank" rel="nofollow">Press releases</a>
                                                                </li> -->
                                                                <li>
                                                                    <a href="https://retrodtech.com/terms-conditions"
                                                                        rel="nofollow">Terms & Conditions</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" col-lg-3">
                                                    <div class="footer-one-service-list-widget">
                                                        <h5 class="footer-one-widget-title">Important Links</h5>
                                                        <div class="footer-one-service-list">
                                                            <ul>
                                                                <li>
                                                                    <a class=""
                                                                        href="https://odishatourism.gov.in/content/tourism/en.html"
                                                                        target="_blank" rel="nofollow"
                                                                        style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill"></i>Odisha
                                                                            Tourism
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a class="" href="https://www.ecotourodisha.com"
                                                                        target="_blank" rel="nofollow"
                                                                        style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill rotate-icon"></i>Odisha
                                                                            Eco Tourism
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="" href="https://tourism.gov.in"
                                                                        target="_blank" rel="nofollow"
                                                                        style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill rotate-icon"></i>India
                                                                            Tourism </span></a>
                                                                </li>
                                                                <li>
                                                                    <a class="" href="https://hrao.org" target="_blank"
                                                                        rel="nofollow" style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill rotate-icon"></i></span>Hotel
                                                                        & Restaurant Association of Odisha (HRAO)
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a class="" href="https://www.ihmbbs.org"
                                                                        target="_blank" rel="nofollow"
                                                                        style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill rotate-icon"></i></span>IHM
                                                                        Odisha
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a class="" href="https://www.bookodisha.com/"
                                                                        target="_blank" rel="nofollow"
                                                                        style="color:red !important;">
                                                                        <span class="rotate-icon">
                                                                            <i
                                                                                class="bi bi-arrow-right-circle-fill rotate-icon"></i></span>OTDC
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="footer-one-wrapper footer-wrapper">
                                            <div class="footer-one-content-wrp">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-6 col-lg-2 mb-2">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel-Website Design in Bhubaneswar
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in
                                                                                Bhubaneswar
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in Bhubaneswar
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in Bhubaneswar
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in Bhubaneswar
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for Bhubaneswar Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-lg-2 mb-3">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel-Website Design in jamshedpur
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in
                                                                                jamshedpur
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in jamshedpur
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in jamshedpur
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in jamshedpur
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for jamshedpur Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-lg-2 mb-2">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                Website Design in chandigarh
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in chandigarh
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in chandigarh
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in chandigarh
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in chandigarh
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for chandigarh Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-lg-2 mb-2">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel-Website Design in ghaziabad
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in
                                                                                ghaziabad
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in ghaziabad
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in ghaziabad
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in ghaziabad
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for ghaziabad Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-lg-2 mb-2">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel-Website Design in Bhopal
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in Bhopal
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in Bhopal
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in Bhopal
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in Bhopal
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for Bhopal Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-lg-2 mb-3">
                                                            <div class="footer-one-menu-widget">
                                                                <div class="footer-one-link-menu">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=web-master"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel-Website Design in Kochi
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/product?id=booking-engine"
                                                                                target="_blank" rel="nofollow">Best
                                                                                hotel booking engine in Kochi
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="https://login.retrod.app/login"
                                                                                target="_blank" rel="nofollow">Best
                                                                                all-in-one
                                                                                PMS in Kochi
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/Revenue"
                                                                                target="_blank" rel="nofollow">Best
                                                                                revenue management tool in Kochi
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                target="_blank" rel="nofollow">Best POS
                                                                                for Restaurant in Kochi
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://retrodtech.com/payment-solution"
                                                                                target="_blank" rel="nofollow">Best
                                                                                payment solutions for Kochi Hotels
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="footer-one-icon-box-wrapper">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-6 ">
                                                    <div class="footer-one-icon-box">
                                                        <div class="footer-one-icon">
                                                            <i class='fas fa-map-marker-alt text-white' style='font-size:24px'></i>
                                                        </div>
                                                        <div class="footer-one-icon-box-content">
                                                            <div class="footer-icon-box-title">Location </div>
                                                            <div class="ico footer-icon-box-des">
                                                                <?php echo $Location ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 ">
                                                    <div class="footer-one-icon-box">
                                                        <div class="footer-one-icon">
                                                            <i aria-hidden="true" class="ico bi bi-clock text-white"></i>
                                                        </div>
                                                        <div class="footer-one-icon-box-content">
                                                            <div class="footer-icon-box-title">Working Hours</div>
                                                            <div class="footer-icon-box-des">
                                                                <?php echo $WorkingHours ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 ">
                                                    <div class="footer-one-icon-box">
                                                        <div class="footer-one-icon">
                                                            <i class='far fa-envelope-open text-white' style='font-size:24px'></i>
                                                        </div>
                                                        <div class="footer-one-icon-box-content">
                                                            <div class="footer-icon-box-title">Contact Us </div>
                                                            <div class="footer-icon-box-des">
                                                                <!-- <a class="location"
                                                                    href="tel:<?php echo $Phonenumber ?>"><?php echo $Phonenumber ?></a>
                                                                <a class="location"
                                                                    href="tel:<?php echo $PhoneNumber2 ?>"><?php echo $PhoneNumber2 ?></a> -->
                                                                <a class="location"
                                                                    href="tel:8658985809">+91-8658-985-809</a>
                                                                <a class="location"
                                                                    href="tel:<?php echo $Phonenumber ?>"><?php echo $Phonenumber ?></a>

                                                                <a class="location"
                                                                    href="mailto:sales@retrodtech.in">sales@retrodtech.in</a>
                                                                <a class="location"
                                                                    href="mailto:support@retrodtech.com"><?php echo $Email ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-one-copyright_area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div style="display: flex;justify-content: space-between;padding: 0px 0px;color: #ffffff;font-size: 15px;">
                                                    <div style="margin: 0px auto;">
                                                        © <?php echo date("Y"); ?> All Rights Reserved by<a
                                                            href="https://retrodtech.com/" target="_blank"
                                                            style="text-decoration: none;"><strong class="brand">
                                                            Retrod.</strong><div style="text-align: right;line-height: 0.1;position: relative;left: 0px;top: -4px;">
                                                            <br>
                                                            <small style="font-size: 8px;color: #ffffff;font-family: arial;">Travel
                                                                Tech</small></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</footer>
<div class="to-top" id="back-top">
    <i class="bi bi-arrow-up"></i>
</div>

<div class="modal fade" id="registration_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content glass">
            <div class="modal-header">
                <h5 class="modal-title modal_header" id="exampleModalLongTitle"
                    style=" font-family: 'Playfair Display', serif;  letter-spacing: 4px; color: black; text-shadow: 3px 5px 7px white; font-weight: 900;">
                    Register</h5>


                <div class="cbutton close" data-dismiss="modal" aria-label="Close" id="closemodal">

                    <img src="./screen/delete-button.png" class="close-button" alt="">

                </div>


            </div>
            <div class="modal-body_section">


                <div id="message"></div>


                <form id="propertyRegisterForm" method="GET" action="">
                    <div class="user__details">
                        <div class="input__box">
                            <span class="details">Name</span>
                            <input style="color:black; font-size: medium; font-weight: 600;" type="text"
                                placeholder="Name" name="uname" id="name" required>
                        </div>

                        <div class="input__box">
                            <span class="details">Email Id</span>
                            <input style="color:black; font-size: medium; font-weight: 600;" type="email"
                                placeholder="testmail@gmail.com" name="umail" id="mail" required>
                        </div>
                        <div class="input__box" style="position: relative;">
                            <span class="details">Phone Number</span>
                            <input style="color:black; font-size: medium; font-weight: 600;" type="text"
                                placeholder="012-345-6789" name="uphone" id="number">

                        </div>

                        <div class="input__box mb-3">
                            <div id="recaptcha-container"></div>
                        </div>
                        <div id="otpbox" class="input__box mb-3" style="display:none;">
                            <p>Enter your OTP</p>
                            <input type="number" id="otp" name="otp" placeholder="Enter your otp here" required>


                        </div>

                        <div class="input__box">
                            <span class="details">Hotel Name</span>
                            <input style="color:black; font-size: medium; font-weight: 600;" type="text"
                                placeholder="Hotel Name" name="hotelname" id="hotelname" required>
                        </div>
                        <div class="row" style="width: calc(100% / 2 - -66px); margin-bottom: 15px;  margin: 0px auto;">
                            <div class="input__box col" style="padding-left:0;">
                                <span class="details">Total Inventory</span>
                                <input style="color:black; font-size: medium; font-weight: 600;" type="number"
                                    placeholder="50" name="totalinventory" id="totalinventory" required>
                            </div>

                            <div class="input__box col" style="padding-right:0;">
                                <span class="details">Choose Plans</span>

                                <select class="selectPrice " name="plan" id="plan"
                                    style="color:black; font-size: medium; font-weight: 600;  height: 45px; width: 100%; outline: none; border-radius: 5px; border: 1px solid var(--main-grey); padding-left: 15px; font-size: 16px; border-bottom-width: 2px; margin-bottom: 15px !important;">
                                    <option value="" selected disabled hidden>Choose</option>
                                    <option value="3month">Starter</option>
                                    <option value="6month">Plus</option>
                                    <option value="1year">Elite</option>

                                </select>
                            </div>
                        </div>


                        <div class="footerbtn container" style="background:transparent !important;">
                            <div class="bttn">
                                <input type="button" name="save_contact" value="Submit" id="submit" class=""
                                    style="margin-right: 18px; z-index: 11 !important; position: relative;    background: transparent;  border: none; color: #000000b3;  font-weight: 600; text-align: center; padding-left: 11px; font-weight: 900; text-shadow: 0px 0px 0px black;" />
                            </div>
                            <!-- <button type="button" class="theme-btns" id="closemodal" data-dismiss="modal" style="margin-right: 16px; background: red !important;">Close</button> -->

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-NXQNXMQPRQ">
</script>

<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/65c483ed8d261e1b5f5da41c/1hm3q6moa';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-NXQNXMQPRQ');
</script>
<!--End of Tawk.to Script-->


<script src="js/formapp23.js"></script>
<!-- <script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>
<script>
    var snowflakes = new Snowflakes({
        color: '#fff',
        count: 100,
        minOpacity: 0.5,
        minSize: 5,
        maxSize: 25,
        rotation: true,
        autoResize: true
    });
</script> -->
<style>
    .btn-dgn {
        font-size: 17px;
        background-color: transparent;
        color: #B81265;
        border: 1px solid #B81265;
        padding: 13px 25px;
        font-weight: 600;
        border-radius: 20px;
    }

    .btn-dgn:hover {
        color: #fff;
        background-color: #B81265;
        border-color: #B81265;
    }

    /* For tablets and smaller devices */
    @media (max-width: 768px) {
        .btn-dgn {
            font-size: 15px;
            padding: 10px 20px;
        }
    }

    /* For mobile devices */
    @media (max-width: 480px) {
        .btn-dgn {
            font-size: 13px;
            padding: 8px 15px;
        }
    }

    .txt-dgn {
        font-size: 20px;
        font-weight: 600;
    }



    img.christmasPngT {
        width: 92%;

    }

    /* .christmasPngT {
    width: 200px;
    
    height: auto;
    filter: drop-shadow(5px 5px 10px rgba(0, 0, 0, 0.5));
   
} */
    /* .gift-box {
    position: absolute;
    right: -50px;
   
    width: 50px;
    height: 50px;
    background-color: #ff4757;
    color: #fff;
    font-size: 30px;
    text-align: center;
    line-height: 50px;
    border-radius: 5px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    animation: bounce 2s infinite;
    z-index: 999;
    top: 0;
} */
    .gift-box {
        position: absolute;
        right: -50px;
        width: 50px;
        height: 50px;
        /* background-color: #ff4757; */
        color: #fff;
        font-size: 30px;
        text-align: center;
        line-height: 50px;
        border-radius: 5px;
        /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); */
        cursor: pointer;
        animation: swing ease-in-out 3s infinite alternate;
        z-index: 999;
        top: 0;
    }

    /* @keyframes rotateClockwise {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(180deg);
        }

        100% {
            transform: rotate(180deg);
        }
    } */

    /* Bounce animation */
    /* @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-5px);
        }
    } */

    /* Responsive adjustments */


    /*second pin */
    .gift-box {
        position: absolute;
        right: -84px;
        /* top: 100px; */
        width: 91px;
        height: 100px;
        z-index: 999;
        cursor: pointer;
        animation: swing 3s ease-in-out infinite;
    }

    /* Media Queries for different screen sizes */
    @media (max-width: 768px) {
        .gift-box {
            right: 10%;
            /* More right padding on smaller devices */
            top: 5%;
            /* Less top margin on smaller devices */
            width: 20vw;
            /* Adjust width for smaller devices */
            max-width: 80px;
            /* Max width for mobile */
        }
    }

    @media (max-width: 480px) {
        .gift-box {
            right: 5%;
            /* Even smaller right margin */
            top: 5%;
            /* Small top margin */
            width: 30vw;
            /* Even smaller width for mobile screens */
            max-width: 70px;
            /* Max width for smaller phones */
        }
    }

    .gift-box-content {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .discount-img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        border-radius: 8px;
    }

    .pin {
        position: absolute;
        top: -10px;
        /* Positioning the pin above the image */
        left: 50%;
        transform: translateX(-50%);
        width: 14px;
        height: 14px;
        background-color: #f39c12;
        /* Pin color */
        border-radius: 50%;
        /* Circular pin head */
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .pin::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 40px;
        background-color: #f39c12;
        /* Pin body color */
    }

    @keyframes swing {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(10deg);
            /* Swing slightly to the right */
        }

        100% {
            transform: rotate(0deg);
            /* Return to the original position */
        }
    }

    button.closeBFbtn {
        background-color: red;
        padding: 3px 12px;
        border-radius: 50px;
        border: none;
        color: #fff;
    }

    .discountModalB .discount-card {
        position: relative;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: auto;
        height: 100%;
    }

    .discountModalB .discount-ribbon {
        position: absolute;
        top: 10px;
        left: -42px;
        background-color: #ff4747;
        color: white;
        padding: 5px 40px;
        font-weight: bold;
        font-size: 0.9rem;
        transform: rotate(-45deg);
        text-align: center;
        z-index: 10;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        /* Start as invisible */
        animation: fadeInRibbon 2s ease-in-out forwards;
    }

    button.click-me-btn {
        font-size: 14px;
        padding: 5px 4px;
        border-radius: 65px;
        color: #ff0707;
        border: none;
        background: #0000001c;
    }

    @keyframes fadeInRibbon {
        0% {
            opacity: 0;
            /* Start as invisible */
            transform: rotate(-45deg) translateX(-20px);
            /* Slightly shift off screen */
        }

        100% {
            opacity: 1;
            /* End as visible */
            transform: rotate(-45deg) translateX(0);
            /* Final position */
        }
    }

    .discountModalB .card-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .discountModalB .card-body {
        padding: 15px;
    }

    .discountModalB .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .discountModalB .card-text {
        font-size: 0.9rem;
        color: #555;
    }

    .spclBtnt {
        background-color: #B81265;
        color: #fff;
    }

    .spclBtnt:hover {
        background-color: #000;
        transition: 0.5s ease-in-out;
        color: #fff;
    }
    .tronix-hero-image-wrapper{
    position: relative;
    display: inline-block;
}

/* Image */
.tronix-image img{
    position: relative;
    z-index: 2;
}

/* Dotted Circle */
.dotted-circle{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 420px;
    height: 420px;
    border: 3px dotted #86bb46;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    animation: rotateCircle 12s linear infinite;
    z-index: 1;
}

/* Rotation animation */
@keyframes rotateCircle{
    from{
        transform: translate(-50%, -50%) rotate(0deg);
    }
    to{
        transform: translate(-50%, -50%) rotate(360deg);
    }
}
</style>
<section
    class="firstdivSec elementor-section elementor-top-section elementor-element elementor-element-00ef1ae elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="00ef1ae" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-e-bg-lazyload="">

    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4d6739d"
            data-id="4d6739d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-796adb9 elementor-widget elementor-widget-tronixcore_hero_banner"
                    data-id="796adb9" data-element_type="widget" data-widget_type="tronixcore_hero_banner.default">
                    <div class="elementor-widget-container">
                        <div class="tronix-slider-banner-wrapper">
                            <div class=" tronix-cover-bg">
                                <div class="tronix-table">
                                    <div class="tronix-table-cell">
                                        <div class="container">
                                            <div class="row">
                                                <div class="tronix-settings-content-column col-xl-6 col-lg-6 col-md-12">
                                                    <div class="tronix-settings-content-box">

                                                        <!-- <span class="slide-subtitle"> Welcome To Retrod
                                                        </span> -->

                                                        <h1 class="tronix-slide-title">India's Leading

                                                            <span style="color: #B81265">Travel Tech
                                                            </span> Company
                                                        </h1>
                                                        <div class="tronix-slide-dec"> Transform your hotel management
                                                            with Retrod’s AI-powered PMS—automated, smart, and built to
                                                            save you time and money effortlessly.</div>

                                                        <div class="settings-button-wrapper">
                                                            <div>
                                                                <div style="position:relative;">

                                                                    <a href="https://retrodtech.com/register"
                                                                        class="btn btn-dgn " data-toggle=""
                                                                        data-target="_target"><span
                                                                            class="txt-dgn">Register
                                                                            Now</span></a>


                                                                </div>
                                                            </div>

                                                            <div class="hero-video-btn" style="margin-left: 8px;">
                                                                <a href="https://www.youtube.com/@retrodpodcast"
                                                                    target="_blank" rel="nofollow" class="pause_btn"
                                                                    id="video-btn-2351">
                                                                    <i aria-hidden="true"
                                                                        class="bi bi-play-fill fa-spin"></i>



                                                                    <span><a class="podcast_btn button-pulse"
                                                                            href="https://www.youtube.com/@retrodpodcast"
                                                                            target="_blank">
                                                                            <p class="animated">Podcast
                                                                            </p>
                                                                        </a>
                                                                    </span>
                                                                </a>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center align-items-center">

                                                    <div class="tronix-hero-image-wrapper">
                                                        <div class="tronix-image">

                                                            <img class="christmasPngT" width="320" height="380"
                                                                src="img/retrod_banner_retrod_traveltech.png"
                                                                class="attachment-full size-full" alt="retrod_banner"
                                                                decoding="async" loading="lazy" srcset=""
                                                                sizes="(max-width: 500px) 100vw, 500px" />



                                                        </div>

                                                    </div>

                                                    <!-- <div class="gift-box" onclick="openOffer()">
                                                         🎁
                                                    </div> -->
                                                    <!-- <div class="gift-box" onclick="openOffer()">
                                                        <img src="img/discountImage.png" alt="">
                                                    </div> -->
                                                    <!-- <div class="gift-box">
                                                        <div class="gift-box-content" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <img src="img/discountImage.png" alt="Discount Image"
                                                                class="discount-img">
                                                            <div class="pin"></div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="gift-box">
                                                        <div class="gift-box-content" data-toggle="modal"
                                                            data-target="#exampleModalCenter">
                                                            <img src="img/twentyfive_discount_image_retrod.png" alt="Discount Image"
                                                                class="discount-img">
                                                            <div class="pin"></div>
                                                            <button class="click-me-btn">
                                                                <i class="fas fa-hand-pointer"></i> Click Me
                                                            </button>
                                                        </div>
                                                    </div> -->


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




<script>
    function openOffer() {

        window.location.href = 'https://retrodtech.com/register';
    }
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Special Offers</h5>
                <button type="button" class="closeBFbtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="discountModalB">
                    <div class="container py-5">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="discount-card">
                                    <div class="discount-ribbon">25% OFF</div>
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="height: 200px;">
                                        <img src="./offerimg/dashboard.png" alt="Product 1" loading="lazy" decoding="async" class="card-img"
                                            style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">P M S</h5>
                                        <p class="card-text">Streamline hotel operations with smart automation.</p>
                                        <button class="btn spclBtnt w-100" onclick="openOffer()">Register
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="discount-card">
                                    <div class="discount-ribbon">25% OFF</div>
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="height: 200px;">
                                        <img src="./offerimg/point_of_sale_retrod_product.png" loading="lazy" decoding="async" alt="Product 4"
                                            class="card-img" style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">P O S</h5>
                                        <p class="card-text">Simplify Operations with Our Smart POS System.</p>
                                        <button class="btn spclBtnt w-100" onclick="openOffer()">Register
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="discount-card">
                                    <div class="discount-ribbon">25% OFF</div>
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="height: 200px;">
                                        <img src="./offerimg/booking.png" alt="Product 2" loading="lazy" decoding="async" class="card-img"
                                            style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Booking Engine </h5>
                                        <p class="card-text">Maximize direct bookings, boost your revenue.</p>
                                        <button class="btn spclBtnt w-100" onclick="openOffer()">Register
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-3 col-sm-6">
                                <div class="discount-card">
                                    <div class="discount-ribbon">25% OFF</div>
                                    <!-- Centered and medium-sized image -->
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="height: 200px;">
                                        <img src="./offerimg/www.png" alt="Product 3" loading="lazy" decoding="async" class="card-img"
                                            style="max-width: 100px; max-height: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Web Builder</h5>
                                        <p class="card-text">Create stunning websites effortlessly for hotels.</p>
                                        <button class="btn spclBtnt w-100" onclick="openOffer()">Register
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
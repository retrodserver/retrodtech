<?php header("Referrer-Policy: strict-origin-when-cross-origin"); ?>
<?php header("Referrer-Policy: strict-origin-when-cross-origin"); ?>

<!doctype html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta name="description"
        content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod,Retrod Technologies offers cutting-edge IT solutions, software development, cloud computing, and digital transformation services. Partner with us to grow your business.">
    <meta name="keywords"
        content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms,IT solutions, software development, cloud computing, digital transformation, IT consulting, Cloud-based PMS,Contactless Check-in,Smart Hospitality Solutions,Hotel Business Intelligence,Cloud Hospitality Solutions,Hotel Digital Campaigns,Hotel Mobile Check-in,Hotel Data Analytics,Online Travel Technology,Automated Hotel Systems,Intelligent Hotel Operations,Guest Communication Tools,Travel Agency Solutions,Vacation Rental Management,Hospitality Cloud Solutions,Mobile-Friendly Hotel Solutions,Hotel Wi-Fi Management,Travel Tech Innovations,Hotel Booking Optimization,Secure Payment Gateways,Global Distribution System (GDS),OTA Integration Software,Hotel API Integration,Hotel Staff Management,Travel Portal Development,Property Management Software,Inventory Management,Guest Check-in and Check-out,Room Booking System">
    <meta name="author" content="Retrod">
    <title>Retrod || India's Leading Travel Tech Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://retrodtech.com/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link href="christmas/Christmas.css" rel="stylesheet"> -->

    <link rel="canonical" href="https://retrodtech.com">
    <meta name="robots" content="index, follow">

    <meta property="og:site_name" content="Retrod Technologies">
    <meta property="og:title" content="Best Hotel Management Software | Retrod">
    <meta property="og:description" content="Retrod Technologies provides hotel booking engine, PMS, website development and travel technology solutions.">
    <meta property="og:url" content="https://retrodtech.com">
    <meta property="og:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Hotel Management Software | Retrod">
    <meta name="twitter:description" content="Retrod Technologies provides hotel booking engine, PMS and travel technology solutions.">
    <meta name="twitter:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">

    <link rel="icon" href="https://retrodtech.com/img/favicon_io/favicon.ico" type="image/x-icon">

    <style>
        #fountdationCon {
            background: #000000e3;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            visibility: none;
            z-index: 999;
        }

        #fountdationCon.show {
            opacity: 1;
            visibility: visible;
        }

        #fountdationCon img {
            border-radius: 25px;
        }

        #closeBtn {
            position: absolute;
            top: 10px;
            right: 5px;
            border: 1px solid #00000021;
            padding: 5px 10px;
            border-radius: 5px;
            user-select: none;
        }

        .popup-container {
            position: fixed;
            width: 100%;
            max-width: 500px;
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .popup {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }

        .popup::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, #FF9A9E 0%, #FAD0C4 99%, #FAD0C4 100%);
        }

        .celebration-title {
            font-size: 2.5rem;
            color: #FF6B6B;
            margin-bottom: 15px;
            text-shadow: 2px 2px 0px rgba(255, 107, 107, 0.2);
            position: relative;
            display: inline-block;
        }

        .celebration-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #FF9A9E 0%, #FAD0C4 99%, #FAD0C4 100%);
            border-radius: 3px;
        }

        .message {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 20px 0;
        }

        .highlight {
            color: #FF6B6B;
            font-weight: 600;
        }

        .confetti {
            position: absolute;
            width: 15px;
            height: 15px;
            opacity: 0;
            animation: fall 5s linear infinite;
        }

        @keyframes fall {
            0% {
                opacity: 1;
                transform: translateY(-100px) translateX(0) rotate(0deg);
            }

            100% {
                opacity: 0;
                transform: translateY(500px) translateX(100px) rotate(360deg);
            }
        }

        .close-btn {
            background: linear-gradient(90deg, #FF9A9E 0%, #FAD0C4 99%, #FAD0C4 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
            display: none;
        }

        .close-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
        }

        .balloon {
            position: absolute;
            width: 50px;
            height: 60px;
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .balloon::before {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: rgba(0, 0, 0, 0.2);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .balloon1 {
            background: rgba(255, 107, 107, 0.8);
            top: -30px;
            left: 50px;
            animation-delay: 0s;
        }

        .balloon2 {
            background: rgba(77, 171, 247, 0.8);
            top: -20px;
            right: 60px;
            animation-delay: 1s;
        }

        .balloon3 {
            background: rgba(123, 237, 159, 0.8);
            bottom: 20px;
            left: 40px;
            animation-delay: 2s;
        }

        .balloon4 {
            background: rgba(247, 202, 24, 0.8);
            bottom: 30px;
            right: 50px;
            animation-delay: 3s;
        }

        .weatherBg {
            position: relative;
        }

        .weatherBg::after {
            content: "";
            /* background-image: url(./img/makar-sankranti.jpg); */
            background-size: cover;
            /* background-position: center; */
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.2;
            background-size: 100%;
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 1200px) {
            .weatherBg::after {
                background-size: contain;
                /* Adjusts image scaling for medium screens */
            }
        }

        @media (max-width: 768px) {
            .weatherBg::after {
                background-size: cover;
                /* Ensures proportional scaling */
                opacity: 0.15;
                /* Slightly reduce opacity for better readability */
            }
        }

        @media (max-width: 480px) {
            .weatherBg::after {
                background-size: cover;
                /* Fully covers even smaller screens */
                opacity: 0.1;
                /* Make the image even lighter for mobile readability */
            }
        }

        .Banner {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .call-to-action-wrap {
            background-color: #131325;
            padding-top: 100px;
            padding-bottom: 100px;
            background-image: url(./img/offerdemo_retrod.webp);
            background-size: 100%;
        }

        .txt-title {
            color: #ffffff;
            font-weight: 700;
            font-family: emoji;
            font-display: auto;
            margin-bottom: 30px;
            font-size: 64px;
        }

        .txt-content {
            color: #ffffff;
            margin-bottom: 20px;

        }
    </style>
    <?php include('screen/header.php')  ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Retrod Technologies",
            "url": "https://retrodtech.com"
        }
    </script>
</head>


<body class="home page-template page-template-template-home page-template-template-home-php page page-id-600
    wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used
    woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">
    <?php include_once('screen/nav.php') ?>

    <div class="weatherBg">
        <div id="page" class="site">
            <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602"></div>
            <div class="tronix-template-home pt-1">
                <div data-elementor-type="wp-page" data-elementor-id="600" class="elementor elementor-600">
                    <?php include('screen/newpage.php') ?>
                    <?php include('screen/firstsection.php') ?>

                    <?php include('screen/our-technology.php') ?>

                    <?php include('screen/pms-page.php') ?>

                    <?php include('screen/banner.php') ?>

                    <?php include('screen/Reviews.php') ?>

                    <?php include('screen/homeblogpage.php') ?>

                    <?php include('screen/brand.php') ?>

                    <?php include('track.php') ?>

                    <!-- <?php include('screen/gallery.php') ?> -->

                    <Banner>
                        <div class="call-to-action-wrap">
                            <div class="container">
                                <div class="container text-center">
                                    <h2 class="txt-title"><b>Try</b> <span style="color:#b81265"
                                            class=""><b>Retrod</b></span><b>
                                        </b></h2>
                                    <p class="txt-content">
                                        Quick & Easy Migration.
                                        Zero Hidden Charges. The All-in-One PMS for Sales <br> Marketing, and
                                        Operations
                                        in
                                        Hotels and Vacation Rentals.</p>
                                    <a class="whatsapp_btn" href="https://retrodtech.com/register" target="_blank">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </Banner>

                    <!-- <div id="christmasHero"></div> -->

                    <?php include('screen/footer.php') ?>

                    <?php include('screen/whatsapp.php') ?>


                </div><!-- #page -->
                <!--comments section-->
                <script type='text/javascript'>
                    const lazyloadRunObserver = () => {
                        const dataAttribute = 'data-e-bg-lazyload';
                        const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);
                        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                            entries.forEach((entry) => {
                                if (entry.isIntersecting) {
                                    let lazyloadBackground = entry.target;
                                    const lazyloadSelector = lazyloadBackground.getAttribute(
                                        dataAttribute);
                                    if (lazyloadSelector) {
                                        lazyloadBackground = entry.target.querySelector(
                                            lazyloadSelector);
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





                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>
                <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'></script>
                <!--flex comments  & customer-->
                <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'>
                </script>
                <!--navbar scroll-->
                <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>

                <!-- <script src='christmas/Christmas.js'></script> -->


                <script>
                    let intro = document.querySelector('.intro');
                    let logoSpan = document.querySelectorAll('.logo span');
                    let isFirstLoad = true;

                    window.addEventListener('DOMContentLoaded', (e) => {
                        // Check if the animation has been played before
                        const hasAnimationPlayed = localStorage.getItem('animationPlayed');

                        if (!hasAnimationPlayed) {
                            document.getElementById('intro').style.display = 'block';
                            setTimeout(() => {
                                logoSpan.forEach((span, idx) => {
                                    setTimeout(() => {
                                        span.classList.add('active');
                                    }, (idx + 1) * 400);
                                });

                                setTimeout(() => {
                                    logoSpan.forEach((span, idx) => {
                                        setTimeout(() => {
                                            span.classList.remove('active');
                                            span.classList.add('fade');
                                        }, (idx + 1) * 10);
                                    });

                                    setTimeout(() => {
                                        intro.style.top = '-100vh';
                                    }, 0);

                                    // Set a flag in local storage to indicate that the animation has been played
                                    localStorage.setItem('animationPlayed', true);
                                }, 1000); // Adjust the timing based on your animation durations
                            });



                            e.preventDefault(); // Prevent default behavior of the event (e.g., click)
                        }
                    });
                </script>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>

            </div>
        </div>


        <!-- <div id="fountdationCon" class="d-none">
            <div class="popup-container">
                <div class="popup">
                    <button id="closeBtn">X</button>
                    <div class="balloon balloon1"></div>
                    <div class="balloon balloon2"></div>
                    <div class="balloon balloon3"></div>
                    <div class="balloon balloon4"></div>
                    <img src="https://retrodtech.com/img/4th-foundation-day.jpg" alt="" loading="lazy" decoding="async">
                    <button class="close-btn"></button>
                </div>
            </div>
        </div> -->

    </div>

</body>


<script>
    // window.addEventListener("load", function() {
    //     setTimeout(function() {
    //         document.getElementById("fountdationCon").classList.add("show");
    //     }, 2500);

    //     document.getElementById("closeBtn").addEventListener("click", function() {
    //         document.getElementById("fountdationCon").classList.remove("show");
    //     });
    // });

    function createConfetti() {
        const colors = ['#FF6B6B', '#77DDFF', '#FFCE54', '#A0D568', '#AC92EC'];
        const container = document.querySelector('.popup-container');

        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.animationDelay = Math.random() * 5 + 's';
            confetti.style.width = Math.random() * 10 + 8 + 'px';
            confetti.style.height = Math.random() * 8 + 6 + 'px';
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            confetti.style.borderRadius = Math.random() > 0.5 ? '50%' : '0';

            container.appendChild(confetti);
        }
    }

    // Close button functionality
    document.querySelector('.close-btn').addEventListener('click', function() {
        document.querySelector('.popup-container').style.opacity = 0;
        setTimeout(() => {
            document.querySelector('.popup-container').style.display = 'none';
            alert('Continue with the celebration! 🎉');
        }, 500);
    });

    // Initialize confetti on load
    window.addEventListener('load', createConfetti);
</script>

</html>
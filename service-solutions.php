<?php

include('admin/include/dbcon.php');

$sql = "SELECT title, content, date, file, url FROM blog";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


?>

<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en-US">
<meta https-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="description"
    content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod.">
<meta name="keywords"
    content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms">
<meta name="author" content="Retrod">
<title>"Blog Insights & Innovations: Explore the Retrod Blog"</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">



<?php include('screen/header.php') ?>

<style>
.container {
    margin-top: 20px;
}

.left-buttons {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.right-cards {
    display: none;
}

.right-cards.active {
    display: block;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.card {
    flex: 1 1 calc(33% - 15px);
    max-width: calc(33% - 7px);
}

@media (max-width: 768px) {
    .card {
        flex: 1 1 100%;
        max-width: 100%;
    }
}


.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    position: relative;
    width: 100%;
    max-width: 287px;
    /* margin: 10px; */
}

.card-buttons {
    /* position: absolute; */
    bottom: 10px;
    left: 10px;
    right: 10px;
    display: flex;
    justify-content: space-between;
    gap: 10px;
    padding: 6px 26px;
}

.card-buttons .btn {
    width: 49%;
    padding: 3px;
    font-size: 15px;
    text-align: center;
}

.left-btn {
    text-align: left;
}

.right-btn {
    text-align: right;
}
.site {
    overflow-x: visible !important;
}
/* Responsive Design */
@media (max-width: 768px) {
    .card {
        max-width: 100%;
    }

    .card-buttons .btn {
        width: 48%;
    }
}

@media (max-width: 576px) {
    .card-buttons .btn {
        width: 100%;
    }
}

.card img {
    width: 100%;
    height: auto;
    max-width: 22%;
    max-height: max-content;
    margin: 0px auto;
}

@media (min-width: 1200px) {
    .modal-xlg {
        width: 90%;
    }
}

.imPortantTxt {
    color: #000;
    font-weight: 700;
}

h3.integrationH {
    font-size: 19px;
    font-weight: 900;
    color: #b81265;
}
</style>



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

                    Our Integration Services </h2>





                </div>

            </div>

        </div>

    </div><!-- #page -->

    <div class="container text-center py-5">

        <div class="row">
            <!-- Left Side Buttons -->
            <div class="col-md-2">
                <h3 class="integrationH">Integration Services</h3>
                <div class="left-buttons">
                    <button class="btn btn-primary btn-block" data-target="cards1">payment gateway</button>
                    <!-- <button class="btn btn-secondary btn-block" data-target="cards2">Option 2</button> -->
                    <!-- <button class="btn btn-success btn-block" data-target="cards3">Option 3</button> -->
                </div>
            </div>

            <!-- Right Side Cards -->
            <div class="col-md-9">
                <div id="cards1" class="right-cards active">
                    <div class="card-container">
                        <div class="card p-3 border rounded shadow-sm">
                            <img src="img/easybuzz_Integrations_by_retrod.webp" alt="">
                            <h4>Easebuzz</h4>
                            <!-- <p>Details about Card 1A</p> -->
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn" data-bs-toggle="modal"
                                    data-bs-target="#Easebuzz">View More</button>
                            </div>
                        </div>
                        <div class="card p-3 border rounded shadow-sm">

                            <img src="img/hdfc_Integrationsby_retrod.webp" alt="">
                            <h4>HDFC Bank</h4>
                            <!-- <p>Details about Card 1B</p> -->
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn" data-bs-toggle="modal"
                                    data-bs-target="#HDFCBank">View More</button>
                            </div>
                        </div>
                        <div class="card p-3 border rounded shadow-sm">

                            <img src="img/phopne_pay_Integrations_by_retrod.webp" alt="">
                            <h4>Phonepe</h4>
                            <!-- <p>Details about Card 1B</p> -->
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn" data-bs-toggle="modal"
                                    data-bs-target="#phonePay">View More</button>
                            </div>
                        </div>
                        <div class="card p-3 border rounded shadow-sm">

                            <img src="img/rozarpay_Integrations_by_retrod.webp" alt="">
                            <h4>Razorpay</h4>
                            <!-- <p>Details about Card 1B</p> -->
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn" data-bs-toggle="modal"
                                    data-bs-target="#Razorpay">View More</button>
                            </div>
                        </div>
                        <div class="card p-3 border rounded shadow-sm">

                            <img src="img/upay_Integrations_by_retrod.webp" alt="">
                            <h4>Card 1B</h4>
                            <!-- <p>Details about Card 1B</p> -->
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn" data-bs-toggle="modal"
                                    data-bs-target="#upay">View More</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- <div id="cards2" class="right-cards">
                    <div class="card-container">
                        <div class="card p-3 border rounded shadow-sm">

                            <h4>Card 2A</h4>
                            <p>Details about Card 2A</p>
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn">View More</button>
                            </div>
                        </div>
                        <div class="card p-3 border rounded shadow-sm">

                            <h4>Card 2B</h4>
                            <p>Details about Card 2B</p>
                            <div class="card-buttons">
                                <button class="btn btn-outline-secondary left-btn">Contact Us</button>
                                <button class="btn btn-outline-secondary right-btn">View More</button>
                            </div>

                        </div>
                    </div>

                    <div id="cards3" class="right-cards">
                        <div class="card-container">
                            <div class="card p-3 border rounded shadow-sm">

                                <h4>Card 3A</h4>
                                <p>Details about Card 3A</p>
                                <div class="card-buttons">
                                    <button class="btn btn-outline-secondary left-btn">Left</button>
                                    <button class="btn btn-outline-secondary right-btn">Right</button>
                                </div>
                            </div>
                            <div class="card p-3 border rounded shadow-sm">

                                <h4>Card 3B</h4>
                                <p>Details about Card 3B</p>
                                <div class="card-buttons">
                                    <button class="btn btn-outline-secondary left-btn">Left</button>
                                    <button class="btn btn-outline-secondary right-btn">Right</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./script.js"></script>
    </div>

    <?php include('screen/footer.php') ?>



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
    const buttons = document.querySelectorAll(".left-buttons button");
    const cardSets = document.querySelectorAll(".right-cards");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            const target = button.getAttribute("data-target");

            cardSets.forEach((set) => {
                set.classList.remove("active");
            });

            document.getElementById(target).classList.add("active");
        });
    });
    </script>

</body>
<!-- Modal Easebuzz -->
<div class="modal fade" id="Easebuzz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Simplify Your Growth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <h6>About integration</h6>
                <p>This interface helps automate your booking system, accept direct online reservations from guests, and
                    provide secure online payments to your customers.</p>
                <h6>Key Benefits</h6>
                <ul>
                    <li>Provide a smooth checkout experience</li>
                    <li>Facilitates credit card acceptance through the PMS</li>
                    <li>Make payment collection convenient and faster</li>
                    <li>Avoid the hassles of bank transfers </li>
                    <li>Saves time</li>
                </ul>
                <h6>About Easebuzz</h6>
                <p>Easebuzz is an Indian fintech company that offers a comprehensive suite of payment solutions tailored
                    for businesses of all sizes. It simplifies the way companies handle financial transactions, enabling
                    them to collect payments, manage billing, and integrate payment options seamlessly.</p>
                <div class="thanksBox" style="text-align: center;">
                    <div class="boxDetails">
                        <p class="imPortantTxt">Start Using Easebuzz with Retrod Technologies.</p>
                        <button class="btn btn-secondary">Register Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal HDFC Bank -->
<div class="modal fade" id="HDFCBank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Simplify Your Growth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <h6>About integration</h6>
                <p>This interface helps automate your booking system, accept direct online reservations from guests, and
                    provide secure online payments to your customers.</p>
                <h6>Key Benefits</h6>
                <ul>
                    <li>Multiple Payment Options</li>
                    <li>Seamless Integration</li>
                    <li>Advanced Security</li>
                    <li>Customizable Checkout</li>
                    <li>Analytics and Reporting</li>
                    <li>Recurring Payments</li>
                    <li>24/7 Support</li>
                </ul>
                <h6>About HDFC Bank</h6>
                <p>HDFC Bank Payment Gateway is one of India's leading payment processing solutions, enabling businesses
                    to accept online payments securely and efficiently. It is designed to cater to businesses of all
                    sizes, from startups to large enterprises, offering a wide range of payment methods and advanced
                    security features.

                </p>
                <div class="thanksBox" style="text-align: center;">
                    <div class="boxDetails">
                        <p class="imPortantTxt">Start Using HDFC Bank with Retrod Technologies.</p>
                        <button class="btn btn-secondary">Register Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- Modal Phone Pay -->
<div class="modal fade" id="phonePay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Simplify Your Growth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <h6>About integration</h6>
                <p>This interface helps automate your booking system, accept direct online reservations from guests, and
                    provide secure online payments to your customers.</p>
                <h6>Key Benefits</h6>
                <ul>
                    <li>Seamless Payments</li>
                    <li>Diverse Services</li>
                    <li>Merchant Support</li>
                    <li>Secure and Reliable</li>
                    <li>Insurance Solutions</li>
                    <li>Rewards and Offers</li>
                    <li>User-Friendly Interface</li>
                </ul>
                <h6>About Phonepe</h6>
                <p>PhonePe is one of India’s leading digital payment platforms, enabling users to make seamless
                    financial transactions directly from their bank accounts. Launched in December 2015, it operates
                    under the Unified Payments Interface (UPI) framework developed by the National Payments Corporation
                    of India (NPCI). PhonePe has become a trusted name in the fintech sector, offering a wide range of
                    services beyond payments, including investments, insurance, and shopping.

                </p>
                <div class="thanksBox" style="text-align: center;">
                    <div class="boxDetails">
                        <p class="imPortantTxt">Start Using Phonepe with Retrod Technologies.</p>
                        <button class="btn btn-secondary">Register Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- Modal razorpay -->
<div class="modal fade" id="Razorpay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Simplify Your Growth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <h6>About integration</h6>
                <p>This interface helps automate your booking system, accept direct online reservations from guests, and
                    provide secure online payments to your customers.</p>
                <h6>Key Benefits</h6>
                <ul>
                    <li>Payment Gateway Services</li>
                    <li>RazorpayX (Business Banking)</li>
                    <li>Razorpay Capital</li>
                    <li>Razorpay Subscriptions</li>
                    <li>Security</li>
                    <li>Developer-Friendly API</li>
                    <li>Razorpay Thirdwatch</li>
                </ul>
                <h6>About Razorpay</h6>
                <p>Razorpay is one of India’s most popular fintech companies, providing comprehensive payment solutions
                    for businesses of all sizes. Founded in 2014 by Harshil Mathur and Shashank Kumar, Razorpay is a
                    full-stack financial technology company that enables merchants to accept, process, and disburse
                    payments. Its robust suite of products also includes business banking, lending, and payroll
                    management solutions.



                </p>
                <div class="thanksBox" style="text-align: center;">
                    <div class="boxDetails">
                        <p class="imPortantTxt">Start Using Razorpay with Retrod Technologies.</p>
                        <button class="btn btn-secondary">Register Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- Modal U-pay -->
<div class="modal fade" id="upay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Simplify Your Growth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <h6>About integration</h6>
                <p>This interface helps automate your booking system, accept direct online reservations from guests, and
                    provide secure online payments to your customers.</p>
                <h6>Key Benefits</h6>
                <ul>
                    <li>Multi-Payment Options</li>
                    <li>Business Focused</li>
                    <li>Custom Integrations</li>
                    <li>Secure Transactions</li>
                    <li>Reporting and Analytics</li>

                </ul>
                <h6>About UPay</h6>
                <p>UPay is a digital payment solution that facilitates secure and seamless financial transactions for
                    businesses and individuals. While it shares similarities with popular platforms like UPI, UPay often
                    refers to specific custom payment solutions provided by various fintech companies or software
                    tailored for businesses to handle payments, billing, and invoicing efficiently.



                </p>
                <div class="thanksBox" style="text-align: center;">
                    <div class="boxDetails">
                        <p class="imPortantTxt">Start Using UPay with Retrod Technologies.</p>
                        <button class="btn btn-secondary">Register Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>





</html>
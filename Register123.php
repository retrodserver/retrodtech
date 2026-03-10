<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

</head>

<body>
    <?php include('screen/nav.php') ?>

</body>

</html>


<!doctype html>

<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta https-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="description"
    content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod.">
<meta name="keywords"
    content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms">
<meta name="author" content="Retrod">

<title>"Meet the Team: The Visionaries Behind Retrod Technologies"</title>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<link rel="shortcut icon" href="img/favicon_inn_logo.png" type="image/x-icon">
<link href="images/favicon.ico" rel="shortcut icon">

<link rel="stylesheet" href="style.css">


<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    /* Default to a single column */
    gap: 40px;
    margin: 70px auto;
    /* max-width: 1000px; */
    padding: 20px;
}

@media (min-width: 768px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr);
        /* 2 columns on larger screens */
    }
}

@media (min-width: 1024px) {
    .grid-container {
        grid-template-columns: repeat(3, 1fr);
        /* 3 columns on even larger screens */
    }
}

.grid-item {
    text-align: center;
    border-radius: 10px;
    border: 2px solid #fbb03b;
    padding: 20px;
    position: relative;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
}

.circle-icon {
    display: flex;
    background-color: white;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    overflow: hidden;
    margin: -40px auto 0 auto;
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    border: 2px solid #fbb03b;
    background-color: black;
}

.circle-icon img {
    width: 80%;
    height: auto;
}

h3 {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
}

/* cool hover effect */
.grid-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* lift up effect */
.grid-item:hover {
    transform: translateY(-5px);
}

.grid-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    /* Default to a single column */
    gap: 40px;
    margin: 70px auto;
    /* max-width: 1000px; */
    padding: 20px;
}

@media (min-width: 768px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr);
        /* 2 columns on larger screens */
    }
}

@media (min-width: 1024px) {
    .grid-container {
        grid-template-columns: repeat(3, 1fr);
        /* 3 columns on even larger screens */
    }
}

.grid-item {
    text-align: center;
    border-radius: 10px;
    border: 2px solid #fbb03b;
    padding: 20px;
    position: relative;
    z-index: 1;
    transition: transform 0.3s ease-in-out;
}

.circle-icon {
    display: flex;
    background-color: white;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    overflow: hidden;
    margin: -40px auto 0 auto;
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    border: 2px solid #fbb03b;
    background-color: black;
}

.circle-icon img {
    width: 80%;
    height: auto;
}

h3 {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
}

/* cool hover effect */
.grid-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* lift up effect */
.grid-item:hover {
    transform: translateY(-5px);
}

.grid-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.grid-item:hover::before {
    opacity: 1;
}

.our-team {
    padding: 30px 0 40px;
    margin-bottom: 30px;
    background-color: #fff;
    text-align: center;
    overflow: hidden;
    position: relative;
    box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;
    height: 100%;
}

.our-team .picture {
    display: inline-block;
    height: 130px;
    width: 130px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
}

.our-team .picture::before {
    content: "";
    width: 100%;
    height: 0;
    border-radius: 50%;
    background-color: #1369ce;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 0.9;
    transform: scale(3);
    transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
    height: 100%;
}

.our-team .picture::after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #1369ce;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

.our-team .picture img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
}

.our-team .title {
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize;
}

.our-team .social {
    width: 100%;
    padding: 0;
    margin: 0;
    background-color: #1369ce;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;
}

.our-team:hover .social {
    bottom: 0;
}

.our-team .social li {
    display: inline-block;
}

.our-team .social li a {
    display: block;
    padding: 10px;
    font-size: 17px;
    color: white;
    transition: all 0.3s ease 0s;
    text-decoration: none;
}

.our-team .social li a:hover {
    color: #1369ce;
    background-color: #f7f5ec;
}

.grid-item:hover::before {
    opacity: 1;
}

.content {
    margin: 30px;
}

.col-lg-3 {
    margin-bottom: 23px;
}
</style>
<?php include('screen/header.php') ?>

<style>
/* @media only screen and (max-width: 900px) {

    .chose_section .left-top {}

} */


.register-form {
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 600px;
    margin: 30px;


}

.register-form h5 {
    font-family: 'Playfair Display', serif;
    letter-spacing: 4px;
    color: black;
    text-shadow: 3px 5px 7px white;
    font-weight: 900;
    text-align: center;
    margin-bottom: 20px;
}

.input-box {
    margin-bottom: 15px;
}

.input-box span.details {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #333;
}

.input-box input,
.input-box select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    font-weight: 600;
    color: black;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.input-box select {
    height: 45px;
}

.footerbtn {
    text-align: center;
}

.footerbtn input {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 900;
    color: #ffffff;
    background: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-shadow: none;
}

.footerbtn input:hover {
    background: #444;
}
</style>

<?php

$executive = array(
    1 => array(
        'id' => 1,
        'name' => 'Pravat Kumar Panda',
        'position' => 'Founder',
        'img' => 'img/pravatsirprofile.jfif',
        'linkedin' => 'https://www.linkedin.com/in/pravatkp/'
    ),
    2 => array(
        'id' => 2,
        'name' => 'Subhasandhya Panda',
        'position' => 'Co-Founder & COO',
        'img' => 'img/sandhyamamprofile.jfif',
        'linkedin' => 'https://www.linkedin.com/in/subhasandhya/'
    ),
    3 => array(
        'id'=>3,
        'name'=>'Amit Kumar Sahu',
        'position'=>'CTO',
        'img'=>'img/ammit-sahu.jpg',
        'linkedin'=>'https://www.linkedin.com/in/kumaramit123/'
    )

);


$technical = array(
    1 => array(
        'id' => 3,
        'name' => 'Avinab Giri',
        'position' => 'Head of Technology',
        'img' => 'img/avinabsirprofile.jfif',
        'linkedin' => 'https://www.linkedin.com/in/avinab-giri'
    ),
);


    $allTeams = array_merge($executive, $technical);

 
    
?>

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


    <section class="register-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header text-white text-center">
                            <h5>Register Now</h5>
                        </div>
                        <div class="card-body" style="padding: 30px">
                            <form id="propertyRegisterForm" method="GET" action="registerProperty.php">
                                <!-- Name -->
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <div class="mb-1" >
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="uname"
                                                placeholder="Name" style="padding: 10px 15px;"  required>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6 mb-1">
                                        <div class="mb-1" >
                                            <label for="mail" class="form-label">Email Id</label>
                                            <input type="email" class="form-control" id="mail" name="umail"
                                                placeholder="testmail@gmail.com" style="padding: 10px 15px;" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Phone Number -->
                                <div class="mb-1" >
                                    <label for="number" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="number" name="uphone"
                                        placeholder="012-345-6789" style="padding: 10px 15px;">
                                </div>
                                <!-- OTP -->
                                <div class="mb-2 d-none" id="otpbox">
                                    <label for="otp" class="form-label">Enter your OTP</label>
                                    <input type="number" class="form-control" id="otp" name="otp"
                                        placeholder="Enter your OTP here">
                                </div>
                                <!-- Hotel Name -->
                                <div class="mb-1" >
                                    <label for="hotelname" class="form-label">Hotel Name</label>
                                    <input type="text" class="form-control" id="hotelname" name="hotelname"
                                        placeholder="Hotel Name" style="padding: 10px 15px;" required>
                                </div>
                                <!-- Inventory and Plans -->
                                <div class="row">
                                    <div class="col-md-6 mb-1" >
                                        <label for="totalinventory" class="form-label">Total Inventory</label>
                                        <input type="number" class="form-control" id="totalinventory"
                                            name="totalinventory" placeholder="50" style="padding: 10px 15px;"n required>
                                    </div>
                                    <div class="col-md-6 mb-1" style="padding: 10px 15px;">
                                        <label for="plan" class="form-label">Choose Plans</label>
                                        <select class="form-select" id="plan" name="plan">
                                            <option value="" disabled selected hidden>Choose</option>
                                            <option value="3month">Starter</option>
                                            <option value="6month">Plus</option>
                                            <option value="1year">Elite</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary"
                                        style="Background-color:#b81265">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'screen/footer.php'?>

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
    AOS.init();
    </script>



</body>





</html>
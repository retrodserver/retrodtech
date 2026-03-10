<?php
$servername = "localhost";
$username = "vwqmwweafd";
$password = "Y2AQxDxzSP";
$dbname = "vwqmwweafd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Email, Phonenumber FROM contacts ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// echo $row['Phonenumber'];
// echo $row['Email'];
?>
      <script src="https://cdn.tailwindcss.com"></script>

<style>
    /* basic overrides */
    .elementor a {
        font-weight: 400 !important;
    }

    div#sticky-menu {
        padding: 1px;
    }

    .header-one-call-icon {
        box-shadow: -1px 0px 3px 0px inset black;
    }

    /* mobile menu link borders */
    .tronix-mobile-menu ul li a {
        border-bottom: 1px solid;
    }

    /* hiring animation */
    span.hiring-txt {
        font-size: 8px;
        color: #ff0000;
        position: absolute;
        top: -15px;
        animation: heartbeat 1.5s infinite ease-in-out;
        white-space: nowrap;
        left: -2px;
    }

    @keyframes heartbeat {
        0% {
            transform: scale(1);
        }

        30% {
            transform: scale(1.2);
        }

        60% {
            transform: scale(1);
        }

        100% {
            transform: scale(1);
        }
    }

    /* header navigation styling - make selector more specific to avoid overrides */
    header.header-area .header_nav {
        padding: 8px 13px;
    }

    body {
        width: 100%;
        height: 100%;
    }

    /* layout for firstdivSec */
    /* .firstdivSec {
        height: calc(100vh - 140px) !important;
        display: flex;
        align-items: center;
    } */
    .firstdivSec {
        min-height: calc(100vh - 140px);
        /* Use min-height for flexibility */
        display: flex;
        align-items: center;
        justify-content: center;
        /* Center content horizontally */
        padding: 20px;
        /* Add padding for smaller screens */
        box-sizing: border-box;
        /* Include padding and borders in height/width */
    }

    /* For tablets and smaller devices */
    @media (max-width: 768px) {
        .firstdivSec {
            flex-direction: column;
            /* Stack content vertically */
            padding: 15px;
            /* Adjust padding */
            text-align: center;
            /* Center-align text for better readability */
        }
    }

    /* For very small screens */
    @media (max-width: 576px) {
        .firstdivSec {
            padding: 10px;
            /* Further reduce padding */
        }
    }
    section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
    margin-top: 50px;
    background-color: red !important;
}
</style>

<!-- Navbar -->
<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-2">
    <div class="flex justify-between items-center h-16">

      <!-- Left: Logo -->
      <div class="flex-shrink-0">
        <a href="https://retrodtech.com" class="text-2xl font-bold text-blue-600">
            <img loading="lazy" width="119" height="47"
                                            src="https://retrodtech.com/img/retrod_logo_travel_tech.png" class="custom-logo mobileLogoRetrod"
                                            alt="retrod_logo" decoding="async">
        </a>
      </div>

      <!-- Center: Menu (Desktop) -->
      <div class="hidden md:flex space-x-8 items-center">

        <a href="https://retrodtech.com" class="text-gray-700 hover:text-blue-600">Home</a>

        <!-- Dropdown -->
<div class="relative group">
  <button class="text-gray-700 hover:text-blue-600 py-2">
    Products ▾
  </button>

  <div class="absolute left-0 top-full w-44 bg-white border rounded-lg shadow-lg 
              hidden group-hover:block z-50">
    <a href="https://retrodtech.com/pms" class="block px-4 py-2 hover:bg-gray-100">Hotel PMS</a>
    <a href="https://retrodtech.com/restaurant-pos" class="block px-4 py-2 hover:bg-gray-100">Restaurant POS</a>
    <a href="https://retrodtech.com/product?id=booking-engine" class="block px-4 py-2 hover:bg-gray-100">Booking Engine</a>
  </div>
</div>

        <a href="https://retrodtech.com/blog" class="text-gray-700 hover:text-blue-600">Blogs</a>
        <a href="https://techintourism.com/" target="_blank" class="text-gray-700 hover:text-blue-600">Tech in Tourism</a>
        
      </div>

      <!-- Right: Button -->

      <div class="col-auto d-none d-xxl-block ">
                                                <div class="header-one-button-area">
                                                    <div class="header-one-call-us-area">
                                                        <a href="callto:<?php echo $row['Phonenumber'] ?>">
                                                            <div class="header-one-call-text">
                                                                <div class="header-one-call-title"> Quick Call
                                                                </div>
                                                                <div class="header-one-call-number"><a
                                                                        href="tel:<?php echo $row['Phonenumber'] ?>"><?php echo $row['Phonenumber'] ?></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="header-one-botton button-wiggle">
                                                        <a href="https://retrodtech.com/podcast" target="_blank"
                                                            rel="nofollow" class=" theme-btns" target="_blank">
                                                            Podcast</a>
                                                    </div>
                                                </div>
                                            </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="menu-btn" class="text-gray-700 focus:outline-none text-2xl">
          ☰
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
    <a href="https://retrodtech.com" class="block py-2 text-gray-700">Home</a>
    <!-- Mobile Dropdown -->
    <div>
      <button id="dropdown-btn" class="w-full text-left py-2 text-gray-700">
        Products ▾
      </button>
      <div id="dropdown-menu" class="hidden pl-4">
        <a href="https://retrodtech.com/pms" class="block py-1 text-gray-600">Hotel PMS</a>
        <a href="https://retrodtech.com/restaurant-pos" class="block py-1 text-gray-600">Restaurant POS</a>
        <a href="https://retrodtech.com/product?id=booking-engine" class="block py-1 text-gray-600">Booking Engine</a>
      </div>
    </div>
    <a href="https://retrodtech.com/blog" class="block py-2 text-gray-700">Blogs</a>
    <a href="podcast"  target="_blank" rel="nofollow" class="block py-2 text-gray-700">Podcast</a>
    <a href="https://retrodtech.com/techtalk.php" class="block py-2 text-gray-700">Tech Talk</a>
    <a href="https://retrodtech.com/career" class="block py-2 text-gray-700">Careers</a>
    <a href="https://login.retrod.app" class="block py-2 text-gray-700">Hotel Login</a>
  </div>
</nav>
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const dropdownBtn = document.getElementById('dropdown-btn');
  const dropdownMenu = document.getElementById('dropdown-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  dropdownBtn.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
  });
</script>

<section
    class="hidden elementor-section elementor-top-section elementor-element elementor-element-c61e00a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
    data-id="c61e00a" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-472e5cb"
            data-id="472e5cb" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-516cafb elementor-widget elementor-widget-tronix_header_template_one"
                    data-id="516cafb" data-element_type="widget" data-widget_type="tronix_header_template_one.default">
                    <div class="elementor-widget-container">
                        <!-- Mobile Menu -->

                        <div class="tronix-menu-wrapper">
                            <div class="tronix-menu-area text-center">
                                <button class="tronix-menu-toggle"><i class="bi bi-x-lg"></i></button>
                                <div class="mobile-logo">
                                    <a href="https://retrodtech.com" class="custom-logo-link" rel="home"
                                        aria-current="page">
                                        <img loading="lazy" width="119" height="47"
                                            src="img/retrod_logo_travel_tech.png" class="custom-logo mobileLogoRetrod"
                                            alt="retrod_logo" decoding="async"></a>
                                </div>
                                <div class="tronix-mobile-menu">
                                    <ul id="mainmenu" class="">
                                        <li id="menu-item-903"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903">
                                            <a href="https://retrodtech.com">Home</a>
                                        </li>
                                        <li id="menu-item-970"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-970 no-mega ">
                                            <a href="javascript:void(0)">Products</a>
                                            <ul class="sub-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                    <a href="https://retrodtech.com/pms"
                                                        style="padding: 7px 13px;">Hotel PMS</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                    <a href="https://retrodtech.com/restaurant-pos"
                                                        style="padding: 7px 13px;">Restaurant
                                                        POS</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                    <a href="https://retrodtech.com/product?id=booking-engine" target="_blank"
                                                        style="padding: 7px 13px;">Booking
                                                        Engine</a>

                                                </li>


                                            </ul>
                                        </li>
                                        <!-- <li id="menu-item-1023"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023">
                                            <a href="https://retrodtech.com/price">Pricing</a>
                                        </li> -->
                                        <!-- <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023">
                                            <a href="https://retrodtech.com/partner">Partner Program</a>
                                        </li> -->


                                        <li id="menu-item-903"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903">
                                            <a href="https://retrodtech.com/blog">Blogs</a>
                                        </li>
                                        <li>
                                            <a class="" href="podcast" target="_blank" rel="nofollow"> Podcast</a>
                                        </li>
                                        <li>
                                            <a href="techtalk.php" class="">Tech Talk</a>
                                        </li>

                                        <li>
                                            <a href="https://retrodtech.com/career" target="_blank" rel="nofollow">
                                                Careers </a>
                                        </li>
                                        <li>
                                            <a href="https://login.retrod.app" target="_blank" rel="nofollow">
                                                Hotel Login</a>
                                        </li>
                                        <!-- <li>
                                            <a href="https://thebasilhotels.com/" target="_blank"
                                                rel="nofollow">
                                                The Basil By Retrod</a>
                                        </li> -->


                                    </ul>
                                </div>
                                <div class="col-auto d-none d-xxl-block ">
                                    <div class="header-one-button-area">
                                        <div class="header-one-call-us-area">
                                            <a href="">
                                                <div class="header-one-call-text">
                                                    <div class="header-one-call-title"> Quick Call
                                                    </div>
                                                    <div class="header-one-call-number"><a class="call_info"
                                                            href="tel:<?php echo $row['Phonenumber'] ?>"><?php echo $row['Phonenumber'] ?></a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="header-one-botton">
                                            <a href="youtubepage" target="_blank" rel="nofollow" class=" theme-btns"
                                                target="_blank">
                                                You Tube</a>

                                        </div>
                                        <!-- <div class="header-one-botton second_btn">
                                            <a href="https://techintourism.com/" target="_blank" rel="nofollow"
                                                class=" theme-btns" target="_blank">
                                                Events </a>

                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end Mobile menu -->
                        <header class="header-area site-header">
                            <div class="tronix-header header-template-one">
                                <div class="header_nav">
                                    <div class="container ">
                                        <div class="row row2">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-12 ">
                                                <div class="header-time">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-12 col-12 header-one-top-right">
                                                <div class="header-one-links">
                                                    <ul>
                                                        <li>

                                                            <a class="youtube_btn podcast_btn " href="podcast"
                                                                target="_blank" rel="nofollow">
                                                                Podcast</a>
                                                        </li>
                                                        <!--main nav top head--->
                                                        <!-- <li>
                                                        <a class="events_btn mt-1  mr-5" href="https://thebasilhotels.com/" target="_blank" rel="nofollow" style="
    margin-right: 18px;
">
                                                                The Basil By Retrod</a>
                                                        </li> -->
                                                        <!-- <li>
                                                            <a class="events_btn mt-1" href="https://techintourism.com/"
                                                                target="_blank" rel="nofollow">
                                                                Events</a>
                                                        </li> -->
                                                        <li class="care_btn mt-1">

                                                            <!-- <a href="https://retrodtech.com/career" target="_blank"
                                                                rel="nofollow">

                                                                Careers

                                                            </a> -->
                                                            <a href="https://retrodtech.com/career" target="_blank"
                                                                rel="nofollow"
                                                                style="position: relative; display: inline-block;">
                                                                Careers
                                                                <span class="hiring-txt">We Are Hiring</span>
                                                            </a>
                                                        </li>



                                                    </ul>
                                                </div>
                                                <!-- <div class=" mr-1 mt-1">
                                                    <a class="mail_area"
                                                        href="mailto:<?php echo $row['Email'] ?>"><?php echo $row['Email'] ?></a>
                                                </div> -->
                                                <div class="header-one-links ml-3">
                                                    <ul>
                                                        <li>
                                                            <a class="events_btn mt-1" style="margin-left: 25px; color:#B81265"
                                                                href="https://login.retrod.app/login" target="_blank"
                                                                rel="nofollow">
                                                                Hotel Login</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-area navtop_area" id="sticky-menu">
                                    <div class="container" style="max-width: 1260px !important;">
                                        <div class="row align-items-center" style="justify-content: space-between;">
                                            <div class="header-logo col-auto" style="position:relative;">

                                                <a href="https://retrodtech.com" class="custom-logo-link" rel="home"
                                                    aria-current="page"><img loading="lazy" width="159" height="47"
                                                        src="img/retrod_logo_travel_tech.png" class="custom-logo"
                                                        alt="retrod_logo" decoding="async" /></a>
                                            </div>
                                            <div class="col-auto">
                                                <nav class="main-menu d-none d-lg-inline-block">
                                                    <ul id="mainmenu" class="">
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903">
                                                            <a href="https://retrodtech.com">Home</a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-970 no-mega ">
                                                            <a href="javascript:void(0)">Products</a>
                                                            <ul class="sub-menu">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                    <a href="https://retrodtech.com/pms"
                                                                        style="padding: 7px 13px;">Hotel PMS</a>

                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                    <a href="https://retrodtech.com/restaurant-pos"
                                                                        style="padding: 7px 13px;">Restaurant
                                                                        POS</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                    <a href="https://retrodtech.com/product?id=booking-engine"
                                                                        style="padding: 7px 13px;">Booking
                                                                        Engine</a>
                                                                </li>

                                                            </ul>

                                                            <!-- <ul class="sub-menu d-none">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                    <a href="">Product</a>
                                                                    <ul class="sub-menu">
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                            <a href="https://retrodtech.com/pms"
                                                                                style="padding: 7px 13px;">Hotel PMS</a>
                                                                            <a href="https://retrodtech.com/restaurant-pos"
                                                                                style="padding: 7px 13px;">Restaurant
                                                                                POS</a>
                                                                            <a href="https://retrodtech.com/product.php?id=web-master"
                                                                                style="padding: 7px 13px;">
                                                                                Web master</a>
                                                                            <a href="https://retrodtech.com/product.php?id=booking-engine"
                                                                                style="padding: 7px 13px;">Booking
                                                                                Engine</a>

                                                                            <a href="https://retrodtech.com/product.php?id=google_hotel_center"
                                                                                style="padding: 7px 13px;">Google Hotel
                                                                                Center</a> 
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                    <a href="">Service</a>
                                                                    <ul class="sub-menu" style="top: -60px;">
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971">
                                                                            <a href="https://retrodtech.com/marketingautomation"
                                                                                style="padding: 7px 13px;">Marketing
                                                                                Automation</a>
                                                                            <a href="https://retrodtech.com/emailsolution"
                                                                                style="padding: 7px 13px;">
                                                                                Email solutions</a>
                                                                            <a href="https://retrodtech.com/paymentgateway"
                                                                                style="padding: 7px 13px;">Payment
                                                                                integration</a>
                                                                            <a href="https://retrodtech.com/Visual_Media_Solution"
                                                                                style="padding: 7px 13px;">Visual
                                                                                content</a>
                                                                            <a href="https://retrodtech.com/Digital_Reception"
                                                                                style="padding: 7px 13px;">Digital
                                                                                Reception</a>
                                                                            <a href="https://retrodtech.com/Google_My_Business"
                                                                                style="padding: 7px 13px;">Google My
                                                                                business</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>


                                                            </ul> -->
                                                        </li>
                                                        <!-- <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023">
                                                            <a href="https://retrodtech.com/price">Pricing</a>
                                                        </li> -->

                                                        <!-- <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023">
                                                            <a href="https://retrodtech.com/partner">Partner Program</a>
                                                        </li> -->

                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023">
                                                            <a href="https://techintourism.com/" target="_blank">Tech in Tourism </a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903">
                                                            <a href="https://retrodtech.com/blog">Blogs</a>
                                                        </li>

                                                    </ul>
                                                </nav>
                                                <button type="button"
                                                    class="tronix-menu-toggle d-inline-block d-lg-none"><i
                                                        class="fas fa-bars"></i></button>
                                            </div>
                                            <div class="col-auto d-none d-xxl-block ">
                                                <div class="header-one-button-area">
                                                    <div class="header-one-call-us-area">
                                                        <a href="callto:<?php echo $row['Phonenumber'] ?>">
                                                            <div class="header-one-call-text">
                                                                <div class="header-one-call-title"> Quick Call
                                                                </div>
                                                                <div class="header-one-call-number"><a
                                                                        href="tel:<?php echo $row['Phonenumber'] ?>"><?php echo $row['Phonenumber'] ?></a>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="header-one-botton button-wiggle">
                                                        <a href="https://retrodtech.com/podcast" target="_blank"
                                                            rel="nofollow" class=" theme-btns" target="_blank">
                                                            Podcast</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <script>
                            (function($) {
                                "use strict";
                                jQuery(".site").addClass("header-template-one-activate");
                            })(jQuery);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
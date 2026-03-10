<!doctype html>
<?php
require_once __DIR__ . '/include/seo.php';

$pageTitle       = "Careers at Retrod Technologies | Join Our Hotel Tech Team";
$pageDescription = "Explore career opportunities at Retrod Technologies. Join our innovative team building hotel management software and travel technology solutions.";
$pageKeywords    = "retrod careers, hotel tech jobs, travel technology careers";
?>

<html lang="en-US">


<head>
    <?php seo_meta($pageTitle, $pageDescription, $pageKeywords); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Open Graph -->
    <meta property="og:site_name" content="Retrod Technologies">
    <meta property="og:title" content="Careers at Retrod Technologies">
    <meta property="og:description" content="Join Retrod Technologies and build the future of hotel software and travel technology solutions.">
    <meta property="og:url" content="https://retrodtech.com/career">
    <meta property="og:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Careers at Retrod Technologies">
    <meta name="twitter:description" content="Explore job opportunities at Retrod Technologies and grow your career in travel and hotel technology.">
    <meta name="twitter:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">

    <link rel="icon" href="https://retrodtech.com/img/favicon_io/favicon.ico" type="image/x-icon">

    <?php include('screen/uiComp.php') ?>



    <meta charset="UTF-8">
    <?php include('screen/header.php') ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "JobPosting",
            "title": "Software Developer",
            "description": "Retrod Technologies is hiring a Software Developer to build hotel management software and travel technology solutions.",
            "identifier": {
                "@type": "PropertyValue",
                "name": "Retrod Technologies",
                "value": "RETROD-DEV-001"
            },
            "datePosted": "2026-03-01",
            "employmentType": "FULL_TIME",
            "hiringOrganization": {
                "@type": "Organization",
                "name": "Retrod Technologies",
                "sameAs": "https://retrodtech.com",
                "logo": "https://retrodtech.com/img/retrod_logo_travel_tech.png"
            },
            "jobLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "India"
                }
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "How can I apply for a job at Retrod Technologies?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can apply through the career page on our website by submitting your resume."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What technologies does Retrod use?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Retrod works on hotel software, booking engines, travel technology, and cloud-based hospitality solutions."
                    }
                }
            ]
        }
    </script>

    <style id='global-styles-inline-css'>
        .header_nav {
            padding: 7px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .header-one-top-right {
            font-size: 19px !important;
        }

        .header-one-top-right ul li {
            color: red;
        }

        .jobopenings {
            background: #001dffa1;
            color: white;
            padding: 7px;
            border-radius: 45px;
            margin: 5px;
        }

        .modeofjob {
            background: #31c864a1;
            padding: 7px;
            border-radius: 30px;
            margin: 5px;
        }

        .salary {
            background: #caca5694;
            padding: 7px;
            border-radius: 23px;
            margin: 5px;
        }

        .job-post img {
            width: 14%;
        }

        .main-menu a {
            font-weight: 400 !important;
            font-size: 19px;
            box-shadow: none;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .job-post.job-post-list .w-130px {
                width: 168px !important;
            }
        }

        .wrapper {
            width: 88%;
            margin: 0 auto;
        }

        .wrapper img {

            border-radius: 10px;
        }

        .wrapper>div {
            border-radius: 10px;
            border-radius: 5px;
            background-color: transparent;

            color: black;
        }

        @media screen and (max-width: 930px) {
            .wrapper {
                display: flex !important;
                width: 100%;
                justify-content: center !important;
                align-items: center !important;
                flex-direction: column !important;

            }
        }

        * {
            box-sizing: border-box;
        }

        .wrapper {

            margin: 0 auto;
            margin-bottom: 20px;
        }

        .wrapper>div {

            border-radius: 5px;
            background-color: rgb(7 6 6 / 12%);
            padding: 1em;
            color: #d9480f;

        }

        .wrapper img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 100%;
        }

        img:hover {
            transform: scale(1.1);
            /* Zoom in effect on hover */
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
            grid-auto-rows: minmax(100px, auto);
        }

        .one {
            grid-column: 1 / 2;
            grid-row: 1;
        }

        .two {
            grid-column: 2 / 4;
            grid-row: 1 / 3;
        }

        .three {
            grid-column: 1;
            grid-row: 2 / 4;
        }

        .four {
            grid-column: 3;
            grid-row: 3;
        }

        .five {
            grid-column: 1;
            grid-row: 4;
        }

        .six {
            grid-column: 2;
            grid-row: 4;
        }

        .seven {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .eight {
            grid-column: 3;
            grid-row: 4;
        }

        .nine {
            grid-row: 5;
            grid-column: 1;
        }

        .ten {
            grid-row: 5;
            grid-column: 2;
        }

        .elevrn {
            grid-row: 5;
            grid-column: 3;
        }

        .process_header {
            text-align: center;
            margin: 31px;
        }

        .icards {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }

        .col-md-3 {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 15px;
        }
    </style>

</head>

<body
    class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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

    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
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
    <?php include('screen/nav.php') ?>
    <!-- <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

        <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">

       

        </div>

        <div class="breadcroumb-area">

            <div class="container">

                <div class="breadcroumn-contnt">



                    <h2 class="page-title">

                        Career </h2>



                </div>

            </div>

        </div>

    </div>#page -->


    <?php include 'screen/newcareer.php'; ?>
    <!-- <section>
        <div class="row" style="margin: 47px auto;  width: 94%;">
            <h2 style="text-align:center;">Interview Process</h2>
            <div class="col-md-3">
                <div class="">

                    <img src="img/scanning.png" alt="scanning_img">

                    <h5>Screening</h5>

                    <p>An initial screening helps us determine whether you have the background and the

                        required skills for a particular function.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="">

                    <img src="img/rpa.png" alt="rpa_img">

                    <h5>System Test</h5>

                    <p>A system test is conducted to measure job skills, aptitude, and temperament prior to

                        interviews or hiring.</p>

                </div>

            </div>
            <div class="col-md-3">
                <div class="">

                    <img src="img/meeting.png" alt="meeting_img">

                    <h5>HR Round</h5>

                    <p>The HR round is conducted to assess your personality, background, strengths, and

                        weaknesses.</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="">

                    <img src="img/onboarding.png" alt="onboarding_img">

                    <h5>Onboarding</h5>

                    <p>We offer the smoothest of onboarding processes that include - Welcome Package,

                        Paperwork, Orientation, Training & Tools. </p>

                </div>
            </div>
        </div>
    </section> -->
    <section>
        <h2 style="text-align:center; margin:32px;">
            Life of an RETRODITES
        </h2>

        <div class="wrapper">
            <div class="one"><img src="img/retrodcareer1.jpeg" alt=""></div>
            <div class="two"><img src="img/retrodcareer2.jpeg" alt=""></div>
            <div class="three">
                <p>
                    Retrodites, where life is a dynamic blend of innovation, camaraderie, and a shared passion for
                    transforming the tourism landscape. The spirit of a Retrodite is one of continuous learning and
                    growth, where every achievement is celebrated, and every setback is seen as an opportunity to
                    improve. Our work environment is characterized by a vibrant exchange of ideas, fueled by a passion
                    for excellence and a shared dedication to making technology accessible to all hoteliers
                </p>
                <p><img src="img/retrod31.jpeg" alt=""></p>
                <p><img src="img/retrod37.jpeg" alt=""></p>
            </div>
            <div class="four"><img src="img/retrod38.jpeg" alt=""></div>
            <div class="five"><img src="img/retrod32.jpeg" alt=""></div>
            <div class="six"> <img src="https://retrodtech.com/admin/login/upload/events/Retrod2.0%20Celebrations.JPG"
                    alt=""></div>
            <div class="seven"><img
                    src="https://retrodtech.com/admin/login/upload/events/Mr.%20Pravat%20Kumar%20Panda%20Founder%20Retrod-%20TechInTourism.JPG"
                    alt="">
                <p>Join us in the exciting life of a Retrodite, where every moment is an opportunity to make a lasting
                    impact on the tourism industry, one innovation at a time. Together, we're not just shaping the
                    future; we're redefining the very essence of Tourism </p>
                <img src="img/retrod33.jpeg" alt="">
            </div>
            <div class="eight"><img src="img/retrod30.jpeg" alt=""></div>
            <div class="nine"><img src="img/retrod34.jpeg" alt=""></div>
            <div class="ten"><img src="img/retrod35.jpeg" alt=""></div>
            <div class="eleven"><img src="img/retrod36.jpeg" alt=""></div>
        </div>


        <!-- 
        <div class="imagecontainer">
            <div class="panel active" style="background-image: 
            url('https://retrodtech.com/admin/login/upload/events/img1.jfif')">
            <h3>Retrod</h3></div>
            <div class="panel" style="background-image: 
            url('https://retrodtech.com/admin/login/upload/events/Orfan%20Visit.jpg')">
            <h3>Retrod</h3></div>
            <div class="panel" style="background-image: 
            url('https://retrodtech.com/admin/login/upload/events/20240107021002_IMG_0252.JPG')">
            <h3>Retrod</h3></div>
            <div class="panel" style="background-image: 
            url('https://retrodtech.com/admin/login/upload/events/Retrod2.0%20Celebrations.JPG')">
            <h3>Retrod</h3></div>
            <div class="panel" style="background-image: 
            url('https://retrodtech.com/admin/login/upload/events/Mr.%20Pravat%20Kumar%20Panda%20Founder%20Retrod-%20TechInTourism.JPG')">
            <h3>Retrod</h3></div>
        </div>     -->
    </section>

    <div class="modal fade" id="birthday_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content" id="jform">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">Job Query Form</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style=" background: red; font-size: xx-large; border-radius: 50%;">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <form id="survey-form" action="" method="POST" enctype="multipart/form-data">



                        <!-- name -->

                        <label id="name-label" class="row-label" for="name">Name:</label>

                        <input id="name" class="row-input" type="text" placeholder="Enter your name" name="name"
                            required>



                        <!-- email -->

                        <label id="email-label" class="row-label" for="email">Email: <span id="mailmsg"></span> </label>

                        <input id="email" class="row-input" type="email" placeholder="Enter your email" required>

                        <!-- role -->

                        <label class="row-label" for="dropdown">Select your Role</label>

                        <select id="jobdropdown" class="row-input" required>

                            <option disabled selected>Select an option</option>

                            <option value="developer">PHP Developer</option>

                            <option value="Business"> Business Analyst</option>

                            <option value="SalesExicutive">Sales Exicutive</option>

                            <option value="SupportEngineer">Support Engineer</option>

                        </select>

                        <!-- <div id="addskill" style="display: flex; justify-content: end; cursor: pointer; color:black"; >Add Skills</div> -->

                        <!-- education dropdown -->

                        <label class="row-label" for="dropdown">Level of education:</label>

                        <select id="dropdown" class="row-input" required>

                            <option disabled selected>Select an option</option>

                            <option value="btech">B-tech</option>

                            <option value="bca">BCA</option>

                            <option value="mca">MCA</option>

                            <option value="bba">BBA</option>

                            <option value="mba">MBA</option>

                        </select>



                        <!-- years of experience -->

                        <label id="number-label" class="row-label" for="number">Years of experience (optional):</label>

                        <input id="number" class="row-input" type="number"
                            placeholder="Enter number of years of experience" min="0" max="50">



                        <!-- programs checkbox -->
                        <div id="textar" style="display:none;">
                            <label class="row-label">Write Your all skills:</label>
                            <textarea id="txtar" rows='4' cols='50' placeholder="write...."></textarea>
                        </div>
                        <div id="skills" style="display:none">
                            <p class="row-label">Known programs:</p>



                            <label class="row-input small" for="box-HTML">

                                <input type="checkbox" id="box-HTML" name="checkbox" value="HTML">

                                <span class="inline-label">HTML</span>

                            </label>



                            <label class="row-input small" for="box-CSS">

                                <input type="checkbox" id="box-CSS" name="checkbox" value="CSS">

                                <span class="inline-label">CSS</span>

                            </label>



                            <label class="row-input small" for="box-JAVA">

                                <input type="checkbox" id="box-JAVA" name="checkbox" value="JAVA">

                                <span class="inline-label">JAVA</span>

                            </label>



                            <label class="row-input small" for="box-PHP">

                                <input type="checkbox" id="box-PHP" name="checkbox" value="PHP">

                                <span class="inline-label">PHP</span>

                            </label>



                            <label class="row-input small" for="box-SCAS">

                                <input type="checkbox" id="box-SCAS" name="checkbox" value="SCAS">

                                <span class="inline-label">SCAS</span>

                            </label>

                            <label class="row-input small" for="box-SQL">

                                <input type="checkbox" id="box-SQL" name="checkbox" value="SQL">

                                <span class="inline-label">SQL</span>

                            </label>
                        </div>




                        <!-- comments textarea -->

                        <label class="row-label" for="comments">Additional informations:</label>

                        <textarea id="comments" placeholder="Enter other informations here..."></textarea>



                        <!-- submit button -->

                        <label for="myfile">Select files:</label>

                        <input type="file" name="file" id="pdf_file" accept=".pdf">

                        <!-- <input type="file" id="myfile" name="myfile" multiple> -->
                        <br><br>

                        <input type="button" id="subbtn" value="Submit"
                            style="background: blue;color: white;border-radius: 9%;  box-shadow: 5px 5px 8px blue, 2px 2px 2px red, 2px 0px 2px green;">



                    </form>

                </div>



            </div>

        </div>

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



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>

    <script src="js/careerjs.js"></script>


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        // grab all panel classes
        const panels = document.querySelectorAll('.panel')

        // loop through the node list
        panels.forEach((panel) => {
            // listen for a click
            panel.addEventListener('click', () => {
                removeActive()
                // if clicked -> add a class of active (so also flex = 5)
                panel.classList.add("active")
            })
        })

        // function to remove active class from elements
        function removeActive() {
            // loop through panels
            panels.forEach(panel => {
                // remove active classes from panel objects
                panel.classList.remove('active')
            })
        }
    </script>

    <script type="text/javascript">
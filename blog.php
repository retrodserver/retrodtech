<?php

include('admin/include/dbcon.php');

$sql = "SELECT title, content, date, file, url FROM blog";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Blog Insights & Innovations: Explore the Retrod Blog</title>
    <!-- keywords -->
    <meta name="description"
        content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod,Retrod Technologies offers cutting-edge IT solutions, software development, cloud computing, and digital transformation services. Partner with us to grow your business.">
    <meta name="keywords"
        content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms,IT solutions, software development, cloud computing, digital transformation, IT consulting, Cloud-based PMS,Contactless Check-in,Smart Hospitality Solutions,Hotel Business Intelligence,Cloud Hospitality Solutions,Hotel Digital Campaigns,Hotel Mobile Check-in,Hotel Data Analytics,Online Travel Technology,Automated Hotel Systems,Intelligent Hotel Operations,Guest Communication Tools,Travel Agency Solutions,Vacation Rental Management,Hospitality Cloud Solutions,Mobile-Friendly Hotel Solutions,Hotel Wi-Fi Management,Travel Tech Innovations,Hotel Booking Optimization,Secure Payment Gateways,Global Distribution System (GDS),OTA Integration Software,Hotel API Integration,Hotel Staff Management,Travel Portal Development,Property Management Software,Inventory Management,Guest Check-in and Check-out,Room Booking System,Hotel Reservation System,">

    <meta name="author" content="Retrod">
    <link rel="canonical" href="https://retrodtech.com/blog">
    <meta name="robots" content="index, follow">

    <meta property="og:site_name" content="Retrod Technologies">
    <meta property="og:title" content="Blog Insights & Innovations | Retrod">
    <meta property="og:description" content="Retrod Technologies provides hotel booking engine, PMS, website development and travel technology solutions.">
    <meta property="og:url" content="https://retrodtech.com/blog">
    <meta property="og:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog Insights & Innovations | Retrod">
    <meta name="twitter:description" content="Retrod Technologies provides hotel booking engine, PMS and travel technology solutions.">
    <meta name="twitter:image" content="https://retrodtech.com/img/retrod_logo_travel_tech.png">

    <link rel="icon" href="https://retrodtech.com/img/favicon_io/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="styles.css">

    <?php include('screen/header.php') ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "headline": "Best Hotel Management Software",
            "author": {
                "@type": "Organization",
                "name": "Retrod Technologies"
            }
        }
    </script>

    <style>
        .site {
            overflow-x: visible !important;
        }
    </style>
</head>


<body
    class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
        <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">
            <?php include('screen/nav.php') ?>
        </div>

        <div class="breadcroumb-area">
            <div class="container">
                <div class="breadcroumn-contnt">
                    <h2 class="page-title fw-bold fs-3">Blogs </h2>
                </div>
            </div>
        </div>

    </div>
    <!-- #page -->

    <main id="primary" class="site-main content-area page-layout-right-sidebar">
        <div class="container" style="padding: 33px;">
            <div class="row content-right-sidebar">
                <div class="col-lg-8">
                    <div class="row all-posts-wrapper">
                        <header>
                            <h1 class="page-title screen-reader-text fw-bold fs-3">Blog</h1>
                        </header>
                        <?php
                        include('admin/include/dbcon.php');
                        $sql = 'SELECT * FROM blog WHERE status=1 ORDER BY id DESC';
                        $result = mysqli_query($conn, $sql);
                        $numOfRows = mysqli_num_rows($result);

                        if ($numOfRows != 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo '
                                
                                <div class="single-post-item col-lg-12 mb-2">
                                <article id="post-177"
                                    class="post-item post-177 post type-post status-publish format-standard has-post-thumbnail hentry category-circuitry tag-it tag-management">
                                    <div class="single-post-wrapper">
                                        <div class="post-thumbnail-wrapper">
                                            <img src="admin/login/' . $row["file"] . '" alt="blog_7" class="rounded img-fluid w-100">
                                        </div>
                                        <div class="post-content-wrapper py-3">
                                            <div class="post-meta">
                                                <ul class="d-flex gap-3 fs-5">
                                                    <li><span class="byline"><i class="far fa-user"></i> <span
                                                                class="author vcard">Retrod</span></span></li>
                                                    <li><span class="posted-on"><i class="far fa-calendar-check"></i> <a
                                                                href="' . $row['url'] . '"
                                                                target="_blank" rel="bookmark"><time
                                                                    class="entry-date published"
                                                                    datetime="' . $row['date'] . '">' . date("d M Y", strtotime($row['date'])) . '</time></a></span></li>
                                                </ul>
                                            </div>
                                            <h3 class="post-title fs-3"><a
                                                    href="https://retrodtech.com/blog/' . $row['slug'] . '"
                                                    target="_blank" rel="bookmark">' . $row['title'] . '</a></h3>
    
                                            <div class="post-excerpt">
    
                                                <p>' . substr($row['content'], 0, 20) . "....." . '</p>
    
                                            </div>
                                            <div class="post-read-more">
                                                <a class="theme-button"
                                                    href="https://retrodtech.com/ExpBlog.php?slug=' . $row['slug'] . '"
                                                    target="_blank">
    
                                                    Read More<i class="fas fa-arrow-right"></i></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                                ';
                            }
                        }

                        ?>
                    </div>
                    <div class="row post-pagination">
                        <div class="col-lg-12">
                            <nav class="navigation pagination" aria-label=" ">
                                <h2 class="screen-reader-text"> </h2>
                                <div class="nav-links">
                                    <ul class='page-numbers'>
                                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="blogsecond.php">2</a></li>
                                        <li><a class="next page-numbers" href="blogsecond.php"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <aside id="secondary" class="col-xl-4 col-lg-5 col-md-12 col-12 sidebar-widget-area">

                    <div class="sidebar-sticky-area">
                        <?php include('screen/recentblog.php') ?>
                    </div>
                </aside>
            </div>
        </div>
    </main>

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
    <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'></script>
    <!--flex comments  & customer-->
    <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'></script>
    <!--navbar scroll-->
    <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>
</body>

</html>
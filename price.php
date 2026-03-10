<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

$sqlmain = "SELECT * FROM prices where planeId = 'Starter'";
$resultmain = $conn->query($sqlmain);

if ($resultmain->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain = $resultmain->fetch_assoc();
    $montpriceofStarter = $rowmain['monthly_price'];
    $sixmonthpercofStarter = $rowmain['sixMonthDis'];
    $oneyrpercofStarter = $rowmain['oneYrDis'];

    $sixmonthpercofStarter = $montpriceofStarter - ($montpriceofStarter * $sixmonthpercofStarter / 100);
    $oneyrpercofStarter = $montpriceofStarter - ($montpriceofStarter * $oneyrpercofStarter / 100);
} else {
    echo "No records found.";
}



$sqlmain2 = "SELECT * FROM prices where planeId = 'Plus'";
$resultmain2 = $conn->query($sqlmain2);

if ($resultmain2->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain2 = $resultmain2->fetch_assoc();
    $montpriceofPlus = $rowmain2['monthly_price'];
    $sixmonthpercofPlus = $rowmain2['sixMonthDis'];
    $oneyrpercofPlus = $rowmain2['oneYrDis'];

    $sixmonthpercofPlus = $montpriceofPlus - ($montpriceofPlus * $sixmonthpercofPlus / 100);
    $oneyrpercofPlus = $montpriceofPlus - ($montpriceofPlus * $oneyrpercofPlus / 100);
} else {
    echo "No records found.";
}



$sqlmain3 = "SELECT * FROM prices where planeId = 'Elite'";
$resultmain3 = $conn->query($sqlmain3);

if ($resultmain3->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain3 = $resultmain3->fetch_assoc();
    $montpriceofElite = $rowmain3['monthly_price'];
    $sixmonthpercofElite = $rowmain3['sixMonthDis'];
    $oneyrpercofElite = $rowmain3['oneYrDis'];

    $sixmonthpercofElite = $montpriceofElite - ($montpriceofElite * $sixmonthpercofElite / 100);
    $oneyrpercofElite = $montpriceofElite - ($montpriceofElite * $oneyrpercofElite / 100);
} else {
    echo "No records found.";
}




$sql = "SELECT * FROM  featureitems";
$result = $conn->query($sql);



if ($result === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray = array();
        while ($row = $result->fetch_assoc()) {
            $featuresArray[] = $row["features"];
        }
    } else {
        echo "No records found.";
    }
}



$sql2 = "SELECT * FROM  featureitems2";
$result2 = $conn->query($sql2);

if ($result2 === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result2->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray2 = array();
        while ($row2 = $result2->fetch_assoc()) {
            $featuresArray2[] = $row2["features"];
        }
    } else {
        echo "No records found.";
    }
}

$sql3 = "SELECT * FROM  featureitems3";
$result3 = $conn->query($sql3);

if ($result3 === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result3->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray3 = array();
        while ($row3 = $result3->fetch_assoc()) {
            $featuresArray3[] = $row3["features"];
        }
    } else {
        echo "No records found.";
    }
}
?>



<!doctype html>

<html lang="en-US">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<title>Retrod || Pricing</title>

<style>
    .price_section {
        height: 65vh;
        background-color: #ededed;
    }

    .price_section .container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .waviy {
        position: relative;
        /* -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0, 0, 0, .2)); */
        font-size: 60px;
    }

    .waviy span {
        font-family: 'Alfa Slab One', cursive;
        position: relative;
        display: inline-block;
        color: #000;
        text-transform: uppercase;
        animation: waviy 2.5s infinite;
        animation-delay: calc(.2s * var(--i));

    }

    @keyframes waviy {

        0%,
        40%,
        100% {
            transform: translateY(0)
        }

        20% {
            transform: translateY(-20px)
        }
    }
</style>

<?php include('screen/header.php') ?>




<body class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">



    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>



        <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">

            <?php include('screen/nav.php') ?>


        </div>

        <div class="breadcroumb-area">

            <div class="container">

                <div class="breadcroumn-contnt">
                    <h2 class="page-title">Pricing</h2>


                </div>

            </div>

        </div>

    </div><!-- #page -->


    <div class="container">

    </div>


    <section class="price_section">

        <div class="container">
            <div class="waviy">
                <span style="--i:1">c</span>
                <span style="--i:2">o</span>
                <span style="--i:3">m</span>
                <span style="--i:4">i</span>
                <span style="--i:5">n</span>
                <span style="--i:6">g</span>
                <span style="--i:7">s</span>
                <span style="--i:8">o</span>
                <span style="--i:9">o</span>
                <span style="--i:10">n</span>
            </div>
        </div>
    </section>




    <?php include('screen/footer.php') ?>

    <!--comments section-->

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


    <link rel='stylesheet' id='elementor-post-611-css' href='wp-content/uploads/elementor/css/post-6110fdd.css?ver=1687803773' media='all' />


    <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'>

    </script>

    <!--flex comments  & customer-->

    <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'></script>

    <!--navbar scroll-->

    <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>


    <script>
        (function($) {
            var price = $('.pricing-table__price');
            var term = $('.pricing-table__term');
            var year = $("#year");
            var smonth = $("#smonth");
            var month = $("#month");

            month.on('click', function() {
                $('.first_btn').removeClass('active');
                $(this).addClass('active');

                price.each(function() {
                    var value = $(this).data('month-price');
                    var html = `<span class="pricing-table__currency">&#8377</span> <strong>${value}</strong> <span class="month">/  M</span>`;
                    $(this).html(html);
                });
            });

            smonth.on('click', function() {
                $('.first_btn').removeClass('active');
                $(this).addClass('active');
                year.removeClass('active');
                price.each(function() {
                    var value = $(this).data('smonth-price');
                    var monthVal = $(this).data('month-price');
                    var html = `<span class="remove"><span >&#8377</span> ${monthVal}</span> <strong><span class="pricing-table__currency">&#8377</span> ${value}</strong> <span class="month">/ M</span>`;
                    $(this).html(html);
                });
            });

            year.on('click', function() {
                console.log(term);
                $('.first_btn').removeClass('active');
                $(this).addClass('active');
                month.removeClass('active');
                price.each(function() {
                    var value = $(this).data('year-price');
                    var monthVal = $(this).data('month-price');
                    var html = `<span class="remove"><span >&#8377</span> ${monthVal}</span> <strong><span class="pricing-table__currency">&#8377</span> ${value}</strong> <span class="month">/ M</span>`;
                    $(this).html(html);
                });
            });

        })(jQuery);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>


    <script>
        <?php
        foreach ($featuresArray as $feature) {

        ?>
            document.getElementById('<?php echo $feature ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>

    <script>
        <?php
        foreach ($featuresArray2 as $feature2) {

        ?>
            document.getElementById('<?php echo $feature2 ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature2 ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>


    <script>
        <?php
        foreach ($featuresArray3 as $feature3) {

        ?>
            document.getElementById('<?php echo $feature3 ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature3 ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>
    <script src="js/formapp23.js"></script>


</body>





</html>
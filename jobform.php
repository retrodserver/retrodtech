<?php
include './admin/include/dbcon.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['submit']))) {
    // Retrieve values from text inputs
    $postname=$_POST['postname'];
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];

    // Retrieve values from checkboxes
    $knownPrograms = "";

    if(!empty($_POST['checkbox'])) {

        foreach($_POST['checkbox'] as $value){
            $knownPrograms= $knownPrograms.','.$value;
        }

    }

    $filename = $_FILES['myfile']['name'];
    $tempname = $_FILES['myfile']['tmp_name'];
    $folder = "img/" . $filename;
    move_uploaded_file($tempname, $folder);
    $additionalInfo = $_POST['additional'];
  

    $sql = "INSERT INTO appliedjob (name,mail,education,experience,programs,file,additional,postname) values ('$name','$email','$education','$experience','$knownPrograms','$folder','$additionalInfo','$postname')";
        $data = mysqli_query($conn, $sql);

        if ($data) {
            ?>
<script>
msgbox();
</script>
<?php
          
             header("Location: curentopening.php");

        } else {
            echo "Failed";
        }
}

?>


<!doctype html>
<html lang="en-US">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="description"
    content="Welcome to Retrod, Best Hotel-Tech Company Across The India, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod,Retrod Technologies offers cutting-edge IT solutions, software development, cloud computing, and digital transformation services. Partner with us to grow your business.">
<meta name="keywords"
    content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms,IT solutions, software development, cloud computing, digital transformation, IT consulting, Cloud-based PMS,Contactless Check-in,Smart Hospitality Solutions,Hotel Business Intelligence,Cloud Hospitality Solutions,Hotel Digital Campaigns,Hotel Mobile Check-in,Hotel Data Analytics,Online Travel Technology,Automated Hotel Systems,Intelligent Hotel Operations,Guest Communication Tools,Travel Agency Solutions,Vacation Rental Management,Hospitality Cloud Solutions,Mobile-Friendly Hotel Solutions,Hotel Wi-Fi Management,Travel Tech Innovations,Hotel Booking Optimization,Secure Payment Gateways,Global Distribution System (GDS),OTA Integration Software,Hotel API Integration,Hotel Staff Management,Travel Portal Development,Property Management Software,Inventory Management,Guest Check-in and Check-out,Room Booking System,Hotel Reservation System,">
<title>Job Form</title>

<?php include('screen/header.php') ?>
<style>
.tronix-section-title-content {
    text-align: center;
    padding-top: 92px;
}

section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
    margin-top: 50px;
}

.whatsapp_btn {
    background: #B81265;
    border-radius: 999px;
    box-shadow: #5E5DF0 0 10px 20px -10px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    opacity: 1;
    outline: 0 solid transparent;
    padding: 8px 18px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;
}

i.fas.fa-map-marker-alt {
    color: #0e59f2;
}

.aplication_title {
    padding-top: 113px;
    padding-bottom: 104px;
}

.application_Form :root {
    --box-height: 40px;
    --border-radius: 5px;
    --space-between: 20px;
    --font-size: 16px;

    --color-0: #ffffff;
    --color-1: #dcdcdd;
    --color-2: #c5c3c6;
    --color-3: #212529;
    --color-4: #659b5e;
    --color-5: #ce4257;
}

.application_Form * {
    margin: 0;
    padding: 0;
    font-family: "Montserrat", sans-serif;
    box-sizing: border-box;
}

.application_Form body {
    padding: 0 10px;
    background-image: url("https://i.postimg.cc/BnhHF28S/nastuh-abootalebi-y-Wwob8kw-OCk-unsplash-modified.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
}

.application_Form #survey-container {
    margin: 20px auto;
    padding: 30px 20px;
    width: 100%;
    max-width: 840px;
    border-radius: calc(3 * var(--border-radius));
}

.application_Form #title {
    margin: 30px 0;
    text-align: center;
    font-family: "Kumbh Sans", sans-serif;
    font-size: 50px;
    text-transform: capitalize;
    color: var(--color-3);
}

.application_Form #description {
    margin: 30px 0;
    padding: 5px;
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    color: var(--color-3);
}

.application_Form #survey-form {

    margin: 0 auto;
    background: var(--color-1);
    opacity: 98%;
    border: none;
    border-radius: calc(2 * var(--border-radius));
    width: 90%;
}

.application_Form #survey-form * {
    font-size: var(--font-size);
}

.application_Form .row-label,
.application_Form .row-input {
    padding: 5px 10px;
    margin: 0;
    height: var(--box-height);
    width: 100%;
    display: block;
}

.application_Form .row-label {
    color: var(--color-3);
    font-weight: 600;
}

.application_Form .row-label:not(:first-child) {
    margin-top: var(--space-between);
}

.application_Form .row-input:not(.small) {
    background: #e9e9e9;
    border: none;
    border-radius: var(--border-radius);
}

.application_Form .inline-label {
    margin-left: 10px;
    font-size: 14px;
    color: var(--color-3);
}

.application_Form .small {
    height: calc(var(--box-height) * 0.75);
}

.application_Form #comments {
    padding: 10px;
    margin: 0;
    height: 120px;
    width: 100%;
    background: white;
    border: none;
    border-radius: var(--border-radius);
    resize: none;
}

.application_Form #submit {
    margin-top: calc(2 * var(--space-between));
    height: var(--box-height);
    width: 100%;
    background: var(--color-4);
    border: none;
    border-radius: var(--border-radius);
    color: white;
    font-weight: 600;
    cursor: pointer;
    text-transform: capitalize;
    background-color: #B81265;
    padding: 11px 27px;
    width: auto;
    border-radius: 5px;
}

.application_Form #submit:hover {
    box-shadow: 0 0 2px var(--color-3);
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
                        Application Form </h2>


                    <div id="message" style="display:none;">Thank you for apply</div>

                </div>
            </div>
        </div>
    </div><!-- #page -->

    <?php
 
    include('admin/include/dbcon.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['slug'])) {
           
            $job_slug = $_GET['slug'];
            $sql2 = "SELECT * FROM jobcareer WHERE slug ='$job_slug'";
            $result2 = mysqli_query($conn, $sql2);
            $numOfRows = mysqli_num_rows($result2);
           
            
            if ($numOfRows != 0) {
                while ($row2 = mysqli_fetch_array($result2)) {
                    $slugname=$row2['slug'];
                    $titlename = $row2['title'];
                    $desc = $row2['fullDesc'];
                    echo $desc;
                   
                }
            }
        }
    }
    ?>

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
    <div class="modal fade" id="birthday_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo strtoupper($titlename);?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="application_form">
                        <section class="application_Form">
                            <link
                                href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&family=Montserrat&display=swap"
                                rel="stylesheet">
                            <form action="" id="survey-form" method="POST" enctype="multipart/form-data">


                                <input type="hidden" name="postname" value="<?php echo $slugname?>">
                                <!-- name -->
                                <label id="name-label" class="row-label" for="name">Name:</label>
                                <input id="name" class="row-input" type="text" name="name" placeholder="Enter your name"
                                    required>

                                <!-- email -->
                                <label id="email-label" class="row-label" for="email">Email:</label>
                                <input id="email" class="row-input" type="email" name="mail"
                                    placeholder="Enter your email" required>

                                <!-- education dropdown -->
                                <label class="row-label" for="dropdown">Level of education:</label>
                                <select id="dropdown" class="row-input" name="education" required>
                                    <option disabled selected>Select an option</option>
                                    <option value="primary">Primary education</option>
                                    <option value="secondary">Secondary education</option>
                                    <option value="higher">Higher education</option>
                                    <option value="na">No answer</option>
                                </select>

                                <!-- years of experience -->
                                <label id="number-label" class="row-label" for="number">Years of experience
                                    (optional):</label>
                                <input id="number" class="row-input" type="number" name="experience"
                                    placeholder="Enter number of years of experience" min="0" max="50">

                                <!-- programs checkbox -->
                                <p class="row-label">Known programs:</p>

                                <label class="row-input small" for="box-windows">
                                    <input type="checkbox" id="box-windows" name="checkbox[]" value="HTML">
                                    <span class="inline-label">HTML</span>
                                </label>

                                <label class="row-input small" for="box-word">
                                    <input type="checkbox" id="box-word" name="checkbox[]" value="CSS">
                                    <span class="inline-label">CSS</span>
                                </label>

                                <label class="row-input small" for="box-excel">
                                    <input type="checkbox" id="box-excel" name="checkbox[]" value="PHP">
                                    <span class="inline-label">PHP</span>
                                </label>




                                <label for="myfile">Select files:</label>
                                <input type="file" id="myfile" name="myfile" multiple>
                                <!-- comments textarea -->
                                <label class="row-label" for="comments">Additional informations:</label>
                                <textarea id="comments" placeholder="Enter other informations here..."
                                    name="additional"></textarea>

                                <!-- submit button -->
                                <button id="submit" name="submit" type="submit">Submit</button>

                            </form>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>
</body>
<script>
function msgbox() {


    swal({
        title: "Thak you!",
        text: "OK!",
        icon: "success",
        button: "Aww yiss!",
    });


}
</script>

</html>
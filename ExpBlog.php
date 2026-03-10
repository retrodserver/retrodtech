<?php
include('admin/include/dbcon.php');

$slug = $_GET['slug'] ?? '';

$slug = mysqli_real_escape_string($conn,$slug);

$sql = "SELECT * FROM blog WHERE slug='$slug' AND status=1 LIMIT 1";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0){
    header("HTTP/1.0 404 Not Found");
    echo "Blog not found";
    exit;
}

$row = mysqli_fetch_assoc($result);

$title = trim($row['title']);
$content = stripslashes($row['content']);
$date = $row['date'];
$image = $row['file'];
$url = $row['url'];
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title><?php echo $title;?> | Retrod</title>
    <meta name="description" content="<?php echo substr(strip_tags($content),0,160); ?>">
    <meta name="keywords"
        content="Best Hotel Software,Best Booking Engine,Best Booking Software,Hotel Website development,Booking Engine,Hotel software,Hotel Management Software,Best Hotel Software in Odisha,Best Hotel Software in India,Hotel Photography,Mail for hotel,Digital marketing for Hotel,Travel Technology Solutions,Innovative Travel Tech,Advanced Travel Solutions,Tech-Driven Travel Innovations,Smart Travel Technology,Travel Management Systems,Cutting-Edge Travel Tech,Travel Software Solutions,Next-Gen Travel Tech,Travel Tech Platforms,IT solutions, software development, cloud computing, digital transformation, IT consulting, Cloud-based PMS,Contactless Check-in,Smart Hospitality Solutions,Hotel Business Intelligence,Cloud Hospitality Solutions,Hotel Digital Campaigns,Hotel Mobile Check-in,Hotel Data Analytics,Online Travel Technology,Automated Hotel Systems,Intelligent Hotel Operations,Guest Communication Tools,Travel Agency Solutions,Vacation Rental Management,Hospitality Cloud Solutions,Mobile-Friendly Hotel Solutions,Hotel Wi-Fi Management,Travel Tech Innovations,Hotel Booking Optimization,Secure Payment Gateways,Global Distribution System (GDS),OTA Integration Software,Hotel API Integration,Hotel Staff Management,Travel Portal Development,Property Management Software,Inventory Management,Guest Check-in and Check-out,Room Booking System,Hotel Reservation System,">
    <meta name="author" content="Retrod">
    <link rel="canonical" href="https://retrodtech.com/blog/<?php echo $slug; ?>">

    <meta name="robots" content="index, follow">

    <meta property="og:site_name" content="Retrod Technologies">
    <meta property="og:title" content="<?php echo $title;?>">
    <meta property="og:description" content="<?php echo substr(strip_tags($content),0,160); ?>">
    <meta property="og:image" content="https://retrodtech.com/admin/login/<?php echo $image;?>">
    <meta property="og:url" content="https://retrodtech.com/blog/<?php echo $slug;?>">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title;?>">
    <meta name="twitter:description" content="<?php echo substr(strip_tags($content),0,160); ?>">
    <meta name="twitter:image" content="https://retrodtech.com/admin/login/<?php echo $image;?>">

    <link rel="icon" href="https://retrodtech.com/img/favicon_io/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://retrodtech.com/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php include('screen/header.php') ?>
    <style>
        span.tronix-section-small-title {
            margin-top: 52px px;
        }

        a.theme-btns.contact_us_btn {
            width: 88%;
        }

        .ico {
            font-family: 'iconfont' !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }


        .whatsapp_btn {
            background: #B81265;
            border-radius: 999px;
            box-shadow: #ff2391 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotcareeroColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;
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

        .neon {
            margin: 0;
            font-size: 1em;
            color: #ff2391;
            text-shadow: 0 0 3px #ff2391;
            letter-spacing: 5px;
        }



        /* .neon:after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 20px;
    z-index: -1;
    color: #fb8b24;
    filter: blur(15px);
}

.neon:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fb8b24;
    z-index: -2;
    opacity: .3;
    filter: blur(50px);
} */
        .button-float {
            animation: float 1.5s cubic-bezier(0, -0.37, 0.46, 0.35) alternate infinite;
        }

        div#sticky-menu {
            padding: 1px;
        }

        .button-pulse {
            animation: pulse 2s infinite 3s cubic-bezier(0.25, 0, 0, 1);
            box-shadow: 0 0 0 0 white;
        }

        @keyframes pulse {
            to {
                box-shadow: 0 0 0 18px rgba(255, 255, 255, 0);
            }
        }


        @media only screen and (max-width: 584px) {
            .testimonialbox {
                margin: 0 auto;
                width: 85%;
                border-radius: 14px;
            }

            .about-section-wraper .aboutbox {
                margin: 0 auto;
                width: 85%;
            }

            .tronix-table .tronix-table-cell .retrodbox {
                margin: 0 auto;
                width: 85%;
            }
        }

        .post-thumbnail-wrapper {
            display: flex;
            justify-content: center;
        }
        .footer-one-widget-title, .footer-icon-box-title{
            color: white;
        }

        .footer-one-widget-des, .footer-one-link-menu a, .footer-one-service-list a, .footer-icon-box-des{
            color: #aca8aa;
        }
        
    </style>
    <script type="application/ld+json">
{
 "@context":"https://schema.org",
 "@type":"Article",
 "headline":"<?php echo $title;?>",
 "image":"https://retrodtech.com/admin/login/<?php echo $image;?>",
 "datePublished":"<?php echo date('c',strtotime($date)); ?>",
 "author":{
   "@type":"Organization",
   "name":"Retrod Technologies"
 },
 "publisher":{
   "@type":"Organization",
   "name":"Retrod Technologies",
   "logo":{
      "@type":"ImageObject",
      "url":"https://retrodtech.com/img/retrod_logo_travel_tech.png"
   }
 }
}
</script>
</head>

<body>
    <?php
    include('screen/nav.php');
    $content = html_entity_decode($content);
    ?>
          <div class="single-post-item container py-3">
          <article id="post-177"
              class="post-item post-177 post type-post status-publish format-standard has-post-thumbnail hentry category-circuitry tag-it tag-management">

              <div class="single-post-wrapper">
                  <div class="post-thumbnail-wrapper">
                      <img src="https://retrodtech.com/admin/login/<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid rounded w-100">
                  </div>
                  <div class="post-content-wrapper">
                      <div class="post-meta">
                          <ul class="d-flex gap-3 py-3 fs-5">
                              <li><span class="byline"><i class="far fa-user"></i> <span
                                          class="author vcard">Retrod</span></span></li>
                              <li><span class="posted-on"><i class="far fa-calendar-check"></i> <a
                                          href="<?php echo $url; ?>"
                                          target="_blank" rel="bookmark"><time
                                              class="entry-date published"
                                              datetime="<?php echo $date; ?>"><?php echo date("d M Y", strtotime($date)); ?></time></a></span></li>
                          </ul>
                      </div>
                      <h3 class="post-title fw-bold fs-3 py-2"><a
                              href="<?php echo $url; ?>"
                              target="_blank" rel="bookmark"><?php echo $title; ?></a></h3>
  		 <div class="post-excerpt row">
                        <div class="fs-5"><?php echo $content; ?></div>
                     </div>
                  </div>
              </div>
          </article>
      </div>

    <?php include('screen/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>
</html>
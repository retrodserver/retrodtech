<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Welcome to Retrod, Best Hotel-Tech Company Across The Globe, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod.">
  <meta name="keywords" content="retrod, retrod tech, retrodtech">
  <meta name="author" content="Retrod">
  <title>Welcome to Retrod . Best Hotel-Tech Company Across The Globe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="icon" type="image/x-icon" href="img/favicon.png">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- trait_exists -->
    
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Organization",
                "@id": "https://retrodtech.com/#organization",
                "name": "Retrod",
                "url": "https://retrodtech.com",
                "sameAs": [
                    "https://www.facebook.com/RetrodTechnologies",
                    "https://mobile.twitter.com/retrodtech",
                    "https://www.instagram.com/retrod_tech",
                    "https://in.linkedin.com/company/retrod-technologies"
                ],
                "logo": {
                    "@type": "ImageObject",
                    "@id": "https://retrodtech.com/#logo",
                    "inLanguage": "en-US",
                    "url": "https://retrodtech.com/img/logo2.png",
                    "width": 450,
                    "height": 173,
                    "caption": "Retrod"
                },
                "image": {
                    "@id": "https://retrodtech.com/#logo"
                }
            },
            {
                "@type": "WebSite",
                "@id": "https://retrodtech.com/#website",
                "url": "https://retrodtech.com",
                "name": "Retrod",
                "description": "Welcome to Retrod, Best Hotel-Tech Company Across The Globe, Your Direct Booking Master and Unlock Your Hotels Digital Presence With Retrod.",
                "publisher": {
                    "@id": "https://retrodtech.com#organization"
                },
                "potentialAction": [
                    {
                        "@type": "SearchAction",
                        "target": "https://retrodtech.com/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                ],
                "inLanguage": "en-US"
            },
            {
                "@type": "ImageObject",
                "@id": "https://retrodtech.com/#primaryimage",
                "inLanguage": "en-US",
                "url": "https://retrodtech.com/img/header.jpg",
                "width": 1075,
                "height": 1080
            }
            
        ],
        "founders" : [
          "Pravat Kumar Panda",
          "Subhasandhya Panda"
        ],
        "foundingDate" : "2021-07-21"
    }
    </script>

  <?php include('screen/navbar.php') ?>

  <div id="mainContent" class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <?php include('screen/header.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/about.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/snap.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/product.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/testimonial.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/client.php') ?>
        </div>

        <div class="swiper-slide">
          <?php include('screen/footer.php') ?>
        </div>


      </div>
      <div class="swiper-pagination"></div>
    </div>
    
  
  
  <div class="smallScreen">
    <?php include('screen/header.php') ?>
      <?php include('screen/about.php') ?>
      <?php include('screen/snap.php') ?>
      <?php include('screen/product.php') ?>
      <?php include('screen/testimonial.php') ?>
      <?php include('screen/client.php') ?>
      <?php include('screen/footer.php') ?>
    
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="js/script.js"></script>



</body>

</html>
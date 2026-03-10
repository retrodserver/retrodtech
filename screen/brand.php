 <?php
    $hotelBrands = [
        [
            "url" => "https://raghubirnibas.in/",
            "img" => "img/hotel_logo/raghubir_nibas_brand_logo.png",
            "alt" => "raghubir_nibas_brand_logo"
        ],
        [
            "url" => "https://durenehotels.com/",
            "img" => "img/hotel_logo/retrod_hoteldurenegroup.png",
            "alt" => "retrod_hoteldurenegroup"
        ],
        [
            "url" => "https://www.sjhotels.in/",
            "img" => "img/hotel_logo/retrod_hotelsjgroup.png",
            "alt" => "retrod_hotelsjgroup"
        ],
        [
            "url" => "https://arpitabeachresort.in/",
            "img" => "img/hotel_logo/retrod_hotelarpitab.png",
            "alt" => "retrod_hotelarpita"
        ],
        [
            "url" => "https://hotelindraprasth.com/",
            "img" => "img/hotel_logo/hote_indra_prastra.png",
            "alt" => "hote_indra_prastra"
        ],
        [
            "url" => "https://www.mahasuarapalace.com/",
            "img" => "img/hotel_logo/retrod_hotelmahasurapalace.png",
            "alt" => "retrod_hotelmahasurapalace"
        ],
        [
            "url" => "https://vijoyainternational.com/tw",
            "img" => "img/hotel_logo/vijoya_hoel_logo.png",
            "alt" => "vijoya_hoel_logo"
        ],
        [
            "url" => "https://luckyindiahotels.com/",
            "img" => "img/hotel_logo/retrod_hotelsluckyindia.png",
            "alt" => "retrod_hotelsluckyindia"
        ],
        [
            "url" => "https://www.hotel7saat.com/",
            "img" => "img/hotel_logo/retrod_hotels7saat.png",
            "alt" => "retrod_hotels7saat"
        ],
        [
            "url" => "https://hotelnewmarrion.com/",
            "img" => "img/hotel_logo/marion_brand_logo.png",
            "alt" => "marion_brand_logo"
        ],
        [
            "url" => "http://hotelivyraipur.com/",
            "img" => "img/hotel_logo/retrod_hotelsivy.png",
            "alt" => "retrod_hotelsivy"
        ],
        [
            "url" => "https://royalretreathotel.com/",
            "img" => "img/hotel_logo/retrod_hotelsroyaltreat.png",
            "alt" => "retrod_hotelsroyaltreat"
        ],
        [
            "url" => "https://hotelssjpremium.in/",
            "img" => "img/hotel_logo/ssj_premium_hotel_blog.png",
            "alt" => "ssj_premium_hotel_blog"
        ],
        [
            "url" => "https://hotellaharipuri.com/",
            "img" => "img/hotel_logo/hotel_lahari_icon.png",
            "alt" => "hotel_lahari_icon"
        ],
        [
            "url" => "https://vbrance.com/",
            "img" => "img/hotel_logo/hotel_vbrance_brand_logo.png",
            "alt" => "hotel_vbrance_brand_logo"
        ],
        [
            "url" => "https://hoteljasminpalace.com/",
            "img" => "img/hotel_logo/hotel_jasmin_palace_brand_icon.png",
            "alt" => "hotel_jasmin_palace_brand_icon"
        ],
        [
            "url" => "https://goldenleafresorts.com/",
            "img" => "img/hotel_logo/goldenleaf.png",
            "alt" => "goldenleaf_logo"
        ],
        [
            "url" => "https://balkrishnapalace.com/",
            "img" => "img/hotel_logo/balkrishna.png",
            "alt" => "balkrishna_logo"
        ],
    ];
    ?>
 <style>
     @media only screen and (max-width: 584px) {
         .tronix-brand-logo-wrapper .container-fluid .brandbox {
             text-align: center;
         }
     }

     .slider .owl-stage {
         display: flex;
         /* Ensure items are in a row */
         animation: scroll 40s linear infinite;
         /* Smooth scrolling animation */
     }

     @keyframes scroll {
         from {
             transform: translateX(0);
             /* Start position */
         }

         to {
             transform: translateX(-100%);
             /* Move the carousel to the left */
         }
     }

     .owl-carousel .owl-stage:hover {
         animation-play-state: paused;
         /* Pause animation on hover */
     }

     /* gallery */

     .gallery {
         display: flex;

         justify-content: center;
         padding: 20px;
         overflow: hidden;
         width: 100%;
     }

     .gallery img {
         margin: 10px;
         cursor: pointer;
         max-width: 300px;
         width: 50%;
         height: 50%;
         border-radius: 10px;
         height: auto;
         transition: transform 0.5s ease-in-out;
     }

     /* Lightbox styles */
     #lightbox {
         display: none;
         position: fixed;
         top: 12%;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.8);
         justify-content: center;
         align-items: center;
         overflow: hidden;
         flex-direction: column;
         z-index: 1;
     }

     #lightbox img {
         max-width: 80%;
         max-height: 60vh;
         box-shadow: 0 0 25px rgba(0, 0, 0, 0.8);
         border-radius: 10px;
     }

     #closebutton {
         position: absolute;
         top: 10px;
         right: 10px;
         font-size: 24px;
         color: #fff;
         cursor: pointer;
         z-index: 2;
     }

     /* Style for navigation buttons */
     #prev-btn,
     #next-btn {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         font-size: 20px;
         color: #fff;
         background-color: rgba(0, 0, 0, 0.5);
         border: none;
         padding: 10px;
         cursor: pointer;
         transition: background-color 0.3s;
     }

     #prev-btn {
         left: 10px;
     }

     #next-btn {
         right: 10px;
     }

     #prev-btn:hover,
     #next-btn:hover {
         background-color: rgba(0, 0, 0, 0.8);
     }

     /* Styles for thumbnails */
     .thumbnail-container {
         display: flex;
         flex-direction: row;
         flex-wrap: wrap;
         justify-content: center;
     }

     .thumbnail {
         max-width: 50px;
         width: 100px;
         cursor: pointer;
         margin-top: 40px;
         margin-left: 5px;
         margin-right: 5px;
         border: 2px solid #fff;
         transition: opacity 0.3s;
     }

     .thumbnail:hover,
     .thumbnail.active-thumbnail {
         opacity: 0.7;
     }

     .heading h5 {
         font-size: 39px;
         font-weight: 700;
         font-family: emoji;

     }

     .heading {
         text-align: center;
         padding: 14px;
     }
 </style>

 <div class="elementor-section elementor-top-section elementor-element elementor-element-0a537a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
     data-id="0a537a2" data-element_type="section"
     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
     <div class="elementor-container elementor-column-gap-no mb-3">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e464dc"
             data-id="7e464dc" data-element_type="column">
             <div class="elementor-widget-wrap elementor-element-populated">
                 <div class="elementor-element elementor-element-2b1ff31 elementor-widget elementor-widget-tronix_brand_logo"
                     data-id="2b1ff31" data-element_type="widget" data-widget_type="tronix_brand_logo.default">
                     <div class="elementor-widget-container">
                         <div class="tronix-brand-logo-scroll brand_wrapper">
                             <div class="container-fluid">
                                 <div class="trust_brand">
                                     <span class="tronix-section-small-title">
                                         BRAND </span>
                                     <h5>Every Hoteliers is our success story</h5>
                                 </div>
                                 <div class="row brandbox">
                                     <div class="tronix-brand-items enable-slide" id="logo-slide-3249">
                                         <?php foreach ($hotelBrands as $brand): ?>
                                             <div class="tronix-brand-item">
                                                 <a href="<?= $brand['url'] ?>" target="_blank">
                                                     <img
                                                         decoding="async"
                                                         loading="lazy"
                                                         src="<?= $brand['img'] ?>"
                                                         alt="<?= $brand['alt'] ?>"
                                                         title="<?= $brand['alt'] ?>">
                                                 </a>
                                             </div>
                                         <?php endforeach; ?>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 <script>
     jQuery(document).ready(function($) {
         "use strict";
         $("#logo-slide-3249").slick({
             slidesToShow: 5,
             slidesToScroll: 5,
             rtl: false,
             dots: false,
             arrows: false,
             infinite: true,
             autoplay: true,
             speed: 4000,
             autoplaySpeed: 3000,
             responsive: [{
                     breakpoint: 1200,
                     settings: {
                         slidesToShow: 4,
                         slidesToScroll: 4,
                     }
                 },

                 {
                     breakpoint: 1024,
                     settings: {
                         slidesToShow: 3,
                         slidesToScroll: 3,
                     }
                 },

                 {
                     breakpoint: 768,
                     settings: {
                         slidesToShow: 2,
                         slidesToScroll: 2
                     }
                 },

                 {
                     breakpoint: 480,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 }
             ]
         });
     });
 </script>
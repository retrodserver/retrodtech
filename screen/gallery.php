<style>
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
        font-display: auto;
        font-family: emoji;
      
    }
    .heading{
        text-align: center;
        padding: 14px;
    }

    .lazy-img {
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }

    .lazy-img.loaded {
        opacity: 1;
    }


</style>

<section>

    <div class="heading">
    <span class="tronix-section-small-title">
    Latest updates </span>
        <h5>Events</h5>
    </div>

    <div class="gallery" id="gallery">
        <!-- <img src="https://media.licdn.com/dms/image/D5622AQF5OiB2tchGAw/feedshare-shrink_2048_1536/0/1704697676535?e=1707350400&v=beta&t=9F4nTLDH2eZ1MvVaimEmx1dkNpxlmjvByOWmzDJxIKg" alt="Image 1">
        <img src="https://media.licdn.com/dms/image/D5622AQFUB6rVTt-k4g/feedshare-shrink_2048_1536/0/1704697673810?e=1707350400&v=beta&t=IhA_eApX6dRw03yipc3Nfh0MSfCBH5M7jS5myp2Zrcg" alt="Image 2">
        <img src="https://media.licdn.com/dms/image/D5622AQF77l7zg9Wprg/feedshare-shrink_2048_1536/0/1704697673098?e=1707350400&v=beta&t=J-TGUrgXycXcYjRvCax7Y5GPtt8mgaupbNMuG3S7G2E" alt="Image 3">
        <img src="https://media.licdn.com/dms/image/D4D22AQGRwFbl5iFYqA/feedshare-shrink_2048_1536/0/1704733239726?e=1707350400&v=beta&t=50Q7nobZFM4b467sC8WJukvC0HlJzV_7MVls-rez0nM" alt="Image 4"> -->
    </div>


    <div id="lightbox">

        <div id="closebutton">&times;</div>

        <img id="lightbox-img" src="" alt="lightbox image" loading="lazy" decoding="async">


        <div id="thumbnail-container">

        </div>

        <button id="prev-btn">&lt; Prev</button>
        <button id="next-btn">Next &gt;</button>
    </div>
    <script src="js/app11.js" defer></script>

    <script>
        $(document).ready(function() {
   
    var interval = 7000;

    
    function slideImages() {
        var gallery = $("#gallery");
        var currentImage = gallery.find("img:first");

    
        gallery.animate({marginLeft: -currentImage.width()}, 500, function() {
            
            gallery.append(currentImage);
            gallery.css({marginLeft: 0});
        });
    }
  
    setInterval(slideImages, interval);
});

    </script>

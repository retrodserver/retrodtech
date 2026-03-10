const gallery = $('#gallery');

function loadImage(id, img) {
    var imgElement = document.createElement('img');
    imgElement.loading = "lazy";
    imgElement.decoding = "async";
    imgElement.src = 'https://retrodtech.com/admin/login/' + img;
    imgElement.alt = 'image' + id;
    imgElement.classList.add("lazy-img");
    gallery.append(imgElement);
}

// Lazy-load observer
document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".lazy-img");

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src; // Load actual image
                img.onload = () => img.classList.add("loaded"); // Fade-in when loaded
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));
});

$(document).ready(async function () {
    await getImages();

    let currentIndex = 0;
    const images = document.querySelectorAll('#gallery img');
    const totalImages = images.length;

    $('#gallery').on('click', 'img', function (event) {
        openLightbox(event);
    });

    $('#closebutton').on('click', function (event) {
        closeLightbox(event);
    });
    $('#prev-btn').on('click', function () {
        changeImage(-1);
    });

    $('#next-btn').on('click', function () {
        changeImage(1);
    });


    function openLightbox(event) {
        if (event.target.tagName === 'IMG') {
            const clickedIndex = Array.from(images).indexOf(event.target);
            currentIndex = clickedIndex;
            updateLightboxImage();
            $('#lightbox').css('display', 'flex');
        }
    }

    function closeLightbox() {
        $('#lightbox').css('display', 'none');
    }

    function changeImage(direction) {
        currentIndex += direction;
        if (currentIndex >= totalImages) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = totalImages - 1;
        }
        updateLightboxImage();
    }

    function updateLightboxImage() {
        const lightboxImg = document.getElementById('lightbox-img');
        const thumbnailContainer = document.getElementById('thumbnail-container');

        lightboxImg.src = images[currentIndex].src;

        thumbnailContainer.innerHTML = '';

        images.forEach((image, index) => {
            const thumbnail = document.createElement('img');
            thumbnail.src = image.src;
            thumbnail.alt = `Thumbnail ${index + 1}`;
            thumbnail.classList.add('thumbnail');
            thumbnail.addEventListener('click', () => updateMainImage(index));
            thumbnailContainer.appendChild(thumbnail);
        });

        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails[currentIndex].classList.add('active-thumbnail');
    }

    function updateMainImage(index) {
        currentIndex = index;
        updateLightboxImage();
    }

    document.addEventListener('keydown', function (e) {
        if ($('#lightbox').css('display') === 'flex') {
            if (e.key === 'ArrowLeft') {
                changeImage(-1);
            } else if (e.key === 'ArrowRight') {
                changeImage(1);
            }
        }
    });

    async function getImages() {
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'GET',
                url: 'https://retrodtech.com/include/ajax/gallery.php',
                data: {
                    action: 'getImages'
                },
                success: function (response) {
                    var res = JSON.parse(response);
                    res.forEach(element => {
                        loadImage(element.id, element.img);
                    });
                    resolve();
                },
                error: function (error) {
                    console.log(error);
                    reject(error);
                }
            });
        });
    }
});
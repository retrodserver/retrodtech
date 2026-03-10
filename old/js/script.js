
var stickyNav = function () {
  var scrollTop = $(window).scrollTop();

  if (scrollTop > stickyNavTop) {
    $('nav').addClass('sticky');
  } else {
    $('nav').removeClass('sticky');
  }

}


$('nav .toggle').on('click', function (e) {
  e.preventDefault();
  $('nav').toggleClass('toggle--active');
});

$('nav .dropNav').on('click', function (e) {
  e.preventDefault();
  $(this).parent().toggleClass('dropActive');
});



$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: ''
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    step: function () {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};

$('#number1').jQuerySimpleCounter({ end: 7, duration: 3000 });
$('#number2').jQuerySimpleCounter({ end: 10, duration: 3000 });
$('#number3').jQuerySimpleCounter({ end: 20, duration: 2000 });
$('#number4').jQuerySimpleCounter({ end: 1000, duration: 2500 });

$('#number5').jQuerySimpleCounter({ end: 50, duration: 2500 });
$('#number6').jQuerySimpleCounter({ end: 12, duration: 2500 });
$('#number7').jQuerySimpleCounter({ end: 5, duration: 2500 });
$('#number8').jQuerySimpleCounter({ end: 01, duration: 2500 });





var swiper = new Swiper("#mainContent.mySwiper", {
  direction: "vertical",
  slidesPerView: 1,
  spaceBetween: 0,
  mousewheel: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  on: {
    slideChange: () => {
      $('#number1').jQuerySimpleCounter({ end: 7, duration: 3000 });
      $('#number2').jQuerySimpleCounter({ end: 10, duration: 3000 });
      $('#number3').jQuerySimpleCounter({ end: 20, duration: 2000 });
      $('#number4').jQuerySimpleCounter({ end: 1000, duration: 2500 });

      $('#number5').jQuerySimpleCounter({ end: 50, duration: 2500 });
      $('#number6').jQuerySimpleCounter({ end: 12, duration: 2500 });
      $('#number7').jQuerySimpleCounter({ end: 5, duration: 2500 });
      $('#number8').jQuerySimpleCounter({ end: 01, duration: 2500 });
    }
  }
});


// var label = $('#TestimonialSection').find('.swiper-slide').attr('class');

var swiper = new Swiper(".clientSlide.mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },
  pagination: {
    el: ".fraction",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    slideChange: () => {
      console.log(label);
    }
  }
});

var swiper = new Swiper(".TestimonialSection .mySwiper", {
  direction: "vertical",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }, breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 2,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 2,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 3,
    },
  },
});


var num = 80;

$(window).bind('scroll', function () {
  if ($(window).scrollTop() > num) {
    $('nav').addClass('fixed');
  } else {
    $('nav').removeClass('fixed');
  }
});




function validateEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

$('#goto-2').on('click', () => {
  var namei = $('#name').val();
  var email = $('#email').val();
  var mobile = $('#mobile').val();
  if (namei && email && mobile) {
      if (validateEmail(email)) {
          $('#form-section-1').hide();
          $('#form-section-2').show();
          $('#error-field').hide();
      } else {
          $('#error-field').text('Invalid Email!');
          $('#error-field').show();
      }
  } else {
      $('#error-field').text('All fields are required!');
      $('#error-field').show();
  }
});

$('#goto-1').on('click', () => {
  $('#form-section-2').hide();
  $('#form-section-1').show();
});


var typing = new Typed("#mainContent header .text", {
  strings: ["", "Best Hotel-Tech Company Across The Globe.", "Your Direct Booking Master.", "Unlock Your Hotels Digital Presence With Retrod."],
  typeSpeed: 100,
  backSpeed: 40,
  loop: true,
});

var typing = new Typed(".smallScreen header .text", {
  strings: ["", "Best Hotel-Tech Company Across The Globe.", "Your Direct Booking Master.", "Unlock Your Hotels Digital Presence With Retrod."],
  typeSpeed: 100,
  backSpeed: 40,
  loop: true,
});





$(function () {
   $('.banner-carousel-wrapper .single-banner-carousel').slick({
      autoplay: true,
      prevArrow: $('.banner-carousel-wrapper .crsl-prev'),
      nextArrow: $('.banner-carousel-wrapper .crsl-next'),
      responsive: [
         {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              swipeToSlide: true
            }
          }
      ]
   });
})
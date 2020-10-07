$(function () {
  console.log('Product Box Custom - init');

  $('.product-carousel').each(function (num, elem) {
    elem = $(elem);
    elem.slick({
      infinite: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      prevArrow: $(this).parent().find('.crsl-prev'),
      nextArrow: $(this).parent().find('.crsl-next'),
      responsive: [
        {
            breakpoint: 1234,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },

        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                touchThreshold: 20,
                rows: 0,
                speed: 100,
                swipeToSlide: true,
                variableWidth: true
            }
        },

        {
            breakpoint: 564,
            settings: {
                slidesToShow: 2,
                touchThreshold: 20,
                speed: 100,
                rows: 0,
                swipeToSlide: true,
                variableWidth: true
            }
        },
    ]
    });
  })


  var vw = $(window).width();

  $(".product-card .crd-title span").each(function () {
    var text = $(this).text();
    var len = text.length;

    if (vw >= 992 && len > 40) {
      $(this).text($(this).text().substr(0, 40) + '...  ');
    }

    if (vw < 992 && len > 35) {
      $(this).text($(this).text().substr(0, 35) + '...  ');
    }
  })

  $(".product-card .crd-parcel span").each(function () {
    var text = $(this).text();

    if (vw <= 992) {
      $(this).text(text.replace('sem juros', ''));
    }
  })


})

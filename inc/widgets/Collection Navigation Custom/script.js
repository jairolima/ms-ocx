$(function () {

    $('#headerBar .mbl-collection-close, #headerBar .collection-backdrop').on('click', function () {
        $('.collection-navigation').removeClass('active')
        $('.collection-backdrop').removeClass('active')
        $('.mn-list .mn-drpdwn').removeClass('active')
        $('.mbl-collection-close').hide('')
        $('body').removeClass('mbl-blck')
    })


    $('#headerBar .mn-list .mn-lst-lnk').each(function () {
        $(this).on('click', function () {
            $(this).siblings('.mn-drpdwn').addClass('active')
        })
    })

    $('#headerBar .mn-drpdwn .mbl-drpdwn-rtrn').on('click', function () {
        $(this).closest('.mn-drpdwn').removeClass('active')
    })

    // **********************************************
    // User

    // btn to loggin
    $('#headerBar .collection-navigation .usr-btn:nth-child(1)').on('click', function () {
        $(this).hide()
        $('#headerBar .collection-navigation .wllt-btn').show()
        $('#headerBar .collection-navigation .usr-btn:nth-child(2)').show()
        $('#headerBar .collection-navigation .usr-actions').show()
    })

})


// Usar no OCC
var desktop = $(window).width() >= 768;
var main_offsetTop = $('#main').offset().top;
var lastScrollTop = 0;

$(window).on("scroll", function () {
    var st = $(this).scrollTop();

    if (desktop) {
        if (st < main_offsetTop - 128) {
            $(".collection-navigation").removeClass("fixed visible");
        }

        if (st > main_offsetTop) {
            $(".collection-navigation").addClass("fixed");
        }

        if (st < lastScrollTop && st > main_offsetTop) {
            $(".collection-navigation").addClass("visible");
        }

        if (st > lastScrollTop) {
            $(".collection-navigation").removeClass("visible");
        }
    }

    lastScrollTop = st;
});




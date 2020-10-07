$(function () {
    
    // **********************************************
    // Resets

    $('#headerBar .usr-btn:nth-child(2)').hide()
    $('#headerBar .wllt-btn').hide()
    $('#main .rescue-dotz-wrapper').hide()
    $('body').css('opacity', 1)


    // **********************************************
    // Backdrop
    $('#headerBar .header-backdrop').on('click', function(){
        $(this).removeClass('active')
        $('#headerBar .utl_popup-rounded').removeClass('active')
        $('#headerBar .srch-wrapper').removeClass('active')
        $('#headerBar .srch-wrapper .srch-input').val('')
    })


    // **********************************************
    // Search

    // input focus
    $('#headerBar .srch-input').on('focus', function(){
        $(this).parent().toggleClass('active')
        $('#headerBar .header-backdrop').addClass('active')
    })

    // input type
    $('#headerBar .srch-input').on('keydown', function(event){
        var counter = $(this).val().length

        if (counter >= 3) {
            $('.header-search .srch-suggestion-box').addClass('active')
        } else {
            $('.header-search .srch-suggestion-box').removeClass('active')
        }       
    })

    // close suggestion box
    $('.srch-suggestion-box .srch-close').on('click', function(){
        $('#headerBar .utl_popup-rounded').removeClass('active')
        $('#headerBar .srch-wrapper').removeClass('active')
        $('#headerBar .srch-wrapper .srch-input').val('')
        $('#headerBar .header-backdrop').removeClass('active')
    })

    // **********************************************
    // User

    // btn to loggin
    $('#headerBar .header-content .usr-btn:nth-child(1)').on('click', function(){
        $(this).hide()
        $('#headerBar .header-content .wllt-btn').show()
        $('#headerBar .header-content .usr-btn:nth-child(2)').show()
    })

    // btn to open action dropdown
    $('#headerBar .header-content .usr-btn:nth-child(2)').on('click', function(){
        $('#headerBar .header-backdrop').addClass('active')
        $('.header-user .usr-actions').addClass('active')
    })


    // **********************************************
    // Wallet

    // btn expand / retract wallet
    $('#headerBar .wllt-btn').on('click', function(){
        $(this).toggleClass('active')
    })

    // **********************************************
    // Cart

    $('#headerBar .crt-btn').on('click', function(){
        $('#headerBar .header-backdrop').addClass('active')
        $('.header-cart .crt-box').addClass('active')
    })

    // **********************************************
    // Btn Hambuguer

    $('#headerBar .hmbrgr-btn').on('click', function(){
        $('.collection-navigation').addClass('active')
        $('.collection-backdrop').addClass('active')
        $('.mbl-collection-close').show('')
        $('body').addClass('mbl-blck')
    })   

    
    var vw = $(window).width();

    $(".srch-suggestion-box .srch-itm-desc").each(function () {
        var text = $(this).text();
        var len = text.length;        
        
        if (vw >= 992 && len > 200) {
            
            $(this).text($(this).text().substr(0, 200) + '...  ');
        }

        if (vw <= 992 && len > 50) {
            $(this).text($(this).text().substr(0, 50) + '...  ');
        }
    })

})


$(document).ready(function(){
    $("#page").addClass('page-ready')
})

// scroll fixo header

var desktop = $( window ).width() >= 768;
var mobile = $( window ).width() <= 768;

var header_offsetTop = $('.header-main').offset().top;
var main_offsetTop = $('#main').offset().top;
var lastPos = 0;

$(window).on("scroll", function () {
    var st = $(this).scrollTop();
    
    if(desktop) {
        if (st >= header_offsetTop) {
            $(".header-main").addClass("fixed");
        } else if (st < 40) {
            $(".header-main").removeClass("fixed");
        }
    }
    if(mobile) {

        if (st < lastScrollTop && st > main_offsetTop){
            $(".header-main").addClass("fixed");
        }
    
        if (st > lastScrollTop ){
            $(".header-main").removeClass("fixed");
        }

        
        if (st <= main_offsetTop) {
            $(".header-main").removeClass("fixed");
        }

        lastPos = st
    }

});
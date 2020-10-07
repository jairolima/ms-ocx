$(function () {

    // **********************************************
    // Exchange

    $('#headerBar .exchng-toggle-btn').on('click', function(){
        $(this).toggleClass('dotz-selected money-selected')
        $('#headerBar .collection-navigation').toggleClass('dotz-selected money-selected')
        $('.header-wallet .wllt-btn').toggleClass('dotz-selected money-selected')
        $('#main .rescue-dotz-wrapper').toggle()

        var productBox = $('.product-card')

        productBox.toggleClass('bx-money bx-dotz')
        
        if(productBox.hasClass('bx-money')){
            setProductCardsMoney();
        }

        if(productBox.hasClass('bx-dotz')){
            setProductCardsDz();
        }

    })

    $('#headerBar .exchng-money-btn').on('click', function(){
        $('#headerBar .exchng-toggle-btn').addClass('money-selected').removeClass('dotz-selected')
        $('#headerBar .collection-navigation').addClass('money-selected').removeClass('dotz-selected')
        $('.header-wallet .wllt-btn').addClass('money-selected').removeClass('dotz-selected')
        $('.product-card').addClass('bx-money').removeClass('bx-dotz')
        $('#main .rescue-dotz-wrapper').hide()
        setProductCardsMoney();
    });

    $('#headerBar .exchng-dotz-btn').on('click', function(){
        $('#headerBar .exchng-toggle-btn').addClass('dotz-selected').removeClass('money-selected')
        $('#headerBar .collection-navigation').addClass('dotz-selected').removeClass('money-selected')
        $('.header-wallet .wllt-btn').addClass('dotz-selected').removeClass('money-selected')
        $('.product-card').addClass('bx-dotz').removeClass('bx-money')
        $('#main .rescue-dotz-wrapper').show()
        setProductCardsDz();
    });

    setProductCardsMoney = function () {
        console.log('monye');
        
        $('.product-card .crd-parcel span').show()
        $('.product-card .crd-price span, .product-card .crd-price-old span').html(function(i, text) {
            return text.replace('DZ', 'R$').replace('.000', ',00');
        });

        $('.product-card .crd-attached b').html(function(i, text) {
            return text.replace('Clube Dotz', 'Ganhe')
        });

        $('#headerBar .wllt-total').html(function(i, text) {
            return text.replace('DZ 40.600', 'R$ 400,60')
        });
    }

    setProductCardsDz = function () {
        $('.product-card .crd-parcel span').hide()
        $('.product-card .crd-price span, .product-card .crd-price-old span').html(function(i, text) {
            return text.replace('R$', 'DZ').replace(',00', '.000');
        });

        $('.product-card .crd-attached b').html(function(i, text) {
            return text.replace('Ganhe', 'Clube Dotz')
        });

        $('#headerBar .wllt-total').html(function(i, text) {
            return text.replace('R$ 400,60', 'DZ 40.600')
        });
    }    

})
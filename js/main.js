$(document).ready(function() {

    $('.icon-play').on('click', function() {
        $(".teaser__video")[0].play()
    });


    if($(window).scrollTop() > 300) {
        $('.header').addClass('header--fixed');
        $('.header__logo__img').css({'display':'block'});
    } else {
        $('.header').removeClass('header--fixed');
        $('.header__logo__img').css({'display':'none'});
    }
    $(window).on('scroll', function() {
        // $(window).scrollTop() > 300 ? $('.header').addClass('header--fixed') $('.header__logo__img').css({'display':'none'}) : 
        // $('.header').removeClass('header--fixed') $('.header__logo__img').css({'display':'none'});

        if($(window).scrollTop() > 300) {
            $('.header').addClass('header--fixed');
            $('.header__logo__img').css({'display':'block'});
        } else {
            $('.header').removeClass('header--fixed');
            $('.header__logo__img').css({'display':'none'});
        }
    })

})
$(document).ready(function() {
    $(window).scrollTop() > 300 ? $('.header').addClass('header--fixed') : 
    $('.header').removeClass('header--fixed');
    $(window).on('scroll', function() {
        $(window).scrollTop() > 300 ? $('.header').addClass('header--fixed') : 
        $('.header').removeClass('header--fixed');
    })

})
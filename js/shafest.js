$(document).ready(function() {
  
  $(window).on('scroll', function() {
    var header = $('.header');
    var pageOffTop = $(window).scrollTop();
    
    pageOffTop >= 100 ? header.addClass('header--fixed') : header.removeClass('header--fixed');

  })

})
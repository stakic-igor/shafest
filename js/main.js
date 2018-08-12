
$(document).ready(function() {
    $('.loader').fadeOut();
        $('.icon-play').on('click', function() {
        $(".teaser__video")[0].play();
        $('.icon-pause').removeClass('icon--hide');
        $('.icon-pause').addClass('icon--show');
        $('.icon-play').removeClass('icon--show');
        $('.icon-play').addClass('icon--hide');
        
    });
    $('.icon-pause').on('click', function() {
        $('.teaser__video')[0].pause();
        $('.icon-play').addClass('icon--show');
        $('.icon-pause').removeClass('icon--show');
        $('.icon-pause').addClass('icon--hide');
    })

    if($(window).scrollTop() > 300) {
        $('.header').addClass('header--fixed');
       
    } else {
        $('.header').removeClass('header--fixed');
        
    }
    $(window).on('scroll', function() {

        if($(window).scrollTop() > 300) {
            $('.header').addClass('header--fixed');
            
        } else {
            $('.header').removeClass('header--fixed');
           
        }
    })

    // menu toggle
    $('.nav__icon').on('click', function() {
        $('.nav .nav__dropdown').toggleClass('nav-toggle')
    })

    var xhr = new XMLHttpRequest();
    var url = 'api/news.php';
    
    console.log('xx');
    xhr.open('GET', url, true);
    
    xhr.onreadystatechange = function(){
        if(xhr.status == 200 && xhr.readyState == 4) {
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        }
    }
    xhr.send();
})


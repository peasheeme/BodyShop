$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 200,
        autoplaySpeed: 200,
        autoplayTimeout: 2000,
        autoplayHoverPause:true,
        navigation:true,
        loop : true,
        margin: 10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
            },

            600:{
                items:3,
                nav:false
            },

            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });
});
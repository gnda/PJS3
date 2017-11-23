$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        center: true,
        loop: true,
        dots: false,
        items: 4,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplaySpeed: 700
    });

    $(".back-to-top").click(function(){
        $("html,body").animate({
            scrollTop: $("body").offset().top
        },"1000");
        return false
    });
});


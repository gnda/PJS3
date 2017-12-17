$(document).ready(function(){
    $(".back-to-top").click(function(){
        $("html,body").animate({
            scrollTop: $("body").offset().top
        },"1000");
    });

	if ($(window).scrollTop() > 10)
		$('.back-to-top').fadeIn('slow');
	
	$(window).scroll(function() {
		if ($(window).scrollTop() > 10) {
			$('.back-to-top').fadeIn('slow');
		}
		else {
			$('.back-to-top').fadeOut('slow');
		}
	});
});
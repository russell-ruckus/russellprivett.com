/* Scroll To
   ========================================================================== */

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 300);
            return false;
        }
    }
});

/* Close Expanded Main Menu when clicked
   ========================================================================== */
   
$('.top-bar-section li a').click(function() {
	if($('.top-bar').hasClass('expanded')) {
		$('.top-bar, [data-topbar]').css('height', '').removeClass('expanded');
		$('.main-nav').removeClass('expanded');
		$('body').addClass('f-topbar-fixed');
	}
});
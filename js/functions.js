// JavaScript Document
function init(){

	//Nav functions
	$(".nav-logo-inner").click(function() { //Nav Toggle Slide
		if($(window).width() > 968) {
			if($('.nav-regular').css('top') == '-40px') {
				$(".nav-regular").animate({
					top: '0',
				}, 333, 'easeOutQuint');
				logo_shrink();	
			}
			if($('.nav-regular').css('top') == '0px') {
				$(".nav-regular").animate({
					top: '-40px',
				}, 333, 'easeOutQuint');
				logo_expand();
			}
		}
		if($(window).width() <= 968) {
			if($(window).width() > $(window).height())
			{
				if($('.nav-regular').css('top') == '-40px') {
					$(".nav-regular").animate({
						top: '0',
					}, 333, 'easeOutQuint');
					logo_shrink();	
				}
				if($('.nav-regular').css('top') == '0px') {
					$(".nav-regular").animate({
						top: '-40px',
					}, 333, 'easeOutQuint');
					logo_expand();
				}
			}
			if($(window).width() <= $(window).height())
			{
				if($('.nav-regular').css('top') == '-148px') {
					$(".nav-regular").animate({
						top: '0',
					}, 333, 'easeOutQuint');
					logo_shrink();	
				}
				if($('.nav-regular').css('top') == '0px') {
					$(".nav-regular").animate({
						top: '-148px',
					}, 333, 'easeOutQuint');
					logo_expand();
				}
			}
		}
	});//Nav toggleSlide -end
	
	$(".nav-logo-inner").mouseenter(function() { //Logo Animation Mouse In
		logo_shrink();
	});//Logo Animation Mouse In -end
	
	$(".nav-logo-inner").mouseleave(function()
	{ //Logo Animation Mouse Out
		if($(window).width() > 968) {
			if($('.nav-regular').css('top') == '-40px') {
				logo_expand();
			}
			if($('.nav-regular').css('top') == '0px') {

			}
		}
		if($(window).width() <= 968) {
			if($(window).width() > $(window).height()) {
				if($('.nav-regular').css('top') == '-40px') {
					logo_expand();
				}
				if($('.nav-regular').css('top') == '0px') {

				}
			}
			if($(window).width() <= $(window).height()) {
				if($('.nav-regular').css('top') == '-148px') {
					logo_expand();
				}
				if($('.nav-regular').css('top') == '0px') {

				}
			}
		}
	});//Logo Animation Mouse Out -end
	
	setTimeout(function() { //Logo Animation Timeout
		logo_expand();
	}, 1500);//Logo Animation Timeout -end
	
	$(window).resize(function() { //Nav Responsive Resize
		if ($(window).width() > 968)
		{
			$(".nav-regular").css('top','-40px');
		}
		if ($(window).width() <= 968)
		{
			if($(window).width() > $(window).height())
			{
				$(".nav-regular").css('top','-40px');
			}
			if($(window).width() <= $(window).height())
			{
				$(".nav-regular").css('top','-148px');
			}
		}
	});//function resize -end
}

function logo_shrink() { //Logo expand animation
	$(".nav-hover").stop().animate({
		top: '20px',
		height: '20px',
	}, 800, 'easeInOutQuad');
}//Logo expand animation -end

function logo_expand() {//Logo shrink animation
	$(".nav-hover").stop().animate({
		top: '0',
		height: '60px',
	}, 800, 'easeInOutQuad');
}//Logo shrink animation -end
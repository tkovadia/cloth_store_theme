jQuery(document).ready(function(){
    $(".head-search").click(function(){
			$(".search-main").toggle();
		});
	});

	$(document).on('click', function(e) { 
	if ($(e.target).closest('.search-main').length ) 
		{ 
			$("navbar-toggle").click(".search-main").css("display", "none");
		}
	else if ( ! $(e.target).closest('.head-search').length ) 
		{ 
			$('.search-main').hide(); 
		} 
	else
		{ 
			return ; 
		} 
});
		
$(document).ready(function(){
	
	jQuery(window).bind('resize load', function() {
		if (jQuery(this).width() < 767) {
			jQuery('.service-detail-main .collapse').removeClass('in');
			jQuery('.service-detail-main .collapse').addClass('out');
		} else {
			jQuery('.service-detail-main .collapse').removeClass('out');
			jQuery('.service-detail-main .collapse').addClass('in');
		}
	});
	
	
	if ($(window).width() >= 1025) {
		 $(window).scroll(function() {
			if ($(this).scrollTop() > 1){  
				$('.menu-main').addClass("sticky");
			  }
			  else{
				$('.menu-main').removeClass("sticky");
			  }
	   	});
	  }
	 else {
		$('.menu-main').removeClass("sticky");
	 }
	 
	  
	 // ---back top js----- //
	  jQuery('body').append('<div id="toTop" class="btn top-btn"><i class="fa fa-angle-up"></i><div clas="top-text">top</div></div>');
    	jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() != 0) {
				jQuery('#toTop').fadeIn();
			} else {
				jQuery('#toTop').fadeOut();
			}
		}); 
    jQuery('#toTop').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	// ---End back top js----- //
	
		
	(function(){

		  var parallax = document.querySelectorAll(".parallax"),
			  speed = 0.91;
		
		  window.onscroll = function(){
			[].slice.call(parallax).forEach(function(el,i){
		
			  var windowYOffset = window.pageYOffset,
				  elBackgrounPos = "center " + (windowYOffset * speed) + "px";
			  
			  el.style.backgroundPosition = elBackgrounPos;
		
			});
		  };
		  
		  
			  
		})();
		
	jQuery(".welcome_content").mCustomScrollbar({
		mouseWheel:false
	});	
		
});



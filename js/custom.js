(function($){

    $('.posts-navigation ').addClass('post-navigation');
	$(function(){
		if( $.fn.flexslider ) {
           $('.flexslider').flexslider();
           $('.flex-carousel').flexslider({
				animation: "slide",
				animationLoop: true,
				controlNav: false,
				itemWidth: 250,
				itemMargin: 5
			});
		} 

	});
	   

})(jQuery);

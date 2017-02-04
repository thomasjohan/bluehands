(function($) {
	stickyHeader = function() {
		$(window).scroll(function() {
	      if ($(document).scrollTop() > 300) {
	        $(".site-header").addClass("sticky");
	      }
	      else {
	        $(".site-header").removeClass("sticky");
	      }
	    });
	};
})(jQuery); // Fully reference jQuery after this point.

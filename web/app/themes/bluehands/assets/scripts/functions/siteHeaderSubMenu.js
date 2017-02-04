(function($) {
siteHeaderSubMenu = function() {
	$(".site-header .web-menu .menu-item-has-children").hover(function () {
	      $(this).find(".sub-menu").show();
	  }, function () {
	      $(this).find(".sub-menu").hide();
	});
};
})(jQuery);
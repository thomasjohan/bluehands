(function($) {
	gallery = function() {
		lightbox.option({
		  'resizeDuration': 200,
		  'wrapAround': true,
		  'disableScrolling' : true,
		  'albumLabel' : "%1/%2"
		});

		$(".gallery .gallery-item a").attr('data-lightbox','gallery');
	};
})(jQuery);

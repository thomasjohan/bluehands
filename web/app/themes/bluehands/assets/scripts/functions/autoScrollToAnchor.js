(function($) {
autoScrollToAnchor = function() {
	$('a').click(function(event){
      var hash = $(this).prop("hash");
      var linkWithoutHash = $(this).prop("href").replace(/\#.*$/, '');
      var locationWithoutHash = window.location.href.replace(/\#.*$/, '');

      //if the link leads to this page and there is a hash part then scroll to element on same page
      if(linkWithoutHash === locationWithoutHash && /^#/.test(hash) === true) {
        event.preventDefault();
        history.pushState(null,null,hash);
        $('html,body').stop(true,false);
        $(hash).scrollToBySpeed({
          speed: 2000,
          offset: 200
        });
          /* do not run AJAX function */ 
      }
    });
};
})(jQuery);

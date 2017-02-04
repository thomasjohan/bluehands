(function($) {
mobileNav = function() {
    $('.site-header .mobile-nav-toggle').click(function(){
      $('body').toggleClass('mobile-nav-open');
    });

    $(window).resize(function() {
      $('body').removeClass('mobile-nav-open');
    });
};
})(jQuery);

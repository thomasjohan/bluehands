(function($) {
questionsAndAnswers = function() {
	$('.question').click(function(e){
	      $(this).parent().find('.answer').slideToggle(50);
	      $(this).parent().find('.marker').toggleClass('up');
	    }); 
	};  
})(jQuery);
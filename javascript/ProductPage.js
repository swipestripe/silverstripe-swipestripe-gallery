/**
 * For displaying product images with Fancybox.
 */
;(function($) {
	$(document).ready(function() { 
		
		var highlightThumb = function(currentID) {
		$('.thumbs a').each(function(){
			if ($(this).attr('id') == currentID) {
				$(this).addClass('current-slide');
			}
			else {
				$(this).removeClass('current-slide');
			}
		});
		}
		
		$('#slider').anythingSlider({
			theme: 'fancybox',
			buildNavigation: false,
			buildStartStop: false,
			hashTags: false,
			onInitialized : function(e, slider) {
				highlightThumb('slide-thumb-'+slider.currentPage);
			},
			onSlideInit: function(e, slider){
				highlightThumb('slide-thumb-'+slider.targetPage);
			}
		});

		$('.lightbox').fancybox();
		
		$('.slide-thumb').bind('click', function(e) {
			e.preventDefault();
			var slide = $(this).attr('href').replace(/.*#slide-/i, '');
				$('#slider').anythingSlider(slide);
		});

	})
})(jQuery);

(function($) {
	Drupal.behaviors.dukelib = {
		attach: function(context, settings) {
			$('.item-list', '.myCarouselNews').jCarouselLite({
				btnNext		: '#nextNews',
				btnPrev		: '#prevNews',
				visible		: 3,
				scroll		: 1,
				easing		: 'easeInOut',
				auto		: 4340,
				speed		: 1000,
				circular	: true,
				vertical	: false
			});
		}
	}
})(jQuery);

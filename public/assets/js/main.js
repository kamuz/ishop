$(document).ready(function() {
	/**
	 * Top menu init
	 */
	$(".memenu").memenu();
	if ($("#slider4").length > 0) {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	};
	var menu_ul = $('.menu_drop .tab > a + div'),
		menu_a = $('.menu_drop .tab a');
	menu_ul.hide();
	menu_a.click(function(e) {
		e.preventDefault();
		if (!$(this).hasClass('active')) {
			menu_a.removeClass('active');
			menu_ul.filter(':visible').slideUp('normal');
			$(this).addClass('active').next().stop(true, true).slideDown('normal');
		} else {
			$(this).removeClass('active');
			$(this).next().stop(true, true).slideUp('normal');
		}
	});

	/**
	 * Currency change
	 */
	$('#currency').change(function(){
		window.location = 'currency/change?curr=' + $(this).val();
	});

});
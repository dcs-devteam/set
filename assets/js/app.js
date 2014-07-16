$(document).ready(function() {
	evaluation_form.initialize();
});

var evaluation_form = {
	initialize: function() {
		$('#1a-next, #1b-next, #1c-next').on('click', function() {
			$('#1-dropdown > .active').next('li').find('a').trigger('click');
		});
		$('#1b-prev, #1c-prev, #1d-prev').on('click', function() {
			$('#1-dropdown > .active').prev('li').find('a').trigger('click');
		});
		$('#1d-next').on('click', function() {
			$('.nav-tabs > .active').next('li').find('a').trigger('click');
		});
		$('#2-next').on('click', function() {
			$('#3-dropdown li:first-child a').trigger('click');
		});
		$('#2-prev, #3a-prev').on('click', function() {
			$('.nav-tabs > .active').prev('li').find('a').trigger('click');
		});
		$('#3a-next, #3b-next').on('click', function() {
			$('#3-dropdown > .active').next('li').find('a').trigger('click');
		});
		$('#3b-prev, #3c-prev').on('click', function() {
			$('#3-dropdown > .active').prev('li').find('a').trigger('click');
		});
	}
}
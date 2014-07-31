$(document).ready(function() {
	evaluation_form.initialize();
});

var evaluation_form = {
	initialize: function() {

		$('#evaluation-form').submit(function( event ) {
			if (confirm("Are you sure you want to submit the form?\nPlease review the form first before submitting.")) {
				return true;
			} else {
				event.preventDefault();
			}
		});
	}
}
$(document).ready(function() {
	evaluation_form.initialize();
 	tables.initialize();
	$(".tooltip-wrapper").tooltip({
		placement:"right",
		container:"body",
		trigger:"hover"
	});
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

var tables = {
	initialize: function() {
		$('.data-table.account-table').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[4,'asc']]
		});
		$('.data-table.yearsem-table').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[3,'desc'],[2,'desc'],[0,'desc'],[1,'desc']]
		});
		$('.data-table:not(".account-table,.yearsem-table")').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[1,'asc']]
		});
	}
}
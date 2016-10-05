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

		$('#cancel-submit').click(function( event ) {
			if (confirm("Are you sure you want to cancel the evaluation?\nYou can still evaluate again at the student homepage.")) {
				return true;
			} else {
				event.preventDefault();
			}
		});
	}
}

var tables = {
	initialize: function() {
		$.extend( $.fn.dataTable.defaults, {
	    // Disable sorting
      "aoColumnDefs" : [ {
          'bSortable' : false,
          'aTargets' : [ "no-sort" ],
      }]
		} );
		$('.data-table.account-table').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[4,'asc']],
			"aoColumnDefs": [{ "bSearchable": false, "aTargets": [ 0 ] }]
		});
		$('.data-table.yearsem-table').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[2,'desc'],[3,'desc'],[0,'desc'],[1,'desc']]
		});
		$('.data-table.office-table').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[1,'asc']],
			"aoColumnDefs": [{ "bSearchable": false, "aTargets": [ 0 ] }]
		});
		$('.class-table').DataTable( {
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[1,'asc']],
			"aoColumnDefs": [{ "bSearchable": false, "aTargets": [ 0,4 ] }]
		});
		$('.student-table').DataTable( {
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 25,
			"order": [[3,'asc'],[1,'asc'], [2,'asc']]
		});
		$('.data-table:not(".account-table,.yearsem-table,.class-table,.office-table,.student-table")').DataTable({
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
			"pageLength": 10,
			"order": [[1,'asc']],
			"aoColumnDefs": [{ "bSearchable": false, "aTargets": [ 0 ] }]
		});
	}
}
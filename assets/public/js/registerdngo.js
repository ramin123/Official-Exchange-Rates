var ngoTable;

$(document).ready(function() {
	// $("#regDate").datepicker();

	ngoTable=$("#ngoTable").DataTable({

'ajax': 'php_action/fetchRegNgo.php',
		'order': []	
	});

	});



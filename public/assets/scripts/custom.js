$(document).ready(function(){
	$('#form-data').hide();
	$('#btn-back').hide();
	$('#btn-add-data').click(function(){
		$('#table-data').hide();
		$('#form-data').show();
		$('#btn-back').show();
		$('#btn-add-data').hide();
	});
	$('#btn-back').click(function(){
		$('#table-data').show();
		$('#form-data').hide();
		$('#btn-back').hide();
		$('#btn-add-data').show();

	});
});
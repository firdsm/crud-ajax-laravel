$(function () {

	var $tabelBody = $('tbody');
	var $tableTemplate = $('#table-template').html();
	var $detailTemplate = $('#detail-template').html();
	var $editTemplate = $('#edit-template').html();

	function renderTable(employee) {
		$tabelBody.append(Mustache.render($tableTemplate, employee));		
	}

	function csrfSetup() {
		$.ajaxSetup({
			headers : {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
	}

	$.ajax({
		type : 'GET',
		url : '/employee',
		success : function (employees) {			
			$.each(employees, function (i, employee) {
				renderTable(employee);	
			});
		}
	});

	$('#store').on('click', function () {
		var $form = $('#form-create');

		var employee = {
			firstname : $form.find('input[name~="firstname"]').val(),
			lastname : $form.find('input[name~="lastname"]').val(),
			address : $form.find('input[name~="address"]').val(),
			email : $form.find('input[name~="email"]').val(),
		};

		csrfSetup();

		$.ajax({
			type: 'POST',
			url : '/employee',
			data : employee,
			success : function (newEmployee) {
				console.log(newEmployee);
				renderTable(newEmployee);
				$form.find('input').val('');
				$('#create-modal').modal('hide');	
			}
		});
	});

	$tabelBody.delegate('.detail','click', function () {
		event.preventDefault();
		var employeeId = $(this).attr('data-id');

		$.ajax({
			type : 'GET',
			url : '/employee/' + employeeId,
			success : function (employee) {
				var output = Mustache.render($detailTemplate, employee);
				$('#form-detail').html(output);	
				$('#detail-modal').modal();			
			}
		});	
	});

	$tabelBody.delegate('.edit','click', function () {
		event.preventDefault();
		var employeeId = $(this).attr('data-id');

		$.ajax({
			type : 'GET',
			url : '/employee/' + employeeId,
			success : function (employee) {
				var output = Mustache.render($editTemplate, employee);
				$('#form-edit').html(output);
				$('#edit-modal').modal();
			}
		});	
	});

	$('#update').on('click', function () {
		var $form = $('#form-edit');
		var employeeId = $form.find('input[name~="id"]').val();
		var $rowTable = $tabelBody.find("[data-id='"+employeeId+"']");

		var employee = {
			firstname : $form.find('input[name~="firstname"]').val(),
			lastname : $form.find('input[name~="lastname"]').val(),
			address : $form.find('input[name~="address"]').val(),
			email : $form.find('input[name~="email"]').val(),
		};

		csrfSetup();

		$.ajax({
			type: 'PUT',
			url : '/employee/'+employeeId,
			data : employee,
			success : function (updatedEmployee) {				
				var output = Mustache.render($tableTemplate, updatedEmployee);
				$rowTable.replaceWith(output);
				$form.find('input').val('');
				$('#edit-modal').modal('hide');	
			}
		});
	});

	$tabelBody.delegate('.delete','click', function () {
		event.preventDefault();
		var employeeId = $(this).attr('data-id');
		var $rowTable = $(this).closest('tr');

		csrfSetup();

		$.ajax({
			type : 'DELETE',
			url : '/employee/' + employeeId,
			success : function (employee) {				
				$rowTable.remove();				
			}
		});	
	});

});
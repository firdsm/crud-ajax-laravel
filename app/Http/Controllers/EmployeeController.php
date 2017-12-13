<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
	public function index()
	{
		return view('employee');
	}

	public function showAll()
	{
		return Employee::get();
	}

	public function show(Employee $employee)
	{
		return $employee;
	}

	public function store()
	{
		$employee = Employee::create(request([
			'firstname',
			'lastname',
			'address',
			'email'
		]));    	

		return $employee;
	}

	public function update(Employee $employee)
	{
		$employee->update(request([
			'firstname',
			'lastname',
			'address',
			'email'
		]));

		return $employee;
	}

	public function destroy(Employee $employee)
	{
		$employee->delete();
	}
}

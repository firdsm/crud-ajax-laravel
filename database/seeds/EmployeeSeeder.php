<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
        	'firstname' => 'John',
        	'lastname' => 'Doe',
        	'address' => 'Lost Angeles',
        	'email' => 'johndoe@example.com'
        ]);
    }
}

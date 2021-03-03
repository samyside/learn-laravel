<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Employee extends Controller {
	private $employees = [];

	public function __construct() {
		$this->employees = [
			1 => [
				'name' => 'Steve',
				'surname' => 'Clark',
				'salary' => 1000
			],
			2 => [
				'name' => 'Bob',
				'surname' => 'Harrison',
				'salary' => 2500
			],
			3 => [
				'name' => 'Alice',
				'surname' => 'Elson',
				'salary' => 5000
			],
			4 => [
				'name' => 'Rocky',
				'surname' => 'Stallone',
				'salary' => 4000
			]
		];
	}

	public function showOne($id) {
		foreach ($this->employees as $key => $empl) {
			if ($id == $key) {
				return view('employee',
					[
						'name' => $empl['name'],
						'salary' => $empl['salary']
					]);
			}
		}
		return 'Error: Employee not found';
	}

	public function showField($id, $param) {
		foreach ($this->employees as $key => $empl) {
			if ($id == $key) {
				if ($param == 'name') return $empl['name'];
				elseif ($param == 'surname') return $empl['surname'];
				elseif ($param == 'salary') return $empl['salary'];
				else return 'Error: parameter is invalid';
			}
		}
		return 'Error: Employee not found';
	}

	public function aboutEmployee($name, $age) {
		if (!isset($name) || !isset($age)) {
			return 'Error! Wrong some input value (or values)';
		}
		return view('about-employee', 
			[
				'name' => $name,
				'age' => $age
			]);
	}
}

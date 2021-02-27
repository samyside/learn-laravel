<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Employee extends Controller {
	private $employees = [];

	public function __construct() {
		$this->employees = [
			1 => [
				'name' => 'user1',
				'surname' => 'surname1',
				'salary' => 1000
			],
			2 => [
				'name' => 'user1',
				'surname' => 'surname1',
				'salary' => 1000
			],
			3 => [
				'name' => 'user1',
				'surname' => 'surname1',
				'salary' => 1000
			],
			4 => [
				'name' => 'user4',
				'surname' => 'surname4',
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
}

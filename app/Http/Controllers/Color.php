<?php 
namespace App\Http\Controllers;
use App\http\Controllers\Controller;

/**
 * Do some practice on lesson 5
 */
class Color extends Controller {
	private $color;

	public function __construct() {
		$this->color = 'black';
	}

	public function showColor($color='white', $output='') {
		return view('color', 
			[
				'color' => $color,
				'colors' => ['black', 'red', 'blue', 'green'],
				'output' => $output
			]);
	}
}
?>
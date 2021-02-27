<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller {
	// public function show($param = 0) {
	// 	return $param;
	// }

	public function show($param1=0, $param2=0) {
		return view('test', 
			[
				'var1' => '1',
				'var2' => '2',
				'var3' => '3'
			]
		);
	}
}

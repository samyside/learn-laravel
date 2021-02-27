<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller {
	public function showOne($param=0) {
		$pages = [
			1 => 'Страница 1',
			2 => 'Страница 2',
			3 => 'Страница 3',
			4 => 'Страница 4',
			5 => 'Страница 5'
		];

		foreach ($pages as $key => &$page) {
			if ($param == $key) {
				return $page;
			}
		}
		return 'Страница не найдена';
	}

	public function showAll() {
		return 'Показывает все записи';
	}
}
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('Welcome');
});

Route::get('user/show-{id}', function($id) {
	return $id;
});

Route::get('/test/', function () {
	return '!';
});

Route::get('/dir/test/', function () {
	return '!!';
});

Route::get('user/{id?}', function($id = 0) {
	return 'user = '. $id;
})->where('id', '[0-9]+');

Route::get('user/{name}', function($name) {
	return 'имя юзера = '. $name;
});

Route::get('user/{id}/{name}', function($id, $name) {
	return 'name = '. $name. ' id = '. $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]{2,}']);

Route::get('sum/{num1}/{num2}', function($num1, $num2) {
	return $num1 + $num2;
});

Route::get('articles/{date}', function($date) {
	return 'Success! '. $date;
})->where('date', '[0-9]{4}\-[0-9]{2}\-[0-9]{2}');

Route::get('users/{order}', function($order) {
	return 'find by '. $order;
})->where('order', 'name|surname|age');

Route::get('{year}/{month}/{day}', function($year, $month, $day) {
	return 'Success! '. $day;
})->where([
	'year' => '[0-9]{4}',
	'month' => '[0-9]{2}',
	'day' => '[0-9]{2}'
]);

/*
Работа с котроллерами
*/
Route::get('test/show', 'TestController@show');
Route::get('test/show/{param?}', 'TestController@show');
Route::get('test/show/{param1}/{param2}', 'TestController@show');
Route::get('test/sum/{num1}/{num2}', 'Test@sum')->where([
		'num1' => '[0-9]+',
		'num2' => '[0-9]+'
	]);

Route::get('pages/show/{param?}', 'Page@showOne')->where('param', '[0-9]+');
Route::get('pages/all', 'Page@showAll');

// Lesson 5
Route::get('color/{color?}/{output?}', 'Color@showColor');

// Employee
Route::get('employee/{id}', 'Employee@showOne')->where('id', '[0-9]+');
Route::get('employee/{id}/{param}', 'Employee@showField')->where(
	[
		'id' => '[0-9]+',
		'param' => '[a-z]{4,}'
	]);

Route::get('employee/{name}/{age}', 'Employee@aboutEmployee')
	->where([
		'name' => '[a-z]+',
		'age' => '[0-9]+'
	]);

// Lesson 06. If(){} in Blade
Route::get('lesson-6/age/{age?}', 'Lesson06.If@if');

Route::get('blade/', function() {
	return view('child');
});

Route::get('application', function() {
	return view('sections.templates');
});
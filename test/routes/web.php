<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/user', function () {
    return "Mate adamia";
});
Route::get('/age', function () {
    return "20";
});
Route::get('/hobby', function () {
    return "chess";
});
Route::get('/program', function () {
    return 'It';
});
Route::get('/course', function () {
    return "Web Programming (Back End Development)";
});
Route::post('/post', function () {
    $array= ["message" => "წარმატებით განახლდა"];
    echo json_encode($array);
});
Route::put('/put', function () {
    $array= ["message" => "წარმატებით დაემატა"];
    echo json_encode($array);
});
Route::delete('/delete', function () {
    $array= ["message" => "წარმატებით წაიშალა"];
    echo json_encode($array);
});




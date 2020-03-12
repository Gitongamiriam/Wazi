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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'hello world';
// });
use App\Http\Controllers\pagesController;

Route::get('/', 'PagesController@index');
Route::get('/availability', 'PagesController@available');
Route::get('/createc', 'PagesController@create_content');
Route::get('/content','PagesController@contentpic');



Route::post('/content','PagesController@contentpic');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




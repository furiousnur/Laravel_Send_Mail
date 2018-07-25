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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/sendExam', 'ExamController@sendExam');
Route::post('/sendExam', 'ExamController@sendExam');
Route::get('/getSendMail', 'ExamController@getSendMail');

Route::get('/insertinfo', 'ExamController@insertinfo');
Route::post('/submit_info', 'ExamController@submit_info');

Route::post('/submit_sub', 'ExamController@submit_sub');
Route::get('/insertsub', 'ExamController@insertsub');

Route::get('/insertScore', 'ExamController@insertScore');
Route::post('/submitScore', 'ExamController@submitScore');
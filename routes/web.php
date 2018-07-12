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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/reports', 'ReportsController@index');

Route::post('/reports', 'ReportsController@store');

Route::patch('/reports/update', 'ReportsController@update');

Route::delete('/reports/delete/{report}', 'ReportsController@delete');

//

Route::get('/reports/{report}/tasks', 'TasksController@index');

Route::get('/reports/{report}/tasks/{task}', 'TasksController@show');

Route::post('/reports/{report}/tasks', 'TasksController@store');

Route::patch('/tasks/update', 'TasksController@update');

Route::delete('/tasks/delete/{task}', 'TasksController@delete');

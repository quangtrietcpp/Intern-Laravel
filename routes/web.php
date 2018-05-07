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
/*
Route::get('jobs/create', 'JobsController@create')->name('jobs.create');
Route::post('jobs/store', 'JobsController@store')->name('jobs.store');
*/
Route::resource('jobs', 'JobsController');
Route::resource('categories', 'CategoriesController');
Route::resource('users', 'UsersController');
Route::resource('applications', 'ApplicationsController');

Route::get('find_job', 'JobsController@find_job')->name('find_job');
Route::get('apply/{job_id}', function($job_id){
    return view('users.apply', ['job_id' => $job_id]);
})->name('apply');
/*
Route::get('top/index', 'JobsController@index')->name('top.index');
Route::get('users/create', 'UsersController@create')->name('users.create');
Route::get('users/apply', 'UsersController@apply')->name('users.apply');
*/

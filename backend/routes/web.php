<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('student')->group(function () use ($controller_path) {
    Route::get('/', $controller_path . '\student\StudentController@index')->name('student');
    Route::get('/create', $controller_path . '\student\StudentController@create')->name('student');
    Route::post('/store', $controller_path . '\student\StudentController@store')->name('student.store');
    Route::get('/edit/{id}', $controller_path . '\student\StudentController@edit')->name('student');
    Route::put('/edit/{id}', $controller_path . '\student\StudentController@update')->name('student.update');
    Route::delete('/delete/{id}', $controller_path . '\student\StudentController@destroy')->name('student.destroy');
    Route::get('/search', $controller_path . '\student\StudentController@search')->name('student.search');
    Route::get('/profile', $controller_path . '\student\StudentController@profile');
});

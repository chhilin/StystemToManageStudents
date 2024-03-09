<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student\StudentController;

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

Route::redirect("/", "/like_share_comment");

Route::prefix('like_share_comment')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student');
});


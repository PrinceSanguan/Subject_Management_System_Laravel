<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StudentController;

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


Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('signup', [SignupController::class, 'index'])->name('signup');

Route::get('student/profile', [StudentController::class, 'index'])->name('student.profile');
Route::get('student/adding', [StudentController::class, 'adding'])->name('student.adding');
Route::get('student/dropping', [StudentController::class, 'dropping'])->name('student.dropping');
Route::get('student/transfer', [StudentController::class, 'transfer'])->name('student.transfer');

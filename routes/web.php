<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdaaController;

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

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/account', [AdminController::class, 'account'])->name('admin.account');
Route::get('admin/adding', [AdminController::class, 'adding'])->name('admin.adding');
Route::get('admin/dropping', [AdminController::class, 'dropping'])->name('admin.dropping');
Route::get('admin/transfer', [AdminController::class, 'transfer'])->name('admin.transfer');

Route::get('adaa/profile', [AdaaController::class, 'index'])->name('admin.profile');
Route::get('adaa/adding', [AdaaController::class, 'adding'])->name('admin.adding');
Route::get('adaa/dropping', [AdaaController::class, 'dropping'])->name('admin.dropping');
Route::get('adaa/transfer', [AdaaController::class, 'transfer'])->name('admin.transfer');

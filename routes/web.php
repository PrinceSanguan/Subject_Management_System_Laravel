<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdaaController;
use App\Http\Controllers\DepartmentHeadController;
use App\Http\Controllers\PicController;

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
Route::post('signup', [SignupController::class, 'register'])->name('register');

Route::get('verify', [SignupController::class, 'verify'])->name('verify');
Route::post('verify', [SignupController::class, 'verifyOtp'])->name('verify.otp');

Route::get('student/profile', [StudentController::class, 'index'])->name('student.profile');
Route::get('student/adding', [StudentController::class, 'adding'])->name('student.adding');
Route::get('student/dropping', [StudentController::class, 'dropping'])->name('student.dropping');
Route::get('student/transfer', [StudentController::class, 'transfer'])->name('student.transfer');

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/account', [AdminController::class, 'account'])->name('admin.account');
Route::get('admin/adding', [AdminController::class, 'adding'])->name('admin.adding');
Route::get('admin/dropping', [AdminController::class, 'dropping'])->name('admin.dropping');
Route::get('admin/transfer', [AdminController::class, 'transfer'])->name('admin.transfer');

Route::get('adaa/profile', [AdaaController::class, 'index'])->name('adaa.profile');
Route::get('adaa/adding', [AdaaController::class, 'adding'])->name('adaa.adding');
Route::get('adaa/dropping', [AdaaController::class, 'dropping'])->name('adaa.dropping');
Route::get('adaa/transfer', [AdaaController::class, 'transfer'])->name('adaa.transfer');

Route::get('department-head/profile', [DepartmentHeadController::class, 'index'])->name('department-head.profile');
Route::get('department-head/subject', [DepartmentHeadController::class, 'subject'])->name('department-head.subject');
Route::get('department-head/logs', [DepartmentHeadController::class, 'logs'])->name('department-head.logs');
Route::get('department-head/adding', [DepartmentHeadController::class, 'adding'])->name('department-head.adding');
Route::get('department-head/dropping', [DepartmentHeadController::class, 'dropping'])->name('department-head.dropping');
Route::get('department-head/transfer', [DepartmentHeadController::class, 'transfer'])->name('department-head.transfer');

Route::get('pic/profile', [PicController::class, 'index'])->name('pic.profile');
Route::get('pic/adding', [PicController::class, 'adding'])->name('pic.adding');
Route::get('pic/request', [PicController::class, 'request'])->name('pic.request');
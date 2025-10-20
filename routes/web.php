<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendaftarkan route web untuk aplikasi kamu.
| Route ini akan dimuat oleh RouteServiceProvider dan semuanya akan
| ditempatkan di dalam group "web middleware".
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route utama untuk masing-masing menu
Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('positions', PositionController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('report', ReportController::class);
Route::resource('settings', SettingController::class);

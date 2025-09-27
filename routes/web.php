<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route resource untuk employees
Route::resource('employees', EmployeeController::class);

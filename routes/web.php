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
Route::get('/login',[\App\Http\Controllers\StudentController::class,'login']);
Route::post('/login_user',[\App\Http\Controllers\StudentController::class,'login_user']);
Route::get('/register',[\App\Http\Controllers\StudentController::class,'register']);
Route::post('/save_student',[\App\Http\Controllers\StudentController::class,'save_student']);
Route::get('/dashboard',[\App\Http\Controllers\StudentController::class,'dashboard'])->name('dashboard');
//Route::post('/login',[\App\Http\Controllers\StudentController::class,'login']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
Route::get('/students',[StudentController::class,'index']);
Route::post('/submit-students',[StudentController::class,'store']);
Route::get('/teachers',[TeacherController::class,'index']);
Route::post('/submit-teacher',[TeacherController::class,'store']);
Route::put('/teacher-update/{id}',[TeacherController::class,'update']);
Route::delete('/teacher-delete/{id}',[TeacherController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

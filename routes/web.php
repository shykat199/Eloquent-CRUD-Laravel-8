<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'student'])->name('add-student');
Route::post('/',[StudentController::class,'createStudent'])->name('add-student');


Route::get('/show-student',[StudentController::class,'showStudent'])->name('show-student');


Route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('edit-student');
Route::post('/update-student',[StudentController::class,'updateStudent'])->name('update-student');


Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('delete-student');

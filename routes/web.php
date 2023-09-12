<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RateController;

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
Route::get('/home',[usercontroller::class,'index']);
Route::get('/majors',[MajorController::class,'index'])->name('majors.index');

Route::put('/major/update/{id}',[MajorController::class,'update'])->name('major.update');
Route::delete('/major/delete/{id}',[MajorController::class,'destroy'])->name('major.destroy');
Route::get('/major/edit/{id}',[MajorController::class,'edit'])->name('major.edit');
Route::get('major/create',[MajorController::class,'create'])->name('major.create');
Route::post('/major/save',[MajorController::class,'store'])->name('major.store');

Route::get('/major/{major}', [MajorController::class,'show'])->name('major.show');


Route::resource('doctor', DoctorController::class);
Route::resource('rate', RateController::class);


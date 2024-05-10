<?php

use App\Http\Controllers\BeltController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DojoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('login');

Route::get('/events', function() {
    return view('events');
})->name('events');

Route::get('/panel', [PanelController::class, 'index'])->name('panel')->middleware('auth');
Route::post('/users', [UserController::class,'store'])->name('user.store');

Route::controller(LoginController::class)->group(function(){
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

Route::controller(StudentsController::class)->group(function(){
    Route::post('/students', 'store')->name('students.store');
    Route::get('/delete-students/{id}', 'delete')->name('students.delete');
});

Route::controller(DojoController::class)->group(function(){
    Route::post('/dojo', 'store')->name('dojo.store');
});

Route::controller(BeltController::class)->group(function(){
    Route::post('/belt', 'store')->name('belt.store');
});
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){return view('index');});
Route::get('/principal', function (){return view('principal');});
Route::get('/ayuda', function (){return view('ayuda');});
Route::get('/cuenta', function (){return view('cuenta');});

//Route::get('/vehicles',[UserController::class , 'index'])->name('principal');

//Route::get('/vehicles',[UserController::class , 'add'])->name('principal');

//Route::get('/vehicles',[UserController::class , 'update'])->name('principal');

//Route::get('/vehicles',[UserController::class , 'delete'])->name('principal');


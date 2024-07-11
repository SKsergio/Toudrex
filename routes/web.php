<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToudrexController;

//login
Route::get('/',[LoginController::class,'login'])->name('login');

//App routes
Route::get('home',[ToudrexController::class,'home'])->name('home');

Route::get('profile',[ToudrexController::class,'profile'])->name('profile'); //estos controladores ya estan listos 

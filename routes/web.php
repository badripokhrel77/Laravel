<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'home']);

Route::get('/contact',[FrontendController::class,'contact']);

Route::get('/login',[FrontendController::class,'login']);

Route::get('/register',[FrontendController::class,'register']);

Route::get('/book',[FrontendController::class,'book']);

Route::get('/admin',[FrontendController::class,'admin']);

Route::get('/userdetails',[FrontendController::class,'userdetails']);

Route::get('/delete/{id}',[usercontroller::class,'destroy']);
Route::get('/edit/{id}',[usercontroller::class,'edit']);

Route::post('/register',[usercontroller::class,'store']);
Route::post('/update/{id}',[usercontroller::class,'update']);

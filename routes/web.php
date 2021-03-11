<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TodaySpesialController;

//praktikum2
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'menu']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/todayspecial', [TodaySpesialController::class, 'todayspecial']);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/', function ()
//{
//    return view('home.index');
//});


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/{cat}', [\App\Http\Controllers\ShowController::class, 'showCategory'])->name('ShowCategory');
Route::get('/{cat}/{product_id}', [\App\Http\Controllers\ShowController::class, 'show'])->name('ShowProduct');

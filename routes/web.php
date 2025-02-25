<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class ,'index']);
Route::resource('/donation', ProjectController::class) ->middleware('auth');

require __DIR__.'/auth.php';
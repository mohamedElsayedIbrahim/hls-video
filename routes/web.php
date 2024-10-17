<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/video', function () {
    return view('video.play');
});


Route::get('/insert/video',[VideoController::class,'create']);
Route::post('/insert/video',[VideoController::class,'store'])->name('video.store');

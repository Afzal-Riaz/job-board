<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('');
});

Route::resource('jobs', JobController::class)
->only(['index']);

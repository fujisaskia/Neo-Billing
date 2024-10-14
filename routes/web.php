<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeoApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [NeoApiController::class, 'getData'])->name('home');
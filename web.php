<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AbsensiController;

Route::get('/attendance', [AbsensiController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

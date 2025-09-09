<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acha', function () {
    return view('achacantik');
});

// resource route -> pastikan nama controller sama dengan file aslinya
Route::resource('produks', ProdukController::class);


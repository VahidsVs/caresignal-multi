<?php
use Illuminate\Support\Facades\Route;
Route::get('/funktionen', function () {
    return view('carerisk-product');
})->name('carerisk.product');

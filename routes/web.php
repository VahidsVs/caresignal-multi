<?php
use Illuminate\Support\Facades\Route;
Route::view('/', 'carerisk');

// CareRisk V4 SEO pages
require __DIR__.'/carerisk-seo.php';

// CareRisk V5 module: carerisk-product
require __DIR__.'/carerisk-product.php';

// CareRisk launch module
require __DIR__.'/carerisk-launch.php';

// CareRisk launch module
require __DIR__.'/carerisk-leads.php';

// CareRisk V9 editorial hub
Route::view('/wissen', 'carerisk-knowledge')->name('carerisk.wissen');

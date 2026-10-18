<?php
use Illuminate\Support\Facades\Route;
Route::view('/datenschutz', 'carerisk-privacy')->name('carerisk.privacy');
Route::post('/pilot-anfrage', fn (\Illuminate\Http\Request $request) => \App\Support\CareRiskLeadHandler::submit($request, false))->name('carerisk.lead.de');
Route::post('/en/pilot-request', fn (\Illuminate\Http\Request $request) => \App\Support\CareRiskLeadHandler::submit($request, true))->name('carerisk.lead.en');

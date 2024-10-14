<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/records', function () {
    return view('pages.records');
});

Route::get('/bank', function () {
    return view('pages.bank');
});

use App\Http\Controllers\RecordController;

Route::post('/records', [RecordController::class, 'store'])->name('records.store');
Route::get('/records', [RecordController::class, 'index'])->name('records.index');


<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

// Home page route
Route::get('/', function () {
    return view('pages.home');
});

// Bank page route
Route::get('/bank', function () {
    return view('pages.bank');
});

// Records routes
Route::get('/records', [RecordController::class, 'index'])->name('records.index'); // List all records
Route::post('/records', [RecordController::class, 'store'])->name('records.store'); // Store a new record
Route::get('/records/{id}/edit', [RecordController::class, 'edit'])->name('records.edit'); // Edit a record
Route::post('/records/{id}', [RecordController::class, 'update'])->name('records.update'); // Update a record
Route::delete('/records/{id}', [RecordController::class, 'destroy'])->name('records.destroy'); // Delete a record

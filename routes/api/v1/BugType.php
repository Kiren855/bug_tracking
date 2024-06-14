<?php

use App\Http\Controllers\BugTypeController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'api',
])
    ->name('testtypes.')
    ->namespace('\App\Http\Controllers')
    ->group(function () {
        Route::get('/bugtypes', [BugTypeController::class, 'index'])->name('index');
        Route::get('/bugtypes/{bug_type}', [BugTypeController::class, 'show'])->name('show');
        Route::post('/bugtypes', [BugTypeController::class, 'store'])->name('store');
        Route::patch('/bugtypes/{bug_type}', [BugTypeController::class, 'update'])->name('update');
        Route::delete('/bugtypes/{bug_type}', [BugTypeController::class, 'destroy'])->name('delete');
    });
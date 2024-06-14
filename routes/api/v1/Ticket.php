<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'api', 'auth'
])
    ->name('ticket.')
    ->namespace('\App\Http\Controllers')
    ->group(function () {
        Route::get('/tickets/user', [TicketController::class, 'getUserTickets'])->name('userTicket');
        Route::get('/tickets/assigned', [TicketController::class, 'getAssignedTickets'])->name('assignedTicket');
        Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('show');
        Route::post('/tickets', [TicketController::class, 'store'])->name('store');
        Route::patch('/tickets/{ticket}', [TicketController::class, 'update'])->name('update');
        Route::delete('/tickets/{ticket}', [TicketController::class, 'delete'])->name('delete');
    });
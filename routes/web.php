<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TransactionsController;


// --- Rute User Area ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/{id}', [EventController::class, 'show'])->name('events.detail');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');

// --- Rute Admin Area ---
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Kelola Event
    Route::get('/event', [AdminEventController::class, 'indexAdmin'])->name('admin.event');

    // Kelola Trasaksi
    Route::get('/transactions', [TransactionsController::class, 'indexAdmin'])->name('admin.transactions');

});
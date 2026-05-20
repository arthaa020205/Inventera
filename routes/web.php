<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Authentication Routes (Guest only)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::redirect('/', '/dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/transactions', function () {
        return view('transactions');
    })->name('transactions');

    Route::get('/inventory', function () {
        return view('inventory');
    })->name('inventory');

    Route::get('/employees', function () {
        return view('employees');
    })->name('employees');

    Route::get('/branches', function () {
        return view('branches');
    })->name('branches');

    Route::get('/customers', function () {
        return view('customers');
    })->name('customers');

    Route::get('/reports', function () {
        return view('reports');
    })->name('reports');

    Route::get('/audit-log', function () {
        return view('audit-log');
    })->name('audit-log');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
});

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
Route::resource('/dashboard/roles', RoleController::class);

require __DIR__.'/auth.php';

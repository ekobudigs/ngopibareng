<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UpdateProfileInformationController;

Route::middleware('auth')->group(function () {
    // Route::get('explore', [UserController::class, 'index'])->name('users.index');
    Route::get('/timeline', [DashboardController::class, 'index'])->name('timeline');
    Route::resource('users', UserController::class);

    Route::prefix('profile')->group(function () {

        Route::get('edit', [UpdateProfileInformationController::class, 'edit'])->name('profile.edit');
        Route::put('update', [UpdateProfileInformationController::class, 'update'])->name('profile.update');

        Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::put('password/edit', [UpdatePasswordController::class, 'update']);

        
    });
});


Route::get('/', WellcomeController::class);

require __DIR__.'/auth.php';
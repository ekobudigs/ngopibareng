<?php

use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\WellcomeController;

Route::middleware('auth')->group(function () {
    Route::get('explore', ExploreUserController::class)->name('users.index');
    Route::get('/timeline', TimelineController::class)->name('timeline');
    Route::post('/status', [StatusController::class, 'store'])->name('statuses.store');

    Route::prefix('profile')->group(function () {
        Route::get('/{user}/{following}', [FollowingController::class, 'index'])->name('following.index');
        Route::post('/{user}', [FollowingController::class, 'store'])->name('following.store');
        Route::get('/{user}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
    });
});


Route::get('/', WellcomeController::class);

require __DIR__.'/auth.php';
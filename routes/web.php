<?php

use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;

Route::middleware('auth')->group(function () {
    Route::get('/timeline', TimelineController::class)->name('timeline');
    Route::post('/status', [StatusController::class, 'store'])->name('statuses.store');
    Route::get('/profile/{user}/{following}', [FollowingController::class, 'index'])->name('following.index');
    Route::post('/profile/{user}', [FollowingController::class, 'store'])->name('following.store');
    Route::get('/profile/{user}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
});


Route::view('/', 'welcome');

require __DIR__.'/auth.php';
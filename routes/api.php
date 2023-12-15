<?php

use App\Http\Controllers\Api\GovernorateController;
use App\Http\Controllers\Api\ProfileController;

require __DIR__ . '/auth.php';


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/me', [ProfileController::class, 'me'])->name('profile.me');
    Route::get('/governorates', [GovernorateController::class, 'index'])->name('governorates.index');
    Route::get('/governorates/{governorate}', [GovernorateController::class, 'show'])->name('governorates.show');
});

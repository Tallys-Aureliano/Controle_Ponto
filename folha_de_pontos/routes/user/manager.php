<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

Route::middleware(['auth', 'check.manager'])->group(function () {

    Route::get('manager/dashboard', [ManagerController::class, 'index'])
    	->name('manager.dashboard');

    Route::get('manager/profile', [ManagerController::class, 'show'])
    	->name('manager.profile');
});

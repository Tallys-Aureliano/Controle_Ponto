<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::middleware(['auth', 'check.employe'])->group(function () {
	Route::get('employe/dashboard', [EmployeController::class, 'index'])
		->name('employe.dashboard');

    Route::get('employe/profile', [EmployeController::class, 'show'])
    	->name('employe.profile');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::middleware(['auth', 'check.employe'])->group(function () {
	Route::get('employe/dashboard', [EmployeController::class, 'index'])
		->name('employe.dashboard');

    Route::get('employe/profile', [EmployeController::class, 'show'])
    	->name('employe.profile');

   	Route::get('employe/justifications/create', [EmployeController::class, 'createJustifications'])
   		->name('employe.justifications.create');

   	Route::get('employe/justifications/list', [EmployeController::class, 'listJustifications'])
   		->name('employe.justification.list');

   	Route::get('employe/point/list', [EmployeController::class, 'listPoints'])
   		->name('employe.point.list');
});

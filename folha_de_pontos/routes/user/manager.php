<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeController;

Route::middleware(['auth', 'check.manager'])->group(function () {

    Route::get('manager/dashboard', [ManagerController::class, 'index'])
    	->name('manager.dashboard');

    Route::get('manager/profile', [ManagerController::class, 'show'])
    	->name('manager.profile');

    Route::get('manager/employes', [ManagerController::class, 'listEmployes'])->name('manager.list_employes');

    Route::get('manager/employe/create', [EmployeController::class, 'create'])->name('manager.create.employe');

    Route::get('manager/employe/report/individual', [ManagerController::class, 'createIndividualReport'])->name('manager.create.report.individual');

    Route::get('manager/employe/report/general', [ManagerController::class, 'createGeneralReport'])->name('manager.create.report.general');

    Route::get('manager/employe/show/{id}', [ManagerController::class, 'showEmploye'])->name('manager.show.employe');

    Route::get('manager/employe/edit/{id}', [EmployeController::class, 'edit'])->name('manager.edit.employe');

});

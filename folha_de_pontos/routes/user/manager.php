<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\BusinessController;

Route::middleware(['auth', 'check.manager'])->group(function () {
    Route::get('manager/dashboard', [ManagerController::class, 'index'])
    	->name('manager.dashboard');

    Route::get('manager/show', [EmployeController::class, 'show'])
    	->name('manager.profile');

    //FUNCIONARIOS
    Route::get('manager/employes', [ManagerController::class, 'listEmployes'])->name('manager.list_employes');

    Route::get('manager/employe/create', [EmployeController::class, 'create'])->name('manager.create.employe');

    Route::post('manager/employe/store', [EmployeController::class, 'store'])->name('manager.store.employe');

    Route::get('manager/employe/report/individual', [ManagerController::class, 'createIndividualReport'])->name('manager.create.report.individual');

    Route::get('manager/employe/report/individual/{id}', [EmployeController::class, 'showPoints'])->name('manager.show.report.individual');

    Route::get('manager/employe/report/general', [ManagerController::class, 'createGeneralReport'])->name('manager.create.report.general');

    Route::get('manager/employe/show/general', [ManagerController::class, 'showGeneralReport'])->name('manager.show.report.general');

    Route::get('manager/employe/show/{id}', [ManagerController::class, 'showEmploye'])->name('manager.show.employe');

    Route::get('manager/employe/edit/{id}', [EmployeController::class, 'edit'])->name('manager.edit.employe');

    Route::post('manager/employe/update/{id}', [EmployeController::class, 'update'])->name('manager.update.employe');
    
    // EMPRESA
    Route::get('manager/business/show', [BusinessController::class, 'showMyBusiness'])->name('manager.show.business');

    Route::get('manager/justificative/list', [ManagerController::class, 'listJustificatives'])->name('manager.justificative.list');
});

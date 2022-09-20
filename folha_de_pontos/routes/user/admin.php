<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\PositionController;

Route::middleware(['auth', 'check.admin'])->group(function () {
	// ADMIN DASHBOARD
	Route::get('admin/dashboard', [AdminController::class, 'index'])
		->name('admin.dashboard');

	// BUSINESS CRUD
	Route::get('admin/business/list', [BusinessController::class, 'list'])
		->name('admin.business.list');

	Route::get('admin/business/show/{id}', [BusinessController::class, 'show'])
		->name('admin.business.show');

	Route::get('admin/business/create', [BusinessController::class, 'createByAdmin'])
		->name('admin.business.create');

	Route::post('admin/business/store', [BusinessController::class, 'storeByAdmin'])
		->name('admin.business.store');

	Route::get('admin/business/edit/{id}', [BusinessController::class, 'edit'])
		->name('admin.business.edit');

	Route::post('admin/business/update/{id}', [BusinessController::class, 'update'])
		->name('admin.business.update');

	Route::post('admin/business/destroy/{id}', [BusinessController::class, 'destroy'])
		->name('admin.business.destroy');

	// EMPLOYE CRUD
	Route::get('admin/employe/list', [EmployeController::class, 'list'])
		->name('admin.employe.list');

	Route::get('admin/employe/show/{id}', [EmployeController::class, 'showEmploye'])
		->name('admin.employe.show');

	Route::get('admin/sector/list', [SectorController::class, 'list'])
		->name('admin.sector.list');

	Route::get('admin/position/list', [PositionController::class, 'list'])
		->name('admin.position.list');

});

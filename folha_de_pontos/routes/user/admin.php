<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PointController;

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

	Route::get('admin/employe/create', [UserController::class, 'create'])
		->name('admin.employe.create');

	Route::post('admin/employe/store', [UserController::class, 'store'])
		->name('admin.employe.store');

	Route::get('admin/employe/edit/{id}', [UserController::class, 'edit'])
		->name('admin.employe.edit');

	Route::post('admin/employe/update/{id}', [UserController::class, 'update'])
		->name('admin.employe.update');

	Route::post('admin/employe/destroy/{id}', [UserController::class, 'destroy'])
		->name('admin.employe.destroy');

	// SECTOR CRUD
	Route::get('admin/sector/list', [SectorController::class, 'list'])
		->name('admin.sector.list');

	Route::get('admin/sector/show/{id}', [SectorController::class, 'show'])
		->name('admin.sector.show');

	Route::get('admin/sector/create', [SectorController::class, 'create'])
		->name('admin.sector.create');

	Route::post('admin/sector/store', [SectorController::class, 'store'])
		->name('admin.sector.store');

	Route::get('admin/sector/edit/{id}', [SectorController::class, 'edit'])
		->name('admin.sector.edit');

	Route::post('admin/sector/update/{id}', [SectorController::class, 'update'])
		->name('admin.sector.update');

	Route::post('admin/sector/destroy/{id}', [SectorController::class, 'destroy'])
		->name('admin.sector.destroy');

	// POSITION CRUD
	
	Route::get('admin/position/show/{id}', [PositionController::class, 'show'])
		->name('admin.position.show');

	Route::get('admin/position/list', [PositionController::class, 'list'])
		->name('admin.position.list');
	
	Route::get('admin/position/create', [PositionController::class, 'create'])
		->name('admin.position.create');

	Route::post('admin/position/store', [PositionController::class, 'store'])
		->name('admin.position.store');

	Route::post('admin/position/destroy/{id}', [PositionController::class, 'destroy'])
		->name('admin.position.destroy');

	Route::get('admin/position/edit/{id}', [PositionController::class, 'edit'])
		->name('admin.position.edit');

	Route::post('admin/position/update/{id}', [PositionController::class, 'update'])
		->name('admin.position.update');

	// POINT CRUD
	Route::get('admin/point/list', [PointController::class, 'list'])
		->name('admin.point.list');

	Route::get('admin/point/show/{id}', [PointController::class, 'show'])
		->name('admin.point.show');

	Route::get('admin/point/edit/{id}', [PointController::class, 'edit'])
		->name('admin.point.edit');

	Route::post('admin/point/update/{id}', [PointController::class, 'update'])
		->name('admin.point.update');

	Route::get('admin/point/create', [PointController::class, 'create'])
		->name('admin.point.create');

	Route::post('admin/point/store', [PointController::class, 'store'])
		->name('admin.point.store');

	Route::post('admin/point/destroy/{id}', [PointController::class, 'destroy'])
		->name('admin.point.destroy');
});

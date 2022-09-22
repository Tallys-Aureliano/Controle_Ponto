<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
	$role_id = Auth::user()->role;
	if ($role_id == 0) {
		return redirect()->route('admin.dashboard');
	}elseif ($role_id == 1) {
		return redirect()->route('manager.dashboard');
	}elseif ($role_id == 2) {
		return redirect()->route('employe.dashboard');
	}
	return redirect('/')->with('error', 'Não sabemos se você é um admin, gerente ou algum outro funcionário. Contate o administrador.');
})->middleware(['auth'])->name('dashboard');

Route::get('manager/business/create', [BusinessController::class, 'create'])
        ->middleware(['auth'])->name('business.create');

Route::post('manager/business/store', [BusinessController::class, 'store'])
		->middleware(['auth'])->name('business.store');

Route::get('manager/point/create', [ManagerController::class, 'createPoint'])
	->middleware(['auth'])->name('manager.point.create');

Route::post('manager/point/store', [ManagerController::class, 'storePoint'])
	->middleware(['auth'])->name('manager.point.store');
   	
Route::get('/attachments/{file_name}', [FileController::class, 'view'])
	->middleware(['auth'])->name('view.attachments');

Route::get('/profile/photo/{file_name}', [FileController::class, 'viewProfileImage'])
	->middleware(['auth'])->name('view.profile.photo');

require __DIR__.'/auth.php';
require __DIR__.'/user/manager.php';
require __DIR__.'/user/admin.php';
require __DIR__.'/user/employe.php';
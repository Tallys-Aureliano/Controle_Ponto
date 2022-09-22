<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ManagerController;

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

require __DIR__.'/auth.php';
require __DIR__.'/user/manager.php';
require __DIR__.'/user/admin.php';
require __DIR__.'/user/employe.php';
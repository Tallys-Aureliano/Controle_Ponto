<?php

use Illuminate\Support\Facades\Route;

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

// 'check.admin' => \App\Http\Middleware\CheckAdmin::class,
// 'check.manager' => \App\Http\Middleware\CheckManager::class,
// 'check.employe' => \App\Http\Middleware\CheckEmploye::class,


require __DIR__.'/auth.php';
require __DIR__.'/user/manager.php';
require __DIR__.'/user/admin.php';
require __DIR__.'/user/employe.php';



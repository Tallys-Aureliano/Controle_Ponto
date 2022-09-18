<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

Route::middleware(['auth', 'check.manager'])->group(function () {
    Route::get('manager/dashboard', function(){
    	return view('users.employe.dashboard');
    })->name('manager.dashboard');
});

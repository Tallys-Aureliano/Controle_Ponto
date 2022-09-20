<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth')->group(function() {
	Route::get('users', [UserController::class, 'index'])
                ->name('users.list');
});
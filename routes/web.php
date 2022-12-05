<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('pages.dashboard.dashboard'))->name('dashboard');

Route::controller(TeacherController::class)
    ->name('teachers.')
    ->prefix('teachers')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/update/{teacher}', 'show')->name('show');
        Route::post('/', 'store')->name('store');
    });

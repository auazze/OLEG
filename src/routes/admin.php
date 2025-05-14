<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])
    //->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/about', [AboutController::class, 'index'])->name('about');

        //Route::get('/secret-page', fn () => view('admin.secret'));
    });

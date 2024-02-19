<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Admin\Projects;
use App\Http\Controllers\Admin\Password;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Admin\Settings;
use App\Http\Controllers\Admin\Theme;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function() {

    Route::prefix('login')->group(function() {
        Route::get('/', [Auth::class, 'index']);
        Route::post('/', [Auth::class, 'signin'])->name('signin');
    });

    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

    Route::prefix('manage')->group(function() {
        Route::prefix('projects')->group(function() {
            Route::get('/', [Projects::class, 'index'])->name('projects.index');
            Route::post('create', [Projects::class, 'create'])->name('project.create');
            Route::get('edit', [Projects::class, 'edit'])->name('project.edit');
            Route::put('update', [Projects::class, 'update'])->name('project.update');
            Route::delete('destroy', [Projects::class, 'destroy'])->name('project.destroy');
        });
    });
    
    Route::prefix('users')->group(function() {
        Route::get('/', [Users::class, 'index'])->name('users');
        Route::get('create', [Users::class, 'add'])->name('users.add');
        Route::post('create', [Users::class, 'create'])->name('users.create');
        Route::get('edit', [Users::class, 'edit'])->name('users.edit');
        Route::put('update', [Users::class, 'update'])->name('users.update');
        Route::delete('destroy', [Users::class, 'destroy'])->name('users.destroy');
    });

    Route::prefix('settings')->group(function() {
        Route::get('/', [Settings::class, 'index'])->name('settings');
        Route::get('theme', [Theme::class, 'index'])->name('theme');
        Route::get('/profile', [Profile::class, 'index'])->name('profile');
        Route::get('/change-password', [Password::class, 'index'])->name('password');
        Route::get('/signout', [Auth::class, 'signout'])->name('signout');
    });


});

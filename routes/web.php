<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', fn () => view('admin.index'))->name('dashboard');
        Route::get('users', fn () => view('admin.users.index'))->name('users');
        Route::get('campaigns', fn () => view('admin.campaigns.index'));
        Route::get('chat', fn () => view('admin.chat.index'));
        Route::get('profile', fn () => view('admin.profile.index'));
    });

require __DIR__.'/auth.php';

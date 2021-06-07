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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::any('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::middleware('auth')
    ->group(function(){
        Route::any('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

        Route::any('pack/{pack}', [\App\Http\Controllers\HomeController::class, 'getPack'])->name('getPack');
    });

Route::middleware(['auth','role:entreprise'])
    ->group(function(){
        Route::get('/entreprise/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboardEntreprise'])->name('ent.dashboard');
    })
;


Route::middleware(['auth','role:particular'])
    ->group(function(){
        Route::get('/particular/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboardParticular'])->name('part.dashboard');
    });





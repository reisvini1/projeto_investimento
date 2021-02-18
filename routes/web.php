<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;

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
Route::get('/', [Controller::class, 'homepage']);
Route::get('/cadastro', [Controller::class, 'cadastrar']);

/**
 * Rotas para autenticação
 * ===================================================================
*/
Route::get('/login', [Controller::class, 'fazerLogin']);
Route::post('/login', [DashboardController::class, 'auth'])->name('user.login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');


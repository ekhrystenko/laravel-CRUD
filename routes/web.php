<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
Route::redirect('/', 'user');
Route::get('/user/export', [UsersController::class, 'export'])->name('user.export');
Route::post('/user/import', [UsersController::class, 'import'])->name('user.import');
Route::resource('/user', UsersController::class);

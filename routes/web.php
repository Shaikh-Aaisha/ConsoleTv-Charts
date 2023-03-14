<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserChartController;
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
Route::get('/users', [UserChartController::class, 'index'])->name('user');
Route::get('/usersdonut', [UserChartController::class, 'donuts'])->name('usersdonut');
Route::get('/usersbars', [UserChartController::class, 'bar'])->name('usersbars');
Route::get('/userspie', [UserChartController::class, 'pie'])->name('userspie');

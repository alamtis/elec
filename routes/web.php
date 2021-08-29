<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {

    Route::redirect('/', '/voters');

    Route::resource('/voters', VoterController::class)->only(['index', 'store', 'update']);

    Route::resource('/users', UserController::class);

    Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');

});

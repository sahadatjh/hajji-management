<?php

use App\Http\Controllers\EmailVerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard','dashboard')->name('dashboard');
    
    Route::prefix('masterdata')->group(function () {
        Route::group(['prefix' => 'packages', 'as' => 'packages.'], function () {
            Route::get('/', [PackageController::class, 'index'])->name('index');
            Route::get('/create', [PackageController::class, 'create'])->name('create');
            Route::post('/store', [PackageController::class, 'store'])->name('store');
        });
    });
});

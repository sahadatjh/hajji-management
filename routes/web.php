<?php

use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\HajjiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TaskController;
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

    Route::resource('task',TaskController::class);
    
    Route::prefix('masterdata')->group(function () {
        Route::resource('packages', PackageController::class);
    });

    Route::prefix('hajji')->group(function () {
        Route::resource('pre-register-hajjis', HajjiController::class);

        Route::get('/pre-register-hajji/{id}',[HajjiController::class,'change_status'])->name('change.status');
        Route::get('/hajjis',[HajjiController::class,'hajji_idex'])->name('hajjis.index');
    });


});

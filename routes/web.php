<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('rumahsakit', RumahSakitController::class);

    Route::resource('pasien', PasienController::class);

    Route::get('/pasien/filter/{id}', [PasienController::class, 'filter']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

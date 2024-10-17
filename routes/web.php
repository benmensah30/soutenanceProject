<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth');
});

Route::post('/otp-code', [AuthController::class, 'checkOtpCode'])->name('checkOtpCode.process');


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'shoWLogin'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Route::middleware(['isadmin'])->group(function () {

        Route::resource('/epreuves', EpreuveController::class);
    // });
    Route::get('/dashboard', [AuthController::class, 'pages'])->name('dashboard');
    
    Route::resource('/auth', AuthController::class);
    Route::get('/pdf_epreuves/{epreuve_id}/pdf', [PdfController::class, 'downloadPDF'])->name('pdf_epreuves.pdf');
    
    Route::get('/pdf_epreuves/{epreuve_id}', [PdfController::class, 'show'])->name('pdf_epreuves.show');
});








<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::post('/admin/register', [AuthController::class, 'register']);
    Route::post('/check-username', [AuthController::class, 'checkUsername']);
    Route::get('/admin/register', [AuthController::class, 'register']);
});


    
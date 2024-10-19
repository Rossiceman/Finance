
<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get("/", [AdminController::class, "index"]);
    Route::post("login", [AdminController::class, "login"]);
    Route::get("home/{lan?}", [AdminController::class, "home"]);
        // ->middleware(["manager", "info"]);
    
});



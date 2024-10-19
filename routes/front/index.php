<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\ActiveController;
use App\Http\Controllers\Front\IndexController;

use Illuminate\Support\Facades\Route;

Route::get("/",[IndexController::class,"index"]);
Route::get("/active",[ActiveController::class,"list"])->name("active");

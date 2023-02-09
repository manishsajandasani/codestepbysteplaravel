<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view("/users", "user");

Route::post("/user-form-submit", [UserController::class, 'submitUserForm']);

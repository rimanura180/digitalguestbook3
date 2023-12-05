<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

Route::get('/users', [UserController::class, 'view_data']);
Route::get('/input', [InputController::class, 'view_input']);
Route::get('/create', [CreateController::class, 'view_create']);
Route::get('/update', [UpdateController::class, 'view_update']);
Route::get('/delete', [DeleteController::class, 'view_delete']);
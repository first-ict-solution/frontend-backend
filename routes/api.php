<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TeamMemberController;
use App\Http\Controllers\MessageController;


Route::get('/services', [ServiceController::class, 'index']);

Route::apiResource('/projects', App\Http\Controllers\Api\ProjectController::class);

Route::apiResource('/team', App\Http\Controllers\Api\TeamMemberController::class);

Route::post('/messages', [MessageController::class, 'store']);
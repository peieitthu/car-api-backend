<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// This automatically creates GET, POST, PUT, and DELETE routes
Route::apiResource('cars', CarController::class);
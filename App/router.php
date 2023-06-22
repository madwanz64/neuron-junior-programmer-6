<?php

use App\Core\Route;

Route::get('', [\App\Controllers\HomeController::class, 'index']);
Route::get('home', [\App\Controllers\HomeController::class, 'index']);
Route::get('homeShow', [\App\Controllers\HomeController::class, 'show']);
Route::get('examples', [\App\Controllers\ExampleController::class, 'index']);

Route::get('api/examples', [\App\Controllers\Api\ExampleController::class, 'index']);
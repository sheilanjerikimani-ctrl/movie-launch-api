<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{slug}', [FilmController::class, 'show']);
Route::post('/subscribe', [SubscriberController::class, 'store']);

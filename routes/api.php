<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/profile/{uuid}', [ProfileController::class, 'getProfile']);
Route::post('/search', [ProfileController::class, 'doSearch']);
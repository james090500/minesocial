<?php

use Illuminate\Support\Facades\Route;

// Clear Cache for debug cases
if(config('app.debug')) {
    Route::get('/cache', function() {
        cache()->flush();
        return "CACHE CLEARED";
    });
}

Route::get('/{any}', function() {
    return view('base');
})->where('any', '.*');
<?php

use App\Http\Controllers\FubukiController;

// fubuki routes
// gallery

Route::get('/gallery/all', [FubukiController::class, 'getAllImages']);

Route::post('/gallery/add-image', [FubukiController::class, 'addImage']);

Route::get('/test-db', [FubukiController::class, 'testDb']);

// events

Route::post('/event/add', [FubukiController::class, 'addEvent']);

Route::get('/event/all', [FubukiController::class, 'getAll']);

<?php

use App\Models\Event;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('gallery');
// })->name('gallery');

Route::get('/about', function () {
    return view('about');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/thank-you', function () {
    return view('thankyou');
});

Route::get('/', function () {
    $db_images = GalleryImage::all();

    return view('gallery', ['images' => $db_images]);
});

Route::get('/events', function () {
    $db_events = Event::all();

    return view('events', ['events' => $db_events]);
});

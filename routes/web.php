<?php

use App\Models\Event;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Route;

Route::get('/event-details/{id}', function (Request $request, $id) {
    try{
        $event = Event::where('id',$id)->first();
        error_log($event);

        return view('event_details', ['event' => $event]);
    }
    catch(Exception $ex){
        error_log('error fetching event detail');
        return '<h1>System experienced an error!</h1>';
    }
});

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

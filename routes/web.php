<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;

Route::get('/', function () {
    return view('welcome');
});

Route::get('jm', function () {
    dd('jm route works');
});

Route::get('events', function(){
    $events = Event::with(['organizer', 'bookings.user'])->get();
    return view('events', compact('events'));
});
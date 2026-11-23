<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('app_home');

Route::view('/about-us', 'pages.about')->name('app_about');
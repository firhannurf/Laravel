<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/helo', function() {
    return "Welcome To My Portofolio";
});



?>
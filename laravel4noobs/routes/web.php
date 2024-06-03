<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/{username}', function (string $username) {
    return 'Ola Lucas'; $username;
});
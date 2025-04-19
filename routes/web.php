<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
   return Inertia::render('Home');
});

Route::get('/student', function () {
    $user = [
        'name' => 'John Doe',
        'age' => 20
    ];
    return Inertia::render('Student/index', [
        'user' => $user,
    ]);
    // return inertia('Student/index');
}); 
<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ec2', function () {
    return "This is EC2 Sample";
});


Route::get("/make-author/{name}/{type}", [AuthorController::class, 'create']);

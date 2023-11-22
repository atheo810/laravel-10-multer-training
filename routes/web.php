<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $blogs = [
        [
            'title' => 'Title one',
            'body' => 'This is body text',
            'status' => 1
        ],
        [
            'title' => 'Title two',
            'body' => 'This is body text',
            'status' => 1
        ],
        [
            'title' => 'Title three',
            'body' => 'This is body text',
            'status' => 0
        ],
    ];
    return view('home', compact('blogs'));
});

Route::get('/about', function () {
    return view('about');
});

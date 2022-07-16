<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function() {
    $data = [
        "title" => "about",
        "name" => "Hatake",
        "image" => "hatake.png"
    ];    
    return view('about', $data);
});

Route::get('/posts',[PostController::class, 'index']);


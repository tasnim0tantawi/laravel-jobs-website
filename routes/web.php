<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::view('/', 'pages/listings', 
[
    'listings' => Listing::all()
]);

Route::view('login', 'pages/login');

Route::view('register', 'pages/register');

Route::view('listing/{id}', 'pages/listing');




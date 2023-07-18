<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

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


// Get all job listings and display them in main page. 
Route::get('/', [ListingController::class, 'index']);

// Get the job creation form and display it.
Route::get('/listings/create', [ListingController::class, 'create']);

// Create a new job listing.
Route::post('/listings', [ListingController::class, 'store']);

// Get a single job listing and display it.
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Get the job edit form and display it.
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update a job listing.
Route::put('/listings/{listing}', [ListingController::class, 'update']);




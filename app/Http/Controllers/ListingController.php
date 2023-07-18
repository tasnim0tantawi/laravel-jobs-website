<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //
    public function index()
    {
        return view('pages/listings/index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return view('pages/listings/show', [
            'listing' => $listing
        ]);
    }
}

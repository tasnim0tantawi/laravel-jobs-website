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
            'listings' => Listing::all()
        ]);
    }

    public function show($id)
    {
        return view('pages/listings/show', [
            'listing' => Listing::find($id)
        ]);
    }
}

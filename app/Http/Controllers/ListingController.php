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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    public function show(Listing $listing)
    {
        return view('pages/listings/show', [
            'listing' => $listing
        ]);
    }

    public function create()
    {
        return view('pages/listings/create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'location' => 'required',
            'description' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
        ]);

        Listing::create($attributes);

        return redirect('/');
    }



}

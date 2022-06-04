<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listingss
    public function index() {
        // check paramater 
        // dd(request('tag'));
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // show individual listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]); 
    }
}

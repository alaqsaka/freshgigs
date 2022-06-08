<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listingss
    public function index() {
        // check paramater 
        // dd(request('tag'));
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) // Accept params for hom many elements per page
        ]);
    }

    // show individual listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]); 
    }

    // show create form 
    public function create() {
        return view('listings.create');
    }

    // Store listings data / buat data baru
    public function store(Request $request) {
        // dd($request->all());

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'

        ]);

        Listing::create($formFields);

        // redirect with flash message
        return redirect('/')->with('message', 'Listing created successfully!');
    }
}

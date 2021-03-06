<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

// Index - Show all listings
// show - Show sing listings
// create - show form to create new listing
// store - Store new listing
// edit = Show form to edit listing
// update - Update listing
// destroy - Delete listing


class ListingController extends Controller
{
    //Show All Listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request((['tag', 'search'])))->get()
        ]);
    }
    // Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}

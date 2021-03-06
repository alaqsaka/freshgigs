<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing

// without route model binding
// Route::get('/listings/{id}', function($id){

//     $listing = Listing::find($id);

//     if($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }

// });

// with route model binding


// Common Resource Routes: 
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing 
// store - Store new listing
// edit - Show for to edit listing
// update - Update listing
// destroy

// Show Create Form 
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form 
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Edit submit to update UPDATE LISTING
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings 
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// show Single listing (taro paling bawah)
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/create form 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user 
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form 
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
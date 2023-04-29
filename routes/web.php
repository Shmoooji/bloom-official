<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Campaigns
Route::get('/campaigns', function () {
    return view('campaigns');
});

// About
Route::get("about", function () {
    return view('about');
});

// Subscription
Route::get("subscription", function () {
    return view('subscription');
});

// Contact Us
Route::get("contactUs", function () {
    return view('contactUs');
});

// Works
Route::get("works", function () {
    return view('works');
});

// Cutserv
Route::get("cutserv", function () {
    return view('cutserv');
});

// Contacts
Route::get("contacts", function () {
    return view('contacts');
});
Route::get("contacts/list", [ContactController::class, 'index']);
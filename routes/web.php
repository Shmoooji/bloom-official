<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

// Index
Route::get('/index', function () {
    return view('index');
});

// Index
Route::get('/index', function () {
    return view('index');
});

// Campaigns
Route::get('/campaigns', function () {
    return view('campaigns');
});

// About
Route::get("/about", function () {
Route::get("/about", function () {
    return view('about');
});

// Subscription
Route::get("/subscription", function () {
Route::get("/subscription", function () {
    return view('subscription');
});

// Contact Us
Route::get("/contactUs", function () {
Route::get("/contactUs", function () {
    return view('contactUs');
});

// Works
Route::get("/works", function () {
Route::get("/works", function () {
    return view('works');
});

// Cutserv
Route::get("/customerservice", function () {
    return view('customerservice');
});

//Marketing Automation
Route::get("/marketing-automation", function () {
    return view('marketingAutomation');
});
Route::get("/marketing-automation-mail", function () {
    return view('marketingAutomationMail');
});

Route::post('/send-email',[ContactController::class,'sendEmail'])->name('send.email');

// Sales
Route::get("/sales", function () {
    return view('sales');
});

Route::get('/payment/options', function () {
    return view('payment_options');
});

Route::get('/analytics', function () {
    return view('analytics');
});

Route::get('/get_deal', [DealController::class, 'get_deal']);

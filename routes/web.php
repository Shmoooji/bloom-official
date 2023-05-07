<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;

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

// Campaigns
Route::get('/campaigns', function () {
    return view('campaigns');
});

// About
Route::get("/about", function () {
    return view('about');
});

// Subscription
Route::get("/subscription", function () {
    return view('subscription');
});

// Contact Us
Route::get("/contactUs", function () {
    return view('contactUs');
});

// Works
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

// Sales
Route::get("/sales", function () {
    return view('sales');
});

Route::prefix('payment')->group(function () {
    Route::get('/option', [PaymentController::class, 'index']);

    Route::post('/option/gcash', [PaymentController::class, 'createPaymentGcash']);
    Route::post('/option/paymaya', [PaymentController::class, 'createPaymentPaymaya']);
    Route::post('/option/paypal', [PaymentController::class, 'createPaymentPaypal']);

    Route::post('/success', [PaymentController::class, 'success']);
    Route::post('/error', [PaymentController::class, 'error']);
});

Route::get('/analytics', function () {
    return view('analytics');
});

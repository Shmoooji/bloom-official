<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DealController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'create']);

// About
Route::get("/about", function () {
    return view('about');
});

// Contact Us
Route::get("/contactUs", function () {
    return view('contactUs');
});

Route::middleware('auth')->group(function () {

    // Campaigns
    Route::get('/campaigns', function () {
        return view('campaigns');
    })->name('home');


    // Subscription
    Route::get("/subscription", function () {
        return view('subscription');
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

    // Payment
    Route::prefix('payment')->group(function () {
        Route::get('/option', [PaymentController::class, 'index'])->name('payment/option');

        Route::post('/gcash', [PaymentController::class, 'index']);
        Route::post('/paymaya', [PaymentController::class, 'index']);
        Route::post('/paypal', [PaymentController::class, 'createPaymentPaypal']);

        Route::get('/success', [PaymentController::class, 'handleSuccess']);
        Route::get('/error', [PaymentController::class, 'handleError']);
    });

    //Deal
    Route::get('/get_deal', [DealController::class, 'get_deal']);
    Route::get('/get_deal_forecast', [DealController::class, 'get_deal_forecast']);

    Route::get('/analytics', function () {
        return view('analytics');
    });


    //Analytics
    Route::get('/graphs', function(){
        return view('graphs');
    });
    
    
    Route::get('/analytics', 'App\Http\Controllers\AnalyticsController@index')->name('analytics.index');
    Route::get('/analytics/fetch_campaign_list', 'App\Http\Controllers\AnalyticsController@fetch_campaign_list')->name('analytics.fetch_campaign_list');
    Route::get('/graphs/getCampaignLocations', [AnalyticsController::class, 'getCampaignLocations'])->name('campaign-locations');
    Route::get('/graphs/getStageDealRatio', [AnalyticsController::class, 'getStageDealRatio'])->name('graphs.getStageDealRatio');
    Route::get('/graphs', [AnalyticsController::class,'getPrefPaymentMethod']);
});

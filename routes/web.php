<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

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

//login and registration
Route::get('/', function () {
    session_start();
    if(isset($_SESSION["account"])){
        return redirect('/home');
    } else {
        return view('LoginAccount');
    }
});

Route::get('/images/{filename}', function($filename){
    $path = resource_path().'/views/images/'.$filename;
    if(!File::exists($path)) {
        return abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

Route::post('/login/authentication', [LoginController::class, 'authentication']);
Route::get('/get_accounts', [LoginController::class, 'get_accounts']);
Route::post('/register', [RegistrationController::class, 'register']);
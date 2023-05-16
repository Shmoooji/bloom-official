<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::AUTHED;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        // return Auth::check() ? redirect('/') : redirect('/login');
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/campaigns');
            // dd(Auth::check());
            // dd(Auth::user());
            // var_dump(Auth::user());
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

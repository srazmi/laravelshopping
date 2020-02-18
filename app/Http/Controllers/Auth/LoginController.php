<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
        

    }

    public function redirectTo()
    {
        // $user= User::find($id);

        // dd (Auth::user()->rolles()->pluck('name')->contains('admin'));
        // {
        //     return view ('/login');
        // }else{
        //     return view('/welcome');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // public function login()
    // {
    //     // Auth::logout();
    //     return view('auth.login');
    // }
}

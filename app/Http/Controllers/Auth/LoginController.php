<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Models\Roles;

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
//     public function redirectTo()
//     {   
//         // dd("ok");
//         $id= auth()->user()->id;
//         $user= User::find($id);
//         foreach ($user->roles as $role)
// // dd($role);
//         if($role->name=='admin')
//         {
//             $this->redirectTo= '/login';
//             return $this->redirectTo;
//         }else{
//             $this->redirectTo= '/';
//             return $this->redirectTo;
//         }
//     }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

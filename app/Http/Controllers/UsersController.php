<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        return view('users.showusers');
    }
    public function login()
    {
        return view('users.login');
    }
    public function register()
    {
        return view('users.register');        
    }
    public function update()
    {
        
    }
}

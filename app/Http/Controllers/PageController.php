<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PageController extends Controller
{
    public function show(Request $request)
    {
            
            return view('users.login');
        
            return view('kala.category');
        
            
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // return session()->all();
        // session(['nsme'=>'ali','email'=>'aliAlocal.com','url'=>'local.com']);
        // return session()->all();

        // $request->session()->flash('msg1','ok!');
        // $request->session()->flash('msg2','ok!!');
        // $request->session()->flash('msg3','ok!!!');

        // if($request->session()->has('msg')){
        // $flash=session()->get('_flash');
        // return (session()->get('msg'));
        // return session()->all();
    // }

        // $request->session()->reflash();
        // $request->session()->keep('msg');
        return session()->all();
    }

}

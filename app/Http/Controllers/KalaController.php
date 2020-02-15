<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalaController extends Controller
{
    public function shopmobile()
    {
        // $Kala
        return view ("kala/shopmobile");
        
    }
    public function kalaexplanation()
    {
        return view ("kala/kalaexplanation");
        
    }
    public function digitalkala()
    {
        return view ("kala/digitalkala");
        
    }
    public function insert()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}

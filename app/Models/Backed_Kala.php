<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Backed_Kala extends Model
{
    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }
    public function Faktor()
    {
        return $this->belongsTo('App\Models\Faktor');   
    }
}

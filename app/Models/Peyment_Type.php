<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peyment_Type extends Model
{
    public function Faktor()
    {
        return $this->hasMany('App\Models\Faktor');
    }
}

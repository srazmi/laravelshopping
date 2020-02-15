<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faktor_State extends Model
{
    public function Faktor()
    {
        return $this->hasMany('App\Models\Faktor');
    }
}

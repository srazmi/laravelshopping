<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\Models\Users');
    }
    public function Faktor()
    {
        return $this->hasMany('App\Models\Faktor');
    }
}

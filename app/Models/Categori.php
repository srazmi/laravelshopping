<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
   public $table='categori';
    public function Kala()
    {
        return $this->hasMany('App\Models\Kala','id','categori_id');
    }
}

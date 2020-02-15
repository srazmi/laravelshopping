<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    public $timestamps=false;
    
    protected $fillable=['num','kala_id'];

    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }
}

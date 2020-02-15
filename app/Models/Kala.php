<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public $timestamps = false;
    public $table= 'Kala';
    public function Users()
    {
        return $this->belongsToMany(Users::class, 'basket');
    }


    public function Categori()
    {
        return $this->belongsTo('App\Models\Categori','categori_id','id');
    }

    public function Images()
    {
        return $this->hasMany('App\Models\Images');
    }

    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Baskets()
    {
        return $this->hasMany('App\Models\Baskets');
    }

    public function Faktor()
    {
        return $this->belongsToMany(Faktor::class, 'Faktor_Kala');
    }
    
    public function Backed_Kala()
    {
        return $this->hasMany('App\Models\Backed_Kala');
    }
}

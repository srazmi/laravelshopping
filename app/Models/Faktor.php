<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faktor extends Model
{
    public function Kala()
    {
        return $this->belongsToMany(Kala::class, 'Faktor_Kala');
    }

    public function Backed_Kala()
    {
        return $this->hasMany('App\Models\Backed_Kala');
    }

    public function Peyment_Type()
    {
        return $this->belongsTo('App\Models\Peyment_Type');
    }

    public function Send_State()
    {
        return $this->belongsTo('App\Models\Send_State');
    }

    public function Faktor_State()
    {
        return $this->belongsTo('App\Models\Faktor_State');
    }

    public function Address()
    {
        return $this->belongsTo('App\Models\Address');
    }
    
    public function Dargah_Pardakht()
    {
        return $this->belongsToMany(Dargah_Pardakht::class, 'Transaction');
    }
}

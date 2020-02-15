<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function Users()
    {
        return $this->hasMany('App\Models\Users','id','gender_id');
    }
}

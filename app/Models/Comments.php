<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    // use SoftDeletes;
    protected $fillable=['comment','user_id'];
    
    public function Users()
    {
        return $this->belongsTo('App\Models\Users','user_id','id');
    }
    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }
}

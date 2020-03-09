<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $fillable = [
        'path','imageable_id','imageable_type'
    ];
    public function Imageable()
    {
        return $this->morphTo();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dargah_Pardakht extends Model
{
    public function Faktor()
    {
        return $this->belongsToMany(Faktor::class, 'Transaction');
    }
}

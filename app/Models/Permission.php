<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function Role()
    {
        return $this->belongsToMany(Role::class, 'Permission_Role');
    }
}

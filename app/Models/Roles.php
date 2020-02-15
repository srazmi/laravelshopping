<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function User()
    {
        return $this->belongsToMany(User::class, 'Roles_User');
    }
    public function Permission()
    {
        return $this->belongsToMany(Permission::class, 'Permission_Role');
    }
}

<?php

namespace App;
use App\Models\Roles;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;



class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $data=['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
    
    public function Gender()
    {
        return $this->belongsTo('App\Models\Gender','gender_id','id');
    }

    public function Kala()
    {
        return $this->belongsToMany(Kala::class, 'basket');
    }

    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Address()
    {
        return $this->hasMany('App\Models\Address');
    }
    
    public function Roles()
    {
        return $this->belongsToMany(Roles::class, 'Roles_User');
    }

    public function isAdmin()
    {
        if (isset($this->Roles[0])&&$this->Roles[0]->name=='Administrator'){
            return true; 
        }else{
            return false;
        }

    }
}

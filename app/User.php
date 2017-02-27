<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'avatar', 'slug',
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
     *
     * Mutators for name
     *
     */
    public function setNameAttribute($value)
    {
      $this->attributes['name'] = strtolower($value);
    }

    /**
     *
     * Accessors for name
     *
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     *
     * Eloquent ORM relationship one to one
     *
     */
    public function profile()
    {
        $this->hasOne('App\Profile');
    }


}

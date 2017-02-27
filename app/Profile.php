<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['location', 'about', 'user_id'];

    /**
     *
     * Eloquent ORM relationship one to one
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

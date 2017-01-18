<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['location', 'about'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}

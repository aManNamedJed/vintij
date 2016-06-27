<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function cover()
    {
    	return $this->hasOne('App\Cover');
    }
}

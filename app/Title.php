<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    // protected $fillable = ['title'];

    public function contents()
    {
        return $this->hasMany('App\Content');
    }
}

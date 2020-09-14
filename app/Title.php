<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $guarded = array('id');

    public function contents()
    {
        return $this->hasMany('App\Content');
    }
}

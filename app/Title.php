<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function contents() {
        return $this->hasMany('App\Content');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = ['id'];
    
    public static $rules = array(
        'heading' => 'required',
        'heading1' => 'required',
    );
}

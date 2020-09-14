<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = ['id', 'title_id'];

    public static $rules = array(
        'heading' => 'required',
    );
}

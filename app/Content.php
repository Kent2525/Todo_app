<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'heading' => 'required',
        'body' => 'required',
    );

    public function titles()
    {
        return $this->belongsTo('App\Title');
    }
}

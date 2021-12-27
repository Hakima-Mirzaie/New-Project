<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $guarded = [];


    public function requestable()
    {
        return $this->morphMany('App\Request', 'requestable');
    }
}

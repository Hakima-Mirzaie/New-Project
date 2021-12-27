<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];


    public function requests()
    {
        return $this->morphMany('App\Request', 'requestable');
    }
}

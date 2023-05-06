<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Player extends Authenticatable
{
    protected $guarded=['id'];
    public function relam()
    {
        return $this->belongsTo(Relam::class,'relam_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    public function player()
    {
        return $this->belongsTo(Player::class,'player_id');
    }
    public function relam()
    {
        return $this->belongsTo(Relam::class,'relam_id');
    }
}

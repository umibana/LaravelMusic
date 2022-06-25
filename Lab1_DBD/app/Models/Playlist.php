<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function Song(){
        return $this->belongsToMany('App\Song');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function genero()
    {
        return $this->belongsTo('App\Genre');
    }
    public function pais()
    {
        return $this->belongsTo('App\Location');
    }

    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    public function playlists(){
        return $this->belongsToMany('App\Playlist');
    }
}
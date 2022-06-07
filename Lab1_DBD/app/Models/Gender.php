<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function song()
    {
    return $this->hasMany(Song::class);
    }
    use HasFactory;
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class); //Pet pripada samo jednom User-u
    }
    public function neklaces(){
        return $this->hasMany(Neklace::class);//Pet ima vise Nekclaces
    }
}

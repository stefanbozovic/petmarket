<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Necklace extends Model
{ 
    use HasFactory;
    public function pet(){
        return $this->belongsTo(Pet::class); //Necklace pripada samo jednom Pet-u
    }
}

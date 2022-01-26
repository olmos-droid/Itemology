<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alfa extends Model
{
    use HasFactory;

    //relation muchos a muchos

    public function alfa(){
        return $this->belongsToMany('App\Models\Alfa');
    }
}

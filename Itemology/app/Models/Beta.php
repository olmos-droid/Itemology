<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beta extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    
    public function alfa()
    {
        return $this->belongsToMany('App\Alfa');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'synopsis', 'type', 'duration', 'year', 'price', 'image', 'file'];
    protected $hidden = ['created_at', 'updated_at',];
    use HasFactory;
    public function scopeTitle($query, $param)
    {
        return $query->where('title', 'like', $param);
    }
    public function scopeSynopsis($query, $param)
    {
        return $query->where('synopsis', 'like', $param);
    }
    public function scopeDuration($query, $param)
    {
        return $query->where('duration', 'like', $param);
    }
    public function scopeYear($query, $param)
    {
        return $query->where('year', 'like', $param);
    }
    public function scopeType($query, $param)
    {
        if ($param != 2) {
            return $query->where('type', $param);
        }
    }


}

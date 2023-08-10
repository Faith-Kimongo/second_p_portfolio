<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable=['user_id','myhustle_id'];

    public function scopeForHustle($query, Myhustle $myhustle)
    {
        return $query->where('myhustle_id', $myhustle->id);
    }

    // Myhustle
    public function myhustle(){
        return $this->belongsTo(Myhustle::class);
    }
}

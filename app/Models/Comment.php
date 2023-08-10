<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // myhustle
    public function myhustle(){
        return $this->belongsTo(Myhustle::class);
    }

    // the owner of the comments
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myhustle extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    // comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    // category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Likes
    public function likes(){
        return $this->hasMany(Like::class,'myhustle_id');
    }


    // popular 
    public function scopePopular($query)
    {
        return $query->where('views', '>', 10);
    }

    public function scopeTrending($query)
    {
        return $query->where('views', '>', 10);
    }




public function isLiked(): bool
{
    if ($this->likes()->count() > 0) {
        return true;
    } else {
        return false;
    }

}

public function removeLike(): bool
{
    
    // Get the likes by the auth user and delete
    if($this->likes()->where('user_id',auth()->id())->delete()){
        return true;
    } else {
        return false;
    }
    
}






}

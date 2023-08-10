<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable=['short_listed','short_listed_on'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public static function hasApplied($user_id, $job_id)
{
    return self::where('user_id', $user_id)
        ->where('job_id', $job_id)
        ->exists();
}
}

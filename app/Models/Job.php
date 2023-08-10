<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Job extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    // if applied
    public function isAppliedBy(User $user)
{
    return $this->applications()->where('user_id', $user->id)->exists();
}


    // if owner
    public function isOwnedByUser()
    {
        return $this->user_id === Auth::id();
    }


    // category
    public function category(){
        return $this->belongsTo(Category::class);
    }


    // Applicants
    public function applications(){
        return $this->hasMany(Application::class);
    }

    // Active
    public function scopeActive($query)
    {
        return $query->where('deadline', '>=', date('Y-m-d'));
    }


    // ROute model binding
    public function getRouteKeyName()
{
    return 'slug';
}

   

    protected $casts = [
        'deadline' => 'datetime'
    ];

    // Real Jobs Table
    protected $table = 'real_jobs';


}

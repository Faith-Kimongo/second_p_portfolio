<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;



    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    //saved jobs
    public function savedjobs()
    {
        return $this->hasMany(SavedJob::class);
    }

    //jobs applied
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    // skills
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_number',
        'cv',
        'profile_photo_path',
        'bio',
        'dob',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];




    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) =>
            $attributes['first_name'] . ' ' . $attributes['last_name'],

        );
    }
    protected $appends = [
        'profile_photo_url',
    ];



    // Company Details
    public function company()
    {
        return $this->hasOne(Company::class);
    }

    // company jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function myhustles()
    {
        return $this->hasMany(Myhustle::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    // For hustle
    public function scopeForHustle($query, Myhustle $myhustle)
    {
        return $query->where('myhustle_id', $myhustle->id);
    }



    
    public function scopeComplete($query)
    {
        return $query->whereNotNull('first_name')
        ->whereNotNull('last_name')
        ->whereNotNull('cv')
        ->whereNotNull('bio');
    }


    public function getCompletionPercentageAttribute()
    {
        $filledFields = 0;
        foreach ($this->fillable as $field) {
            if (!empty($this->$field)) {
                $filledFields++;
            }
        }
        return ($filledFields / count($this->fillable)) * 100;
    }
    

    
}

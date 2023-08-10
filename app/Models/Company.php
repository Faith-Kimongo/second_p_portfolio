<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_email' ,
        'company_name',
        'company_size',
        'company_country',
        'company_website',
        'source',
        'company_bio',
        'user_id',
    ];



    public function representative(){
        return $this->hasOne(Companyrep::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;


    protected $casts=[
        'start_date' => 'datetime:Y-m-d',
        'end_date' => 'datetime:Y-m-d',

    ];
}

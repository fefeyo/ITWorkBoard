<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profile';

    protected $fillable = [
    'name',
    'gender',
    'birth',
    'phone_number',
    'collage',
    'collage_type',
    'github',
    'intern',
    'hackathon',
    'work',
    'tech'
    ];
}

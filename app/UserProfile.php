<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profile';

    protected $fillable = [
    'user_id',
    'name',
    'gender',
    'birth',
    'address',
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

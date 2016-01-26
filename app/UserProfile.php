<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    public function profile()
    {
        return $this->hasOne(CompanyProfile::class);
    }

    protected $table = 'user_profile';

    protected $fillable = [
    'student_id',
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

    protected $dates = ['created_at', 'updated_at'];
}

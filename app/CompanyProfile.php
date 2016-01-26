<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profile';

    protected $fillable = [
    'name',
    'company_id',
    'phone_number',
    'email',
    'homepage'
    ];
}

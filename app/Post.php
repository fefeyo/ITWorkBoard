<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function posts()
    {
        return $this->hasOne(CompanyProfile::class);
    }

    protected $table = 'posts';

    protected $fillable = [
    'company_id',
    'company_name',
    'title',
    'category_id',
    'description',
    'reward',
    'remain',
    'limit'
    ];
}

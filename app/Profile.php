<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'name', 'user_photo', 'location', 'desc', 'job_year', 'proj', 'status', 'cv'
    ];
}

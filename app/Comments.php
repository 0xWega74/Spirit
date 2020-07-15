<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'name', 'email', 'caption', 'post_id'
    ];

    public function blogs() {
        $this->hasMany('App/blogs');
    }
}

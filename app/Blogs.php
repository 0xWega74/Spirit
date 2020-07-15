<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{


    protected $fillable = [
        'title', 'photo', 'content', 'tag_name', 'slug'
    ];



    public function tags() {
        return $this->belongsTo('App/Tags');
    }

    public function comments() {
        return $this->belongsTo('App/Comments');
    }
}

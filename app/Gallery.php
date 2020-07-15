<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title', 'photo','tag_name'
    ];


    public function getphotoAttribute($photo) {
        return asset($photo);
    }


    public function tags() {
        return $this->belongsTo('App/Tags');
    }
}

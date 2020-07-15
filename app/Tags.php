<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{

    
    public function blogs() {
        return $this->hasMany('App/Blogs');
    }

    public function gallery() {
        return $this->hasMany('App/Gallery');
    }
}
